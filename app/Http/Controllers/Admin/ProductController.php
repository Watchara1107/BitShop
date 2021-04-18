<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Type;
use App\Product;
use Image;
use File;
use Illuminate\Support\Str;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    public function __construct(){
        $this->middleware("verifyType")->only(['create','store']);
    }
    public function index(){
        $product = Product::all();
        $product = Product::orderBy('id','desc')->get();
        $product = Product::paginate(3);
        return view('admin.ProductHome',[
            'product'=>$product,
        ]);
        
        
    }

    public function create(){
        return view('admin.ProductForm')->with('types',Type::all());
    }

    public function edit($id){
        //dd($product);
        return view('admin.editproduct')
        ->with('types',Type::all())
        ->with('product',Product::find($id));
    }

    public function editimage($id){
        return view('admin.editproductimage')->with('product', Product::find($id));
    }

    public function update(Request $request,$id){
        $request->validate([
            'name' => 'required',
            'detail'=>'required',
            'typeproduct'=>'required',
            'price'=>'required|numeric', 
        ]);

        $product = Product::find($id);
        $product->name = $request->name;
        $product->detail = $request->detail;
        $product->price = $request->price;

        if($request->typeproduct){
            $product->typeproduct_id=$request->typeproduct;
        }

        $product->save();
        Session()->flash("update","อัพเดทข้อมูลเรียบร้อยแล้ว");
        return redirect('/admin/ProductHome');
    }

    public function updateimage(Request $request,$id){
        $request->validate([
            'image'=>'file|image|mimes:jpeg,png,jpg|max:10000',
        ]);
        if($request->hasFile('image')){
            $product = Product::find($id);
            if($product->image != 'nopic.jpg'){
                File::delete(public_path().'\\images\\'. $product->image);
            }
            $filename = Str::random(10).'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path(). '/images/', $filename);
            Image::make(public_path(). '/images/'. $filename);
            $product->image = $filename;
        }
            $product->save();
            Session()->flash("update","แก้ไขข้อมูลรูปภาพเรียบร้อยแล้ว");
            return redirect('/admin/ProductHome');
    }

    public function store(Request $request){
        //dd($request->name);
        $request->validate([
            'name' => 'required',
            'detail'=>'required',
            'typeproduct'=>'required',
            'price'=>'required|numeric',
            'image'=>'file|image|mimes:jpeg,png,jpg|max:10000',
        
        ]);
        //แปลงชื่อภาพใหม่
       /* $stringImageReFormat=base64_encode('_'.time());
        $ext=$request->file('image')->getClientOriginalExtension();
        $imageName=$stringImageReFormat.".".$ext;*/
        
        $product = new Product();
        $product->name = $request->name;
        $product->detail = $request->detail;
        $product->price = $request->price;
        $product->typeproduct_id = $request->typeproduct;
        if($request->hasFile('image')){
            $filename = Str::random(10).'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path(). '/images/', $filename);
            Image::make(public_path(). '/images/'. $filename);
            $product->image = $filename;
        }else{
            $product->image = 'nopic.jpg';
        }
        $product->save();
        Session()->flash("success","บันทึกข้อมูลเรียบร้อยแล้ว");
        return redirect('/admin/ProductHome');
        }
        public function delete($id){
            $product = Product::find($id);
            if($product->image != 'nopic.jpg'){
                File::delete(public_path().'\\images\\'. $product->image);
            }
            $product->delete();
            Session()->flash("error","ลบข้อมูลเรียบร้อยแล้ว");
        return redirect('/admin/ProductHome');
        }

}
