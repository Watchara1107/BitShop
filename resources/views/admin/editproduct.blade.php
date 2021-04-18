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
        <h1 class="m-0 text-dark">แก้ไขข้อมูลสินค้า</h1>
        <form action="{{ url('admin/updateProduct/'.$product->id) }}" method="post" class="form-horizontal mt-5">
        {{csrf_field()}}
        <div  class="form-group">
            
            <label for="name" class="col-sm-2 control-label">Name</label>
                <div class="col-sm-12">
                    <input type="text" name="name" class="form-control" value="{{$product->name}}">
                </div>
            
        </div>
        <div  class="form-group">
            
            <label for="detail" class="col-sm-2 control-label">detail</label>
                <div class="col-sm-12">
                    <input type="text" name="detail" class="form-control" value="{{$product->detail}}" >
                </div>
        </div>
        <div  class="form-group">
            <label for="price" class="col-sm-2 control-label">price</label>
                <div class="col-sm-12">
                    <input type="text" name="price" class="form-control" value="{{$product->price}}" >
                </div>
        </div>
        <div class="form-group">
            <label for="type" class="col-sm-2 control-label">Type Product</label>
            <div class="col-sm-12">
            <select class="form-control" name="typeproduct">
                    @foreach($types as $type)
                    <option value="{{$type->id}}"
                    @if($type->id == $product->typeproduct_id)
                    selected
                    @endif
                    >{{$type->name}}</option>
                    @endforeach
            </select>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-12">
                
                <input type="submit" name="update" class="btn btn-primary " value="Update">
                
                
            </div>
        </div>
    </form>
    
      </div>
    </div>
    <!-- /.content-header -->

    </div>
@endsection