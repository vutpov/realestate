<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Property;
use App\Customer;
use App\Agency;
use App\Book;
use App\BookDetail;
use App\Http\Helpers\Helper;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use DateTime;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $book = DB::select(
            DB::raw("select 
            bookId,
            s.name 'staff',
            c.name 'customer',
            agency,
            b.created_at,
            deadline,
            b.status,
            (case
                when datediff(date(deadline),now()) >=20 then 2
                when datediff(date(deadline),now()) >=10 then 1
                when datediff(date(deadline),now()) >=0 then 0
                else -1
            end) as lateness
        from books b 
            join staffs s on b.staffId=s.staffId 
            join customers c on c.customerId=b.customerId
            left join agencies a on a.agencyId=b.agencyId;")
        );

        // dd($book);
        return View('admin.book.index', compact('book'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $property = PropertyController::getAvailableProperty();

        $customer = Customer::select('customerId', 'name')->get();
        $agency = Agency::select('agencyId', 'agency')->get();

        $data = [
            'property' => $property,
            'customer' => $customer,
            'agency' => $agency
        ];
        return View('admin.book.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $validator = Validator::make($request->all(), [

            'customer' => 'required',
            'agency' => 'required',
            'deadline' => 'required|date_format:m/d/Y',
            'limitAmount' => 'required|numeric',
            'limitMoney' => 'required|numeric',
            'amount' => 'required|numeric',
            'discount' => 'required|numeric',
            'subTotal' => 'required|numeric',
            'deposit' => 'required|numeric',
            'credit' => 'required|numeric',
            'commission' => 'required|numeric',
        ]);



        DB::table('books')->insert([
            'deadline' => Helper::formatMysqlDate($request->deadline),
            'customerId' => $request->customer,
            'agencyId' => $request->agency,
            'limitAmount' => $request->limitAmount,
            'limitMoney' => $request->limitMoney,
            'amount' => $request->amount,
            'discount' => $request->discount,
            'subTotal' => $request->subTotal,
            'deposit' => $request->deposit,
            'credit' => $request->credit,
            'commission' => $request->commission,
            'created_at' => now(),
            'staffId' => Auth::user()->staffId,
            'status' => 1
        ]);



        $newBookId = DB::getPdo()->lastInsertId();

        $detail = [];

        $allRow = [];

        foreach ($request->detail as $rowJson) {
            $row = json_decode($rowJson, true);

            $temp["bookId"] = $newBookId;
            $temp["customerId"] = $request->customer;
            $temp["propertyId"] = $row["id"];
            $temp["price"] = $row["price"];
            $temp["discount"] = $row["discount"];
            $temp["amount"] = $row["amount"];
            $temp["commission"] = $row["commission"];
            $temp["created_at"] = now();

            PropertyController::updatePropertyStatus($row["id"], 2);
            array_push($allRow, $temp);
        };

        BookDetail::insert($allRow);



        if ($validator->passes()) {
            return response()->json(['message' => ['Added new book.'], 'data' => $detail], 200);
        }

        return response()->json(['message' => $validator->errors()->all(), 'errorCode' => true, 'data' => $detail], 403);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = DB::table('books')
            ->where('bookId', '=', $id)
            ->first();


        $customer =  DB::table('customers')
            ->where('customerId', '=', $book->customerId)
            ->first();

        $agency =  DB::table('agencies')
            ->where('agencyId', '=', $book->agencyId)
            ->first();



        $bookDetail = DB::table('book_details')
            ->join('properties', 'properties.propertyId', 'book_details.propertyId')
            ->where('bookId', '=', $id)
            ->select(
                'book_details.propertyId',
                'propertyCode',
                'commission',
                'book_details.price',
                'properties.cost',
                'book_details.amount',
                'book_details.discount'
            )
            ->get();

        $data = [
            "book" => $book,
            "customer" => $customer,
            "agency" => $agency,
            "detail" => $bookDetail,
        ];

        return View('admin.book.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getDetailBook($id)
    {
        $book = Book::find($id);
        $book['customer'] = Book::find($id)->customer->name;
        $book['agency'] = Book::find($id)->agency->agency;
        
        $detail = BookDetail::join('properties','book_details.propertyId', '=' , 'properties.propertyId')->select('propertyCode','book_details.price','discount','amount')->where('bookId',$id)->get();

        return compact('book','detail');
    }
}
