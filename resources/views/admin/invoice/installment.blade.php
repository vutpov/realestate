@extends('admin.invoice.invoice')

@section('content-invoice')

<div class="row">
    <div class="col-xs-12 table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>

                    <th scope="col">#</th>
                    <th scope="col">Paydate</th>
                    <th scope="col">Interest</th>
                    <th scope="col">Principle</th>
                    <th scope="col">Amount To Pay</th>

                    <th scope="col">Penalty</th>
                    <th scope="col">Discount</th>
                    <th scope="col">Sub Total</th>
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

                    <tr>
                        <th>Interest:</th>
                        <td id="install-interest">0</td>
                    </tr>

                    <tr>
                        <th>Principle:</th>
                        <td id="install-principle">0</td>
                    </tr>

                    <tr>
                        <th>Penalty:</th>
                        <td id="install-penalty">0</td>
                    </tr>

                    <tr>
                        <th>Item Discount:</th>
                        <td id="install-item-discount">0</td>
                    </tr>

                    <tr>
                        <th>Invoice Discount:</th>
                        <td><input type="text" class="form-control" name="amount"
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