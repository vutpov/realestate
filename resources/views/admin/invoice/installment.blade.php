@extends('admin.invoice.invoice')

@section('ContractId-Or-BookId')
<b>Contract Id:</b> <span id="contract-Id"></span></b><br>  {{$customer->contractId}}
@endsection

@section('content-invoice')

<div class="row">
    <div class="col-xs-12 table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>

                    <th>#</th>
                    <th class="col-heading-schedule">Paydate</th>
                    <th class="col-heading-schedule">Interest</th>
                    <th class="col-heading-schedule">Principle</th>
                    <th>Amount To Pay</th>

                    <th class="col-heading-schedule">Penalty</th>
                    <th>Discount</th>
                    <th>Sub Total</th>
                </tr>
            </thead>
            <tbody id="installment-detail">

            </tbody>
        </table>
    </div>
    <!-- /.col -->
</div>

<div class="row">

    <!-- /.col -->
    <div class="col-xs-6 offset-6 summary-invoice">


        <div class="table">
            <table class="table">
                <tbody>

                    <tr class="summary-schedule">
                        <th>Interest:</th>
                        <td id="install-interest">0</td>
                    </tr>

                    <tr class="summary-schedule">
                        <th>Principle:</th>
                        <td id="install-principle">0</td>
                    </tr>

                    <tr class="summary-schedule">
                        <th>Penalty:</th>
                        <td id="install-penalty">0</td>
                    </tr>

                    <tr>
                        <th>Item Discount:</th>
                        <td id="install-item-discount">0</td>
                    </tr>

                    <tr>
                        <th>Invoice Discount:</th>
                        <td id="install-invoide-discount-wrapper"><input type="text" class="form-control" name="amount"
                                placeholder="Invoice Discount" id="install-invoice-discount" value="0" /></td>
                    </tr>

                    <tr>
                        <th>Total Discount:</th>
                        <td id="install-total-discount">0</td>
                    </tr>

                    <tr>
                        <th>Total:</th>
                        <td id="install-total">0</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- /.col -->
</div>

@endsection