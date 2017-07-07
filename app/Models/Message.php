<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $table = 'messages';

    protected $fillable = ['user_id','message'];

    public function user()
    {
      return $this->belongsTo('App\Models\User', 'user_id');
    }
}
