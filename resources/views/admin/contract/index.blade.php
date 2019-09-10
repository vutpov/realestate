@extends('admin.master')

@section('col','col-md-12')

@section('page-header','View All Contracts')

@section('content')



<div class="two-scrolled-wrapper">

    <table class="table table-hover dataTable">

        <thead>
            <tr>
                <th>#</th>
                <th>Contract Id</th>
                <th>Date</th>
                <th>Customer</th>
                <th>Agency</th>
                <th>Commission</th>
                <th>Discount</th>
                <th>Total</th>
                <th>Deposit</th>
                <th>Credit</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>

            @foreach ($contracts as $contract)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$contract->contractId}}</td>
                <td>
                    {{$contract->created_at}}
                </td>
                <td>{{$contract->customer}}</td>
                <td>{{$contract->agency}}</td>
                <td>{{$contract->comission}}</td>
                <td>{{$contract->discount}}</td>
                <td>{{$contract->subTotal}}</td>
                <td>{{$contract->deposit}}</td>
                <td>{{$contract->credit}}</td>
                <td><?php
                    $status;
                    switch ($contract->status) {
                        case 1:
                            $status="Pending";
                            break;
                        case 2:
                            $status="Success";
                            break;
                        default:
                            $status="Void";
                            break;
                    }
                ?>
                    {{$status}}</td>
                <td>
                    <a href="{{url('/system/editContract/'.$contract->contractId)}}"><i class="fa fa-search"></i></a>
                </td>
            </tr>
            @endforeach

        </tbody>

    </table>

</div>


@endsection

@section('display-detail','display:none')