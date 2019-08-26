@extends('admin.master')

@section('page-header','View Booking')


@section('col','col-md-6')
@section('content')



<form id="form-submit-book" method="POST" enctype="multipart/form-data">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <div class="alert show-message master" style="display:none">

    </div>



    {{-- Customer --}}
    <div class="form-group">
        <label>Customer</label>
        <select class="form-control select2" name="customer" id="customerSelect">
            <option value="{{$customer->customerId}}">{{$customer->name}}</option>
        </select>
    </div>


    {{-- Agency --}}
    <div class="form-group">
        <label>Agency</label>
        <select class="form-control select2" name="agency" id="agencySelect">

            <option value="{{$agency->agencyId}}">{{$agency->agency}}</option>

        </select>
    </div>

    {{-- create date --}}
    <div class="form-group">
        <label>Created At:</label>

        <div class="input-group date">
            <div class="input-group-addon">
                <i class="fa fa-calendar"></i>
            </div>

            <?php
                use App\http\Helpers\Helper;

                $date = Helper::formatDateToString('d/m/y',$book->created_at);

                

            ?>

            <input type="text" class="form-control pull-right datepicker" value="{{$date}}" name="deadline"
                id="deadLineDatePicker" disabled>
        </div>
        <!-- /.input group -->
    </div>

    {{-- deadline --}}
    <div class="form-group">
        <label>Deadline:</label>

        <div class="input-group date">
            <div class="input-group-addon">
                <i class="fa fa-calendar"></i>
            </div>

            <?php
                

                $deadline = Helper::formatDateToString('d/m/y',$book->deadline);

               

            ?>

            <input type="text" class="form-control pull-right datepicker" value="{{ $deadline}}" name="deadline"
                id="deadLineDatePicker" disabled>
        </div>
        <!-- /.input group -->
    </div>

    {{-- <Button id="btnTest">Test</Button> --}}





</form>


@endsection



@section('col-detail','col-md-12')


@section('detail-header','Book Detail')


@section('detail')


<div class="book-detail">

    <div class="row">



        <div class="col-md-6">
            {{-- Limit Amount --}}
            <div class="form-group">
                <label class="control-label" for="commission">Limit Amount</label><!-- Default checked -->


                <div class="input-group">
                    <input type="number" class="form-control" name="limitAmount" id="limitAmount"
                        placeholder="Limit Amount" disabled value="{{$book->limitAmount}}">
                    <span class="input-group-addon-end">%</span>
                </div>

                <span class="help-block"></span>

                <div class="input-group" style="margin-top:20px">
                    <input type="number" class="form-control" name="limitMoney" id="limitMoney"
                        placeholder="Limit Amount" disabled value="{{$book->limitMoney}}">
                    <span class="input-group-addon-end">$</span>
                </div>

                <span class="help-block"></span>
            </div>

            {{-- Commission --}}

            <div class="form-group">
                <label class="control-label" for="commission">Commission</label>
                <input type="number" class="form-control" name="commission" id="commissionMaster"
                    placeholder="Commission" value="{{$book->commission}}" disabled />
                <span class="help-block"></span>
            </div>


            {{-- Amount --}}

            <div class="form-group">
                <label class="control-label" for="inputSuccess">Amount</label>
                <input type="number" class="form-control" name="amount" placeholder="Amount" id="amountMaster"
                    value="{{$book->amount}}" disabled />
                <span class="help-block"></span>
            </div>



            {{-- Total Discount --}}

            <div class="form-group">
                <label class="control-label" for="inputSuccess">Total Discount</label>
                <input type="number" class="form-control" name="totalDiscount" id="discountMaster"
                    placeholder="Total Discount" value="{{$book->discount}}" disabled />
                <span class="help-block"></span>
            </div>





            {{-- SubTotal --}}

            <div class="form-group">
                <label class="control-label" for="inputSuccess">Subtotal</label>
                <input type="number" class="form-control" name="subtotal" placeholder="Subtotal" id="subtotalMaster"
                    value="{{$book->subTotal}}" disabled />
                <span class="help-block"></span>
            </div>



            {{-- Deposit --}}

            <div class="form-group">
                <label class="control-label" for="inputSuccess">Deposit</label>
                <input type="number" class="form-control" name="deposit" placeholder="Deposit" id="depositMaster"
                    value="{{$book->deposit}}" />
                <span class="help-block"></span>
            </div>


            {{-- Credit --}}

            <div class="form-group">
                <label class="control-label" for="inputSuccess">Credit</label>
                <input type="number" class="form-control" name="credit" placeholder="Credit" id="creditMaster"
                    value="{{$book->credit}}" disabled />
                <span class="help-block"></span>
            </div>


        </div>

    </div>






    {{-- Book Detail --}}

    <table class="table table-hover detail has-action" id="detail">
        <thead>
            <tr>
                <th>No</th>
                <th>Id</th>
                <th>Code</th>
                <th>Commission</th>
                <th>Cost</th>
                <th>Price</th>
                <th>Discount</th>
                <th>Amount</th>
            </tr>
        </thead>

        <tbody>

            @foreach ($detail as $item)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$item->propertyId}}</td>
                <td>{{$item->propertyCode}}</td>
                <td>{{$item->commission}}</td>
                <td>{{$item->cost}}</td>
                <td>{{$item->price}}</td>
                <td>{{$item->discount}}</td>
                <td style="padding: .75rem;">{{$item->amount}}</td>

            </tr>
            @endforeach
        </tbody>


    </table>



</div>



@endsection

{{-- JAVASCRIPT --}}
@section('script')

@endsection