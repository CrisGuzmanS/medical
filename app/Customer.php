<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        "name",
        "surnames",
        "phone",
        "address",
        "phone",
        "address",
        "email",
    ];
}
