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
        <h1 class="m-0 text-dark">เพิ่มสินค้า</h1>
        <form action="{{ url('admin/createProduct/') }}" method="post" class="form-horizontal mt-5" enctype="multipart/form-data">
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
            <label for="detail" class="col-sm-2 control-label">detail</label>
                <div class="col-sm-9">
                    <input type="text" name="detail" class="form-control" >
                </div>
            </div>
        </div>
        <div  class="form-group">
            <div class="row">
            <label for="price" class="col-sm-2 control-label">price</label>
                <div class="col-sm-9">
                    <input type="text" name="price" class="form-control" >
                </div>
            </div>
        </div>
        <div class="form-group">
        <div class="row">
            <label for="type" class="col-sm-2 control-label">Type Product</label>
            <div class="col-sm-9">
            <select class="form-control" name="typeproduct">
                    <option value=""></option>
                    @foreach($types as $type)
                    <option value="{{$type->id}}">{{$type->name}}</option>
                    @endforeach
            </select>
            </div>
            </div>
        </div>
        <div  class="form-group">
           <div class="row">
           <label for="name" class="col-sm-2 control-label">Image</label>
                <div class="col-sm-9">
                    <input type="file" name="image" class="form-control">
                </div>
           </div>
        </div>
        <div class="form-group">
            <div class="col-sm-12">
                <center>
                <input type="submit" name="insert" class="btn btn-success " value="Insert">
                <a href="{{route('ProductHome') }}" class="btn btn-danger">Cancel</a>
                </center>
                
            </div>
        </div>
    </form>
    
      </div>
    </div>
    <!-- /.content-header -->

    </div>
@endsection