@extends('layouts.adminfronend')
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
    @if(Session()->has('success'))
  <div class="alert alert-success" role="alert">
    {{Session()->get('success')}}
  </div>     
  @endif
  
      <div class="container-fluid">
        <h1 class="m-0 text-dark">แก้ไขข้อมูลสมาชิก</h1>
       
        <form action="{{ url('admin/updateUser/'.$user->id) }}" method="post" class="form-horizontal mt-5" enctype="multipart/form-data">
        {{csrf_field()}}
        <div  class="form-group">
            <div class="row">
            <label for="name" class="col-sm-2 control-label">Name</label>
                <div class="col-sm-9">
                    <input type="text" name="name" class="form-control" value="{{$user->name}}" >
                </div>
            </div>
        </div>
        <div  class="form-group">
            <div class="row">
            <label for="username" class="col-sm-2 control-label">Username</label>
                <div class="col-sm-9">
                    <input type="text" name="username" class="form-control" value="{{$user->username}}" >
                </div>
            </div>
        </div>
        <div  class="form-group">
            <div class="row">
            <label for="password" class="col-sm-2 control-label">Password</label>
                <div class="col-sm-9">
                    <input type="text" name="password" class="form-control" value="{{$user->password}}" >
                </div>
            </div>
        </div>
        
        <div  class="form-group">
           <div class="row">
           <label for="email" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-9">
                    <input type="email" name="email" class="form-control" value="{{$user->email}}">
                </div>
           </div>
        </div>
        <div  class="form-group">
           <div class="row">
           <label for="address" class="col-sm-2 control-label">Address</label>
                <div class="col-sm-9">
                    <input type="text" name="address" class="form-control" value="{{$user->address}}">
                </div>
           </div>
        </div>
        <div  class="form-group">
           <div class="row">
           <label for="phone" class="col-sm-2 control-label">Phone</label>
                <div class="col-sm-9">
                    <input type="text" name="phone" class="form-control" value="{{$user->phone}}">
                </div>
           </div>
        </div>
        <div class="form-group">
            <div class="col-sm-12">
                <center>
                <input type="submit" name="update" class="btn btn-primary " value="Update">
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