<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\InvoiceDetail;
use App\InstallSchedule;
use App\Contract;
use App\Property;
use App\Invoice;
use App\Company;
use App\Book;
use App\Staffs;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invoice = DB::table('invoices as i')
            ->join('customers as c', 'c.customerId', 'i.customerId')
            ->join('staffs as s', 's.staffId', 'i.staffId')
            ->select([
                'i.*',
                'c.name as customer',
                's.name as staff'
            ])
            ->get();




        $data = ['invoice' => $invoice];
        return View('admin.payment.index', $data);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { }

    public function createPaymentBook($id = null)
    {
        if ($id == null) {
            $book = Book::where('status', 1)->get();
            return view('admin.payment.createPaymentBook', compact('book'));
        } else {
            $book = Book::where([['status', 1], ['bookId', '!=', $id]])->get();
            $company = Company::all()->first();
            $customer = Book::find($id)->customer;
            $customer['bookId'] = $id;
            $staff = Staffs::where('staffId', Auth::user()->staffId)->get()[0];
            return View('admin.payment.createPaymentBook', compact('book', 'company', 'customer', 'staff'));
        }
    }

    public function getListBookingDetail($id)
    {
        $detail = InvoiceDetail::join('invoices', 'invoice_details.invoiceID', '=', 'invoices.invoiceId')->select('invoiceNum', 'price', 'created_at')->where([['abstractId', $id], ['type', 'booking']])->get();
        $deposit = Book::select('limitMoney')->where('bookId', $id)->get();

        return compact('detail', 'deposit');
    }


    public function createPaymentInstallment()
    {
        return View('admin.payment.createPaymentInstallment');
    }




    public static function storeFirstDeposit($data)
    {

        DB::table('invoices')->insert([
            'invoiceNum' => rand(0, 999) . substr(time() . '', 6),
            'tAmount' =>  $data['tAmount'],
            'inDiscount' =>  $data['inDiscount'],
            'tItemDiscount' => $data['tItemDiscount'],
            'total' => $data['total'],
            'customerId' => $data['customerId'],
            'invoiceType' => $data['invoiceType'],
            'created_at' => now(),
            'staffId' => Auth::user()->staffId,
        ]);

        $newId = DB::getPdo()->lastInsertId();



        $temp["invoiceID"] = $newId;
        $temp["price"] =  $data['tAmount'];
        $temp["itemDiscount"] = $data['tItemDiscount'];
        $temp["amount"] = $data['tAmount'];
        $temp["penalty"] = 0;
        $temp["abstractId"] = $data["abstractId"];
        $temp["type"] = $data['invoiceType'];



        InvoiceDetail::insert($temp);
    }

    public function storePaymentBooking(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'bookId' => 'required',
            'invoiceNum' => 'required|numeric',
            'total' => 'required|numeric'
        ]);

        if ($validator->passes()) {
            $book = Book::find($request->bookId);
            DB::table('invoices')->insert([
                'invoiceNum' =>  $request->invoiceNum,
                'tAmount' =>  $request->total,
                'inDiscount' =>  0,
                'tItemDiscount' => 0,
                'total' => $request->total,
                'customerId' => $book['customerId'],
                'invoiceType' => 'booking',
                'created_at' => now(),
                'staffId' => Auth::user()->staffId,
            ]);

            $newId = DB::getPdo()->lastInsertId();

            DB::table('invoice_details')->insert([
                'price' => $request->total,
                'itemDiscount' => 0,
                'amount' => $request->total,
                'penalty' => 0,
                'abstractId' => $request->bookId,
                'type' => 'booking',
                'invoiceID' => $newId
            ]);

            $price = DB::select(DB::raw("SELECT sum(amount) as price from invoice_details where abstractId = $request->bookId"));
            if ($price[0]->price == $book->limitMoney)
                Book::where('bookId', $request->bookId)->update(['status' => '3']);

            return response()->json(['message' => ['Added new payment.']], 200);
        }

        return response()->json(['message' => $validator->errors()->all()], 403);
    }

    public function storePaymentInstallment(Request $request)
    {


        $validator = Validator::make($request->all(), [

            'invoiceNum' => 'required',
            'tAmount' => 'required|numeric',
            'inDiscount' =>  'required|numeric',
            'tItemDiscount' => 'required|numeric',
            'total' => 'required|numeric',
            'customerId' => 'required',
            'detail' => 'required',
            'contractId' => 'required'
        ]);





        if ($validator->passes()) {

            DB::table('invoices')->insert([
                'invoiceNum' =>  $request->invoiceNum,
                'tAmount' =>  $request->tAmount,
                'inDiscount' =>  $request->inDiscount,
                'tItemDiscount' => $request->tItemDiscount,
                'total' => $request->total,
                'customerId' => $request->customerId,
                'invoiceType' => 'installment',
                'created_at' => now(),
                'staffId' => Auth::user()->staffId,
            ]);

            $newId = DB::getPdo()->lastInsertId();


            $detail = [];

            foreach ($request->detail as $rowJson) {
                $row = json_decode($rowJson, true);

                $temp["invoiceID"] = $newId;
                $temp["price"] = $row["price"];
                $temp["itemDiscount"] = $row["itemDiscount"];
                $temp["amount"] = $row["amount"];
                $temp["penalty"] = $row["penalty"];
                $temp["abstractId"] = $row["abstractId"];
                $temp["type"] = 'installment';

                InstallSchedule::where('scheduleInstallId', $row["abstractId"])
                    ->update([
                        'status' => 2,
                        'receive' => $row["receive"]

                    ]);



                array_push($detail, $temp);
            };


            InvoiceDetail::insert($detail);

            $status = DB::table('install_schedules')
                ->select(DB::raw('summeriseScheduleStatus(contractId) as status'))
                ->where('contractId', $request->contractId)
                ->get()[0]->status;



            if ($status == 1) {
                Contract::where('contractId', $request->contractId)
                    ->update(['status' => 2]);


                $contractId = $request->contractId;

                Property::whereIn(
                    'propertyId',
                    function ($query) use (&$contractId) {
                        $query->select(DB::raw('propertyId'))
                            ->from('contract_details')
                            ->where('contractId', $contractId);
                    }
                )
                    ->update(['status' => 5]);

                $bookId = Contract::where('contractId', $request->contractId)->get()[0]->bookId;
                Book::where('bookId', $bookId)->update(['status' => 2]);
            }


            return response()->json(['message' => ['Added new payment.'], 'data' => $status], 200);
        }

        return response()->json(['message' => $validator->errors()->all(), 'errorCode' => true, 'data' => 'fail'], 403);
    }



    public function viewPaymentInstallment($id)
    {

        $invoice = Invoice::find($id);

        $customer = $invoice->customer;

        $staff = $invoice->staff;

        $invoice['detail'] = DB::table('invoice_details as i')
            ->select(
                'payDate',
                'interest',
                'principle',
                'amountToPay',
                'i.penalty',
                'contractId',
                'itemDiscount',
                'amount'
            )
            ->join('install_schedules as s', 's.scheduleInstallId', 'i.abstractId')
            ->where('invoiceId', '=', $invoice->invoiceId)
            ->where('type', '=', 'installment')
            ->get();

        $contractId = $invoice['detail'][0]->contractId;
        $summary = DB::table('install_schedules as s')
            ->select(
                DB::raw(
                    'SUM(interest) as interest,
                    SUM(principle) as principle,
                    SUM(i.penalty) as penalty,
                    tItemDiscount,
                    inDiscount,
                    total
                '
                )
            )
            ->join('invoice_details as i', 'i.abstractid', 's.scheduleInstallId')
            ->join('invoices as inv', 'inv.invoiceId', 'i.invoiceId')
            ->where('contractId', '=', $contractId)
            ->get()[0];


        $company = Company::first()->get()[0];


        $data = [
            'invoice' => $invoice,
            'company' => $company,
            'customer' => $customer,
            'staff' => $staff,
            'contractId' => $contractId,
            'summary' => $summary
        ];
        return View('admin.payment.payment-installment', $data);
    }

    public function  viewPaymentContractDeposit($id)
    {

        $invoice = Invoice::find($id);

        $customer = $invoice->customer;

        $staff = $invoice->staff;

        $invoice['detail'] = DB::table('invoice_details as i')
            ->select(
                'price',

                'i.penalty',
                'contractId',
                'itemDiscount',
                'i.amount',
                'contractId',
                'tItemDiscount',
                'inDiscount',
                'total'
            )
            ->join('contracts as c', 'c.contractId', 'i.abstractId')
            ->join('invoices as inv', 'inv.invoiceId', 'i.invoiceId')
            ->where('inv.invoiceId', '=', $invoice->invoiceId)
            ->where('type', '=', 'Contract deposit')
            ->get();


        $contractId = $invoice['detail'][0]->contractId;

        $summary = [];

        $summary['price'] =  $invoice['detail'][0]->price;
        $summary['penalty'] =  $invoice['detail'][0]->penalty;
        $summary['tItemDiscount'] =  $invoice['detail'][0]->tItemDiscount;
        $summary['inDiscount'] =  $invoice['detail'][0]->inDiscount;
        $summary['total'] =  $invoice['detail'][0]->total;

        // dd($summary);


        $company = Company::first()->get()[0];


        $data = [
            'invoice' => $invoice,
            'company' => $company,
            'customer' => $customer,
            'staff' => $staff,
            'contractId' => $contractId,
            'summary' => $summary
        ];
        return View('admin.payment.payment-contract-deposit', $data);
    }





    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

    public function voidPayment($id)
    {
        //
    }
}
