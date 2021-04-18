<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Type;
use App\Product;

class ProductController extends Controller
{
    public function index(){
        return view("product.showProduct")
        ->with("products",Product::paginate(6))
        ->with("types",Type::all()->sortBy('name'));
    }
    public function findType($id){
        $types=Type::find($id);
        return view("product.findProduct")
        ->with("types",Type::all()->sortBy('name'))
        ->with("products",$types->product()->paginate(3))
        ->with('feature',$types->name);
    }
    public function details($id){
        return view("product.showProductdetails")
        ->with("product",Product::find($id))
        ->with("types",Type::all()->sortBy('name'));
    }
    public function searchProduct(Request $request){
        //dd($request->search);
        $name=$request->search;
        $product=Product::where('name',"LIKE","%{$name}%")->paginate(3);
        return view("product.searchProduct")
        ->with("products",$product)
        ->with("types",Type::all()->sortBy('name'));
    }

    public function searchProductPrice(Request $request){
        $arrPrice=explode(",",$request->price);
        $product=Product::whereBetween('price',$arrPrice)->orderBy('price');
        return view("product.showProduct")
        ->with("products",$product->paginate(3))
        ->with("types",Type::all()->sortBy('name'));
    }
}
