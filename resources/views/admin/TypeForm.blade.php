@extends('layouts.admin')
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
  @if(Session()->has('error'))
  <div class="alert alert-danger" role="alert">
    {{Session()->get('error')}}
  </div>     
  @endif
  @if(Session()->has('update'))
  <div class="alert alert-success" role="alert">
    {{Session()->get('update')}}
  </div>     
  @endif
  @if(Session()->has('warning'))
  <div class="alert alert-warning" role="alert">
    {{Session()->get('warning')}}
  </div>     
  @endif
      <div class="container-fluid">
        <h1 class="m-0 text-dark">เพิ่มประเภทสินค้า</h1>
        <form action="#" method="post" class="form-horizontal mt-5" enctype="multipart/form-data">
        {{csrf_field()}}
        <div  class="form-group">
            <label for="name" class="col-sm-2 control-label">Name</label>
                <div class="col-sm-12">
                    <input type="text" name="name" class="form-control" >
                </div>
        </div>
        
        <div class="form-group">
            <div class="col-sm-12"> 
                <input type="submit" name="btn_insert" class="btn btn-success " value="Insert">
            </div>
        </div>
    </form>
    
    <div class="table-responsive my-4">
    @if($types->count()>0)
    <table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Type Product Name</th>
      <th scope="col">Product Count</th>
      <!--<th scope="col">Date Time</th>
      <th scope="col">Update Date Time</th>-->
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
  @foreach($types as $type)
    <tr>
      <th scope="row">{{$type->id}}</th>
      <td>{{$type->name}}</td>
      <td>{{$type->product->count()}}</td>
      <!--<td>{{$type->created_at}}</td>
      <td>{{$type->updated_at}}</td>-->
      <td>
        <a href="{{ url('/admin/editType/'.$type->id) }}" class="btn btn-warning">Edit</a>
      </td>
      <td>
        <a href="{{ url('/admin/deleteType/'.$type->id) }}" class="btn btn-danger" onclick="return confirm('คุณต้องการลบข้อมูลหรือไม่')">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
{{$types->links()}}
@else
        <div class="alert alert-danger">
          <p>ไม่มีข้อมูลประเภทสินค้า</p>
        </div>
    @endif
    </div>
      </div>
    </div>
    <!-- /.content-header -->
    </div>

@endsection