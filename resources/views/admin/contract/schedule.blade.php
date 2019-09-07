@extends('admin.master')

@section('page-header','Create New Payment For Installment')


@section('col','col-md-12')
@section('content')




<div class="two-scrolled-wrapper">
    {{-- schedule --}}

    <div class="form-group">
        <table class="table table-hover dataTable">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Date</th>
                    <th>APay</th>
                    <th>Prin.</th>
                    <th>Int.</th>
                    <th>OutPrin.</th>
                    <th>Out.Debt</th>
                    <th>Penalty</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>


                {{-- @foreach ($user as $u)
                <tr>
                    <td>{{$loop->iteration}}</td>
                <td>{{$u->username}}</td>
                <td>{{$u->name}}</td>
                <td>{{$u->role}}</td>
                <td>{{$u->status}}</td>
                <td><a href="{{url('/system/editUser')}}"><i class="fa fa-edit"></i></a>
                    <a href="{{url('/system/editUser')}}"><i class="fa fa-trash"></i></a></td>
                </tr>
                @endforeach --}}


            </tbody>
        </table>
    </div>

</div>




@endsection

@section('display-detail','display:none')