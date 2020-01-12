<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['url'];

    /**
     * =============
     * RELATIONSHIPS
     * =============
     */

    public function products()
    {
        return $this->belongsToMany('App\Product');
    }
}
