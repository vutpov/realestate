<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Book;
use App\BookDetail;

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
        return View('admin.contract.create',compact('book','nextId'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'bookId' => 'required',
            'discount' => 'required|numeric',
            'subtotal' => 'required|numeric',
            'deposit' => 'required|numeric',
            'credit' => 'required|numeric',
        ]);

        if($validator->passes())
        {
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
                'comission' => $book['comission']
            ]);
            $newContractId = DB::getPdo()->lastInsertId() + 1;

            return response()->json(['message' => ['Added new records.'], 'contractId' => $newContractId], 200);
        }
        return response()->json(['message' => $validator->errors()->all(),], 403);
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
