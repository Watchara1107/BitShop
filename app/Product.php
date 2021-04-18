<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
   // protected $fillable = ['name','detail','price','typeproduct_id'];

    public function type(){
        return $this->belongsTo(Type::class,'typeproduct_id');
    }

}
