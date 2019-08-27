<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Property;
use App\Customer;
use App\Agency;
use App\Book;
use App\BookDetail;

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

    public function getDetailBook($id)
    {
        $book = Book::find($id);
        $book['customer'] = Book::find($id)->customer->name;
        $book['agency'] = Book::find($id)->agency->agency;
        
        $detail = BookDetail::join('properties','book_details.propertyId', '=' , 'properties.propertyId')->select('propertyCode','book_details.price','discount','amount')->get();

        return compact('book','detail');
    }
}
