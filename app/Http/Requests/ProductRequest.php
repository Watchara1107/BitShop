<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>'required',
            'detail'=>'required',
            'price'=>'required|numeric',
            'image'=>'mimes:jpeg,jpg,png',
        ];
    }
    public function messages(){
        return[
            'name.required'=>'กรุณากรอกชื่อสินค้า',
            'detail.required'=>'กรุณากรอกรายละเอียดสินค้า',
            'price.required|numeric'=>'กรุณากรอกราคา|กรุณากรอกเฉพาะตัวเลข',
            'image.mimes'=>'กรุณาเลือกไฟล์นามสกุลภาพ jpeg,jpg,png',
            
        ];
    }
}
