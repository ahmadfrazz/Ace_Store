<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductSize extends Model
{
    protected $table = 'product_sizes';
    protected $fillable = [
        'product_id' , 'psize' ,
    ];
   /* public function product(){
        return $this->belongsTo('App\Product');
    }*/
}