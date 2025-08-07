<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Audi extends Model
{
      protected $fillable =[
            'action',
            'old_data',
            'new_data',
            'model',
            'user_id'
      ];



      public function user() :BelongsTo{
        return $this->belongsTo(User::class);
      }
}
