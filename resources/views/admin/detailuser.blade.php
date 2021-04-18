@extends('layouts.admin')
@section('body')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <h1 class="m-0 text-dark">ผู้ใช้งานระบบ</h1>
    <div class="table-responsive mt-4">
    <div class="mt-2">
    </div>
    <div class="mt-5"> 
        <div class="container">
        <div class="card">
        <div class="card-header">
           <h3>ข้อมูลผู้ใช้งานระบบ</h3> 
        </div>
        <div class="card-body">
            <p> <strong>ID:</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$user->id}}</p> 
            <p> <strong>Name:</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$user->name}}</p>
            <p><strong>Username:</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$user->username}}</p> 
            <p><strong>Password:</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$user->password}}</p>
            <p><strong>Email:</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$user->email}}</p>
            <p><strong>Address:</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$user->address}}</p>
            <p><strong>Phone:</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$user->phone}}</p>
        </div>
        <div class="card-footer">
            <center><a href="{{route('UserHome')}}" class="btn btn-success">กลับไปหน้าหลัก</a></center>
        </div>
        </div>
        </div>
    </div>
      </div>
    </div>
    <!-- /.content-header -->
    </div>
    </div>
@endsection