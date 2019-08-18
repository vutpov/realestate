@extends('admin.create.layout')

@section('content')

        <form action="/system/create-step2" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group has-feedback">
                <div class="row">
                    <div class="col-lg-3">
                        <label class="company" for="companyname">Company Name</label>
                    </div>
                    <div class="col-lg-8">
                        <input type="text" value="{{old('companyname')}}" name="companyname" class="form-control" placeholder="Company Name">
                    </div>
                </div>
            </div>
            <div class="form-group has-feedback">
                <div class="row">
                    <div class="col-lg-3">
                        <label class="company" for="email">Email</label>
                    </div>
                    <div class="col-lg-8">
                        <input type="email" value="{{old('email')}}" name="email" class="form-control" placeholder="Email">
                    </div>
                </div>
            </div>
            <div class="form-group has-feedback">
                <div class="row">
                    <div class="col-lg-3">
                        <label class="company" for="tel">Telephone</label>
                    </div>
                    <div class="col-lg-8">
                        <input type="text" value="{{old('tel')}}" name="tel" class="form-control" placeholder="Telephone">
                    </div>
                </div>
            </div>
            <div class="form-group has-feedback">
                <div class="row">
                    <div class="col-lg-3">
                        <label class="company" for="address">Address</label>
                    </div>
                    <div class="col-lg-8">
                        <input type="text" value="{{old('address')}}" name="address" class="form-control" placeholder="Address">
                    </div>
                </div>
            </div>
            <div class="form-group has-feedback">
                <div class="row">
                    <div class="col-lg-3">
                        <label class="company" for="address">Description</label>
                    </div>
                    <div class="col-lg-8">
                        <textarea name="description" value="{{old('description')}}" class="form-control" rows="3"></textarea>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3">
                    <label class="company" for="address">Logo</label>
                </div>
                <div class="col-lg-8" style="padding-top:12px">
                    <input type="file" name="logo" id="logo" required>
                </div>
            </div>
            

            {{-- <button type="submit" class="btn btn-primary pull-right">Next Step</button> --}}
            <div class="form-group has-feedback">
                <div class="row">
                    <div class="col-lg-3">

                    </div>
                    <div class="col-lg-8">
                        <input type="submit" value="Next Step" class="btn btn-primary pull-right">
                    </div>

                </div>
            </div>

        </form>
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
@endsection
