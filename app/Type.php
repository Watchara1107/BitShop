<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $table = 'typeproduct';
    
    public function product(){
        return $this->hasMany(Product::class,'typeproduct_id');
    }
}
