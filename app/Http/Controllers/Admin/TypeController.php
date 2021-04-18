<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Type;
use App\Http\Requests\TypeRequest;
class TypeController extends Controller
{
    public function index(){
        
        return view('admin.TypeForm')->with('types',Type::paginate(5));
    }
    public function store(TypeRequest $request){
        /*$request->validate([
            'name' => 'required|unique:typeproduct',
        ]);*/
    // Insert Data to TABLE
    $type=new Type;
    $type->name = $request->name;
    $type->save();
    Session()->flash("success","บันทึกข้อมูลเรียบร้อยแล้ว");
    return redirect('/admin/createType');
    }
    
    public function edit($id){
        //dd($id);
        $type= Type::find($id);
        //dd($type);
        return view('admin.EditTypeForm',['type'=>$type]);
    }

    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required|unique:typeproduct',
        ]);
        $type= Type::find($id);
        $type->name=$request->name;
        Session()->flash("update","อัพเดทข้อมูลเรียบร้อยแล้ว");
        $type->save();
        return redirect('/admin/createType');
    }

    public function delete($id){
        $type=Type::find($id);
        if($type->product->count()>0){
            Session()->flash("error","ไม่สามารถลบประเภทสินค้านี้ได้เนื่องจากมีสินค้าอยู่ในประเภทนี้");
            return redirect()->back();
        }
        $type::destroy($id);
        Session()->flash("success","ลบข้อมูลเรียบร้อยแล้ว");
        return redirect('/admin/createType');
    }
}
