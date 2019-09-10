<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Book;
use App\Contract;
use App\Property;
use App\Project;
use App\Invoice;


class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */




    public function index()
    {

        $book = Book::sum('deposit');
        $bookCount = Book::count('*');

        $contract = Contract::sum('deposit');
        $contractCount = Contract::count('*');

        $project = Project::count('*');
        $propertyCount = Property::count('*');

        $installment = Invoice::where('invoiceType','installment')->sum('total'); 

        
        $data = [
            'book' => $book,
            'bookCount' => $bookCount,
            'contract' => $contract,
            'contractCount' => $contractCount,
            'propertyCount' => $propertyCount,
            'installment' => $installment,
            'project' => $project
        ];

        return View('admin.dashboard.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
}
