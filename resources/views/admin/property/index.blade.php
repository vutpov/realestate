@extends('admin.master')

@section('col','col-md-12')

@section('page-header','View All Property Types')

@section('content')

<div class="dummy-wrapper">
    <div class="dummy"></div>
</div>


<div class="table-responsive my-dataTable">

    <table class="table table-hover property-table">

        <thead>
            <tr>
                <th>#</th>
                <th>Code</th>
                <th>Property Types</th>
                <th>Attribute</th>
                <th>Description</th>
                <th>No</th>
                <th>St</th>
                <th>Cost</th>
                <th>Price</th>
                <th>Free</th>
                <th>Project</th>
                <th>Partner</th>
                <th>Staff</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>





            @foreach ($property as $item)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$item->propertyCode}}</td>
                <td>{{$item->propertyType}}</td>
                <td>{{$item->propAttribute}}</td>
                <td>{{$item->description}}</td>
                <td>{{$item->no}}</td>
                <td>{{$item->st}}</td>
                <td>{{$item->cost}}</td>
                <td>{{$item->price}}</td>
                <td>{{$item->free}}</td>

                @if($item->project)
                <td>{{$item->project}}</td>
                @else
                <td></td>
                @endif

                @if($item->partner)
                <td>{{$item->partner}}</td>
                @else
                <td></td>
                @endif

                <td>{{$item->name}}</td>
                <td>{{$item->created_at}}</td>
                <td>{{$item->updated_at}}</td>
                <td>
                    <a href="/system/editPropTypes/{{$item->propertyId}}"><i class="fa fa-edit"></i></a>
                    @if($item->status == 1)
                    {{-- <a href="/system/PropTypesStatus/{{$item->propertyId}}/trash"><i class="fa fa-trash"></i></a>
                    --}}
                    @else
                    <a href="/system/PropTypesStatus/{{$item->propertyId}}/recycle"><i class="fas fa-recycle"></i></a>
                    @endif
                </td>
            </tr>
            @endforeach

        </tbody>




    </table>

</div>

{{-- <div class="form-group">
    <label for="">
        <input type="checkbox" name="chkbox" id="chkbox-proptyType" {{$check}}>
Trash
</label>
</div> --}}

@endsection

@section('display-detail','display:none')

@section('script')
<script>
    $(document).ready(function() {
        $('.property-table').DataTable({
            
            'autoWidth':true
        });

        let dataTableWidth=$('.my-dataTable tbody').width()+'px';
        let boxBodyWidth=$('.box-body').width()+'px';

        console.log(dataTableWidth,boxBodyWidth);
        $('.dummy').css('width',dataTableWidth);
        $('.dummy-wrapper').css('width',boxBodyWidth);
        

        $(".dummy-wrapper").scroll(function(){
            $(".my-dataTable").scrollLeft($(".dummy-wrapper").scrollLeft());
        });
        $(".my-dataTable").scroll(function(){
            $(".dummy-wrapper").scrollLeft($(".my-dataTable").scrollLeft());
        });


    });


    
</script>

@endsection