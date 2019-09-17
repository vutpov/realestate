@extends('admin.invoice.invoice')

@section('ContractId-Or-BookId')
<b>Book Id:</b> <span id="contract-Id"></span></b><br>  {{$customer->name}}
@endsection

@section('content-invoice')
<div class="row">
    <div class="col-xs-12 table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>

                    <th>#</th>
                    <th class="col-heading-schedule">Paydate</th>
                    <th class="col-heading-schedule">Price</th>
                </tr>
            </thead>
            <tbody id="bookingInvoice-detail">

            </tbody>
        </table>
    </div>
    <!-- /.col -->
</div>
@endsection