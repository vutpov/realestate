@extends('admin.master')

@section('page-header')
View Invoice For Contract Deposit
@endsection

@section('col','col-md-12')
@section('content')

<div class="form-group">

    @include('admin.invoice.installment')


</div>


@endsection

@section('display-detail','display:none')

@section('script')

<script>
    $('#btn-submitPayment').remove();

    $('#date').html("{{$invoice->created_at}}");

    $('#date').html(" {{ \Carbon\Carbon::parse($invoice->created_at)->format('d/m/Y H:i')}}");
    
    $('#invoice-code').html("{{$invoice->invoiceNum}}");

    $('#contract-Id').html("{{$contractId}}");

    
    $(".col-heading-schedule").remove();
    $(".summary-schedule").remove();
  
    $detail ={!!$invoice->detail!!};
    let dataRow='';
    $detail.forEach((element,index) => {
        let row='';
        row+=`<td>${index+1}</td>
            <td>${element['amount']}</td>
          
            <td>${element['itemDiscount']}</td>
            <td>${element['amount']}</td>
        `;
        dataRow+=`<tr>${row}</tr>`
    });




    $('#installment-detail').html(dataRow);
    
    $('#install-invoide-discount-wrapper input').remove();

    $('#install-penalty').html("{{ $summary['penalty'] }}");

    $('#install-invoide-discount-wrapper').html("{{ $summary['inDiscount'] }}");
 

    $('#install-item-discount').html("{{$summary['tItemDiscount']}} ");
    $('#install-total-discount').html("{{ $summary['tItemDiscount'] + $summary['inDiscount'] }}" );
    $('#install-total').html("{{ $summary['total'] }}");
    
    
</script>


@endsection