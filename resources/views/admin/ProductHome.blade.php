@extends('layouts.admin')
@section('body')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
    @if(Session()->has('success'))
  <div class="alert alert-success" role="alert">
    {{Session()->get('success')}}
  </div>     
  @endif
  @if(Session()->has('error'))
  <div class="alert alert-success" role="alert">
    {{Session()->get('error')}}
  </div>     
  @endif
  @if(Session()->has('update'))
  <div class="alert alert-success" role="alert">
    {{Session()->get('update')}}
  </div>     
  @endif
      <div class="container-fluid">
        <h1 class="m-0 text-dark">สินค้า</h1>
    <div class="table-responsive mt-4">
    <div class="mt-2">
    <a href="{{ route('ProductForm') }}" class="btn btn-success">เพิ่มสินค้า</a>
    </div>
    <div class="mt-5">
    @if($product->count()>0)
    
    <table class="table mt-4">
  <thead class="thead-light">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">images</th>
      <th scope="col">Product Name</th>
      <th scope="col">detail</th>
      <th scope="col">price</th>
      <th scope="col">Type Product</th>
     <!-- <th scope="col">Date Time</th>
      <th scope="col">Update Date Time</th> -->
      <th scope="col">Edit Images</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    @foreach($product as $products)
    <tr>
      <th scope="row">{{$products->id}}</th>
      <td> 
      <a href="{{asset('images/'. $products->image)}}" data-lity>
      <img src="{{asset('images/'. $products->image)}}" style="width:100px">
      </a> 
      </td>
      <td>{{$products->name}}</td>
      <td>{{Str::limit($products->detail,30)}}</td>
      <td>฿{{number_format($products->price)}}</td>
      <td>{{$products->type->name}}</td>

      <!--<td>{{$products->created_at}}</td>
      <td>{{$products->updated_at}}</td>-->
      <td>
      <a href="{{ url('/admin/editproductimage/'.$products->id) }}" class="btn btn-primary">Edit Image</a>
      </td>
      <td>
      <a href="{{ url('/admin/editproduct/'.$products->id) }}" class="btn btn-warning">Edit</a>
      </td>
      <td>
        <a href="{{ url('/admin/deleteProduct/'.$products->id) }}" class="btn btn-danger" onclick="return confirm('คุณต้องการลบข้อมูลหรือไม่')">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

{{$product->links()}}
@else
        <div class="alert alert-danger">
          <p>ไม่มีข้อมูลสินค้า</p>
        </div>
    @endif
    </div>
      </div>
    </div>
    <!-- /.content-header -->
    </div>
    </div>
@endsection