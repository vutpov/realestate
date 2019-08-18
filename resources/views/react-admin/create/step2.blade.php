@extends('admin.create.layout')

@section('content')
    <form action="/system" method="POST">
        @csrf
        <div class="form-group has-feedback">
            <div class="row">
                <div class="col-lg-3">
                    <label class="company" for="name">Full Name</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" name="name" value="{{old('name')}}" class="form-control" placeholder="Full Name">
                </div>
            </div>
        </div>
        <div class="form-group has-feedback">
            <div class="row">
                <div class="col-lg-3">
                    <label class="company" for="username">Username</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" name="username" value="{{old('username')}}" class="form-control" placeholder="Username">
                </div>
            </div>
        </div>
        <div class="form-group has-feedback">
            <div class="row">
                <div class="col-lg-3">
                    <label class="company" for="password">Password</label>
                </div>
                <div class="col-lg-8">
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>
            </div>
        </div>
        <div class="form-group has-feedback">
            <div class="row">
                <div class="col-lg-3">
                    <label class="company" for="password">Confirmed Password</label>
                </div>
                <div class="col-lg-8">
                    <input type="password" name="confirmed" class="form-control" placeholder="Confirmed Password">
                </div>
            </div>
        </div>
        <div class="form-group has-feedback">
            <div class="row">
                <div class="col-lg-3">
                    <label class="company" for="email">Email</label>
                </div>
                <div class="col-lg-8">
                    <input type="email" name="email" value="{{old('email')}}" class="form-control" placeholder="Email">
                </div>
            </div>
        </div>
        <div class="form-group has-feedback">
            <div class="row">
                <div class="col-lg-3">
                    <label class="company" for="gender">Gender</label>
                </div>
                <div class="col-lg-8">
                    <select name="gender" class="form-control">
                        <option value="male" selected>Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group has-feedback">
            <div class="row">
                <div class="col-lg-3">
                    <label class="company" for="dob">Date of Birth</label>
                </div>
                <div class="col-lg-8">
                    <input type="date" value="{{old('dob')}}" name="dob" class="form-control">
                </div>
            </div>
        </div>
        <div class="form-group has-feedback">
            <div class="row">
                <div class="col-lg-3">
                    <label class="company" for="address">Address</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" name="address" value="{{old('address')}}" class="form-control" placeholder="Address">
                </div>
            </div>
        </div>
        <div class="form-group has-feedback">
            <div class="row">
                <div class="col-lg-3">
                    <label class="company" for="phone">Phone</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" name="phone" value="{{old('phone')}}" class="form-control" placeholder="Phone">
                </div>
            </div>
        </div>
        <div class="form-group has-feedback">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-8">
                    <input type="submit" value="Submit" class="btn btn-primary pull-right">
                </div>
            </div>
        </div>
    </form>

    <div class="form-group has-feedback">
        <div class="row">
            <div class="col-lg-3">
                <a href="/system" class="btn btn-primary" style="margin-top:-50px;">Previous step</a>
            </div>
            <div class="col-lg-8">
            </div>
        </div>
    </div>
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