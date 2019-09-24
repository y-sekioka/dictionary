<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Word extends Model
    {
        protected $fillable=[
            'word',
            'explain',
            'created_at',
            'updated_at',
            ];
        public static $rules=array(
            'word' => 'required',
            'explain' => 'required',
            );
    }
