@extends('layouts.admin')
@section('body')
<div class="content-wrapper">
@if ($errors->any())
    <div class="alert alert-warning">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <h1 class="m-0 text-dark">เพิ่มสมาชิก</h1>
        <form action="{{ url('admin/createUser/') }}" method="post" class="form-horizontal mt-5" enctype="multipart/form-data">
        {{csrf_field()}}
        <div  class="form-group">
            <div class="row">
            <label for="name" class="col-sm-2 control-label">Name</label>
                <div class="col-sm-9">
                    <input type="text" name="name" class="form-control" >
                </div>
            </div>
        </div>
        <div  class="form-group">
            <div class="row">
            <label for="username" class="col-sm-2 control-label">Username</label>
                <div class="col-sm-9">
                    <input type="text" name="username" class="form-control" >
                </div>
            </div>
        </div>
        <div  class="form-group">
            <div class="row">
            <label for="password" class="col-sm-2 control-label">Password</label>
                <div class="col-sm-9">
                    <input type="password" name="password" class="form-control" >
                </div>
            </div>
        </div>
        <div class="form-group">
       
        </div>
        <div  class="form-group">
           <div class="row">
           <label for="email" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-9">
                    <input type="email" name="email" class="form-control">
                </div>
           </div>
        </div>
        <div  class="form-group">
           <div class="row">
           <label for="address" class="col-sm-2 control-label">Address</label>
                <div class="col-sm-9">
                    <input type="text" name="address" class="form-control">
                </div>
           </div>
        </div>
        <div  class="form-group">
           <div class="row">
           <label for="phone" class="col-sm-2 control-label">Phone</label>
                <div class="col-sm-9">
                    <input type="text" name="phone" class="form-control">
                </div>
           </div>
        </div>
        <div class="form-group">
            <div class="col-sm-12">
                <center>
                <input type="submit" name="insert" class="btn btn-success " value="Insert">
                <a href="{{route('UserHome') }}" class="btn btn-danger">Cancel</a>
                </center>
                
            </div>
        </div>
    </form>
    
      </div>
    </div>
    <!-- /.content-header -->

    </div>
@endsection