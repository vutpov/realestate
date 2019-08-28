<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Book;
use App\BookDetail;
use App\ContractDetail;
use App\InstallSchedule;

class ContractController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return View('admin.contract.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $book = Book::all();

        $statement = DB::select("SHOW TABLE STATUS LIKE 'contracts'");

        $nextId = $statement[0]->Auto_increment;
        return View('admin.contract.create', compact('book', 'nextId'));
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
            'bookId' => 'required',
            'discount' => 'required|numeric',
            'subtotal' => 'required|numeric',
            'deposit' => 'required|numeric',
            'credit' => 'required|numeric',
            'scheduleList' => 'required'
        ]);

        if ($validator->passes()) {
            $book = Book::find($request->bookId);

            DB::table('contracts')->insert([
                'discount' => $request->discount,
                'subTotal' => $request->subtotal,
                'deposit' => $request->deposit,
                'credit' => $request->credit,
                'bookId' => $request->bookId,
                'staffId' => Auth::user()->staffId,
                'left' => 0,
                'status' => 1,
                'amount' => $book['credit'],
                'customerId' => $book['customerId'],
                'agencyId' => $book['agencyId'],
                'comission' => $book['commission']
            ]);

            $newContractId = DB::getPdo()->lastInsertId();

            $detail = BookDetail::select('propertyId', 'price', 'discount', 'amount')->where('bookId', $request->bookId)->get();

            $allRow = [];
            foreach ($detail as $item) {
                $temp['propertyid'] = $item["propertyId"];
                $temp['price'] = $item["price"];
                $temp['discount'] = $item["discount"];
                $temp['amount'] = $item["amount"];
                $temp['contractId'] = $newContractId;

                array_push($allRow, $temp);
            }
            ContractDetail::insert($allRow);

            Book::where('bookId', $request->bookId)->update(['status' => '3']);


            $allRow = [];
            $temp = [];
            foreach ($request->scheduleList as $rowJson) {
                $row = json_decode($rowJson, true);

                $temp["amountToPay"] = $row["amountToPay"];
                $temp["principle"] = $row["principle"];
                $temp["interest"] = $row["interest"];
                $temp["outPrinciple"] = $row["outPrinciple"];
                $temp["outDebt"] = $row["outDebt"];
                $temp["receive"] = 0;
                $temp["penalty"] = 0;
                $temp["status"] = 1;
                $temp["created_at"] = now();
                $temp["payDate"] = $row["payDate"];
                $temp["contractId"] = $newContractId;
                array_push($allRow, $temp);
            };

            InstallSchedule::insert($allRow);



            return response()->json(['message' => ['Added new record.']], 200);
        }
        return response()->json(['message' => $validator->errors()->all(), 'data' => $request->scheduleList], 403);
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
        //
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

    public function schedule()
    {
        return View('admin.contract.schedule');
    }
}
