<section class="invoice">

    <div class="alert show-message" style="display:none">

    </div>


    <!-- title row -->
    <div class="row">
        <div class="col-xs-12" style="width:100%">
            <h2 class="page-header">
                <i class="fa fa-globe"></i>{{$company->CompanyName}}
                <small class="pull-right">Date: <span id="date"></span></small>
            </h2>
        </div>
        <!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
            From
            <address>

                <strong>{{$company->CompanyName}}</strong><br>
                {{$company->description}}<br>
                {{$company->address}}<br>
                Phone: {{$company->tel}}<br>
                Email: {{$company->email}}
            </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
            To
            <address>


                <strong>{{$customer->name}}</strong><br>
                {{$customer->address}}<br>
                Phone: {{$customer->phone}}<br>
                Email: {{$customer->email}}
            </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
            <b>Invoice: <span id="invoice-code"></span></b><br>
            <b>Contract Id:</b> {{$customer->contractId}}
            <br>

            <b>Staff:</b> {{$staff->name}}
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

    @yield('content-invoice')





    <!-- this row will not appear when printing -->
    <div class="row no-print">
        <div class="col-xs-12">
            {{-- <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a> --}}
            <button type="button" class="btn btn-success pull-right" id="btn-submitPayment"><i class="fa fa-credit-card"></i> Submit Payment
            </button>
            {{-- <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
                <i class="fa fa-download"></i> Generate PDF
            </button> --}}
        </div>
    </div>
</section>