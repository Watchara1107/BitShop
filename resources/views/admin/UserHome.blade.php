@extends('layouts.admin')
@section('body')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @if(Session()->has('success'))
  <div class="alert alert-success" role="alert">
    {{Session()->get('success')}}
  </div>     
  @endif
  @if(Session()->has('update'))
  <div class="alert alert-success" role="alert">
    {{Session()->get('update')}}
  </div>     
  @endif
    <div class="content-header">
      <div class="container-fluid">
        <h1 class="m-0 text-dark">ผู้ใช้งานระบบ</h1>
    <div class="table-responsive mt-4">
    <div class="mt-2">
    <a href="{{url('admin/UserForm')}}" class="btn btn-success">เพิ่มสมาชิก</a>
    </div>
    <div class="mt-5"> 
    <table class="table mt-4">
  <thead class="thead-light">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Phone</th>
      <th scope="col">Detail</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    @foreach($user as $users)
    <tr>
      <th scope="row">{{$users->id}}</th>
      <td>{{$users->username}}</td>
      <td>{{Str::limit($users->password,15)}}</td>
      <td>{{$users->name}}</td>
      <td>{{$users->email}}</td>
      <td>{{Str::limit($users->address,35)}}</td>
      <td>{{$users->phone}}</td>
      <td>
      <a href="{{url('admin/detailuser/'.$users->id)}}" class="btn btn-primary">Detail</a>
      </td>
      <td>
      <a href="{{url('admin/EditUser/'.$users->id)}}" class="btn btn-warning">Edit</a>
      </td>
      <td>
        <a href="{{ url('/admin/deleteUser/'.$users->id) }}" class="btn btn-danger" onclick="return confirm('คุณต้องการลบข้อมูลหรือไม่')">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
{{$user->links()}}
    </div>
      </div>
    </div>
    <!-- /.content-header -->
    </div>
    </div>
@endsection