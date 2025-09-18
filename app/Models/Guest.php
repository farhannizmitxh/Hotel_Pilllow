<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
        protected $fillable = [
        'name',
        'phone',
        'identity_number',
        'identity_photo',
    ];

     public function guest(){
        return $this->belongsTo(Guest::class);
    }
}

