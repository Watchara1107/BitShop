@extends('layouts.adminfronend')
@section('body')

<div class="content-wrapper">
@if (count($errors)>0)
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
        <h1 class="m-0 text-dark">แก้ไขประเภทสินค้า</h1>
        <form action="{{ url('/admin/updateType/'.$type->id) }}" method="post" class="form-horizontal mt-5" enctype="multipart/form-data">
        {{csrf_field()}}
        <div  class="form-group">
            <label for="name" class="col-sm-2 control-label">Name</label>
                <div class="col-sm-12">
                    <input type="text" name="name" class="form-control" value="{{$type->name}}">
                </div>
        </div>
        
        <div class="form-group">
            <div class="col-sm-12">
             
                <input type="submit" name="update" class="btn btn-success " value="update">
            
                
            </div>
        </div>
    </form>


      </div>
    </div>
    <!-- /.content-header -->

    </div>
@endsection