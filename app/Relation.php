<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Relation extends Model
{
    protected $fillable = ['product_id', 'recommended_id'];

    public function product(){
        return $this->belongsToMany('App\Product', 'relations', 'recommended_id','product_id' );
    }
}
