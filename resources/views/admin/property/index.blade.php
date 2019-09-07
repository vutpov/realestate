@extends('admin.master')

@section('col','col-md-12')

@section('page-header','View All Properties')

@section('content')


<div class="two-scrolled-wrapper">



    <div class="table-responsive">

        <table class="table table-hover dataTable">

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
                    <th>Thumbnail</th>
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
                    <td><img src="{{url('/storage')}}/{{$item->image}}" alt="" class="img-fluid" width="100"
                            height="100" />
                    </td>
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

                    </td>
                </tr>
                @endforeach

            </tbody>




        </table>

    </div>

</div>



{{-- <div class="form-group">
    <label for="">
        <input type="checkbox" name="chkbox" id="chkbox-proptyType" {{$check}}>
Trash
</label>
</div> --}}

@endsection

@section('display-detail','display:none')

