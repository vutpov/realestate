<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Property;
use App\Customer;
use App\Agency;
use App\Http\Helpers\Helper;
use Illuminate\Support\Facades\Validator;
use App\Book;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return View('admin.book.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {



        $property = Property::select('propertyId', 'propertyCode', 'cost', 'price')->get();
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

        // deadline : $('#deadLineDatePicker').val(),
        // customer : $('#customerSelect').val(),
        // agency : $('#agencySelect').val(),
        // limitAmount :  $('#limitAmount').val(),
        // limitMoney :  $('#limitMoney').val(),
        // amount : $('#amountMaster').val(),
        // discount : $('#discountMaster').val(),
        // subTotal : $('#subtotalMaster').val(),
        // deposit : $('#depositMaster').val(),
        // credit : $('#creditMaster').val(),

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

        $book = new Book;
        $book->deadline =  Helper::formatMysqlDate($request->deadline);
        $book->customerId = $request->customer;
        $book->agencyId = $request->agency;
        $book->limitAmount = $request->limitAmount;
        $book->limitMoney = $request->limitMoney;
        $book->amount = $request->amount;
        $book->discount = $request->discount;
        $book->subTotal = $request->subTotal;
        $book->deposit = $request->deposit;
        $book->credit = $request->credit;
        $book->commission = $request->commission;
        $book->staffId = Auth::user()->staffId;
        $book->status = 1;
        $book->save();


        if ($validator->passes()) {
            return response()->json(['message' => ['Added new book.']], 200);
        }

        return response()->json(['message' => $validator->errors()->all(), 'errorCode' => true, 'data' => Auth::user()->staffId], 403);
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
}
