<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    public $table = "products";
    public $timestamps = false;
    const UPDATED_AT = 'update_at';

    function pageUrl(){
        return $this->belongsTo('App\Products','id_url','id');
    }
}
