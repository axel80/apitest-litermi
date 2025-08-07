<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{

    protected $softDeletes = true;

    protected $fillable =[

        'name',
        'email',
        'phone_number',
        'address',

    ];






}
