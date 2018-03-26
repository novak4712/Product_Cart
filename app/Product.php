<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'brand', 'image', 'description', 'category_id'];

    public function category(){
        return $this->belongsTo('App\Category');
    }
    public function relation(){
        return $this->belongsToMany('App\Product', 'relations', 'product_id','recommended_id' );
    }
}
