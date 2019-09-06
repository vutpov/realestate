@extends('admin.master')

@section('col','col-md-12')

@section('page-header','View All Invoice')

@section('content')

<table class="table table-hover dataTable">




    {{-- $table->bigIncrements('invoiceId');

        $table->text('invoiceNum');
        $table->String('invoiceType');
        $table->double('tAmount', 15, 2);
        $table->double('tItemDiscount', 15, 2)->default(0);
        $table->double('inDiscount', 15, 2)->default(0);
        $table->double('total', 15, 2);
        $table->tinyInteger('status')->default(1);
        $table->timestamps();

        $table->unsignedSmallInteger('staffId');
        $table->unsignedBigInteger('customerId'); --}}
    <thead>
        <tr>
            <th>#</th>
            <th>Num</th>
            <th>Customer</th>
            <th>Staff</th>
            <th>Date</th>
            <th>Type</th>
            <th>Amount</th>
            <th>Item Discount</th>
            <th>Discount</th>
            <th>Total Discount</th>
            <th>Total</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>


        @foreach ($invoice as $item)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$item->invoiceNum}}</td>
            <td>{{$item->customer}}</td>
            <td>{{$item->staff}}</td>
            <td>{{$item->created_at}}</td>
            <td>{{$item->tAmount}}</td>
            <td>{{$item->invoiceType}}</td>
            <td>{{$item->tItemDiscount}}</td>
            <td>{{$item->inDiscount}}</td>
            <td>{{$item->inDiscount + $item->tItemDiscount }}</td>
            <td>{{$item->total}}</td>
            <td>
                @if($item->status==1)
                Success
                @else
                Void
                @endif
            </td>
            <td><a href="{{url('/system/editUser')}}"><i class="fa fa-edit"></i></a>
                <a href="{{url('/system/editUser')}}"><i class="fa fa-trash"></i></a></td>
        </tr>
        @endforeach


    </tbody>

</table>

@endsection

@section('display-detail','display:none')