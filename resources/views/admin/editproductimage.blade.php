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
        <h1 class="m-0 text-dark">แก้ไขรูปภาพ</h1>
        <form action="{{ url('admin/updateproductimage/'.$product->id) }}" method="post" class="form-horizontal mt-5" enctype="multipart/form-data">
        {{csrf_field()}}
        <div>
        <a href="{{asset('images/'. $product->image)}}" data-lity>
        <img src="{{asset('images/'. $product->image)}}" style="width:200px">
      </a> 
        </div>
        <div  class="form-group">
           <label for="name" class="col-sm-2 control-label">Image</label>
                <div class="col-sm-12">
                    <input type="file" name="image" class="form-control">
                </div>
        </div>
        <div class="form-group">
            <div class="col-sm-12">
                <input type="submit" name="update" class="btn btn-primary " value="Update Image">
            </div>
        </div>
       
    </form>
    
      </div>
    </div>
    <!-- /.content-header -->

    </div>
@endsection