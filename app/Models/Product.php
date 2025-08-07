<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $softDeletes = true;

    protected $fillable =[

        'name',
        'sku',
        'price',
        'stock',

    ];
}
