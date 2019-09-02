<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\InvoiceDetail;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return View('admin.payment.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { }

    public function createPaymentBook()
    {
        return View('admin.payment.createPaymentBook');
    }


    public function createPaymentInstallment()
    {
        return View('admin.payment.createPaymentInstallment');
    }


    public function storePaymentInstallment(Request $request)
    {

        // invoiceNum,
        // tAmount,
        // inDiscount,
        // tItemDiscount,
        // total,
        // customerId,
        // staffId


        $validator = Validator::make($request->all(), [

            'invoiceNum' => 'required',
            'tAmount' => 'required|numeric',
            'inDiscount' =>  'required|numeric',
            'tItemDiscount' => 'required|numeric',
            'total' => 'required|numeric',
            'customerId' => 'required',
            'detail' => 'required',

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
                array_push($detail, $temp);
            };

            InvoiceDetail::insert($detail);



            return response()->json(['message' => ['Added new payment.'], 'data' => $request->all()], 200);
        }

        return response()->json(['message' => $validator->errors()->all(), 'errorCode' => true, 'data' => 'fail'], 403);
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
