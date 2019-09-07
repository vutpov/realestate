@extends('admin.master')

@section('col','col-md-12')

@section('page-header','View All Book')

@section('content')






<table class="table table-hover dataTable">

    <thead>
        <tr>
            <th>#</th>
            <th>Book ID</th>
            <th>Staff</th>
            <th>Customer</th>
            <th>Agent</th>
            <th>Created Date</th>
            <th>Dead Line</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>


        @foreach ($book as $item)
        <?php
                        
                    $rowColor='';
                
                    switch ($item->lateness) {
                        case 1:
                            $rowColor='yellow-background';
                            break;
                        
                        case 0:
                            $rowColor='red-background ';
                            break;
                        
                        case -1:
                            $rowColor='dark-red-background white-color';
                            break;
                    }
                
                ?>

        <tr class="{{$rowColor}}">
            <td>{{$loop->iteration}}</td>
            <td>{{$item->bookId}}</td>
            <td>{{$item->staff}}</td>
            <td>{{$item->customer}}</td>
            <td>{{$item->agency}}</td>
            <td>{{$item->created_at}}</td>
            <td>{{$item->deadline}}</td>
            <td>
                <?php
                            $status;
                            switch ($item->status) {
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
                {{$status}}
            </td>
            <td><a href="{{route("editBook",['id'=>$item->bookId])}}"><i class="fas fa-search"></i></a>
            </td>
        </tr>
        @endforeach


    </tbody>

</table>






@endsection

@section('display-detail','display:none')