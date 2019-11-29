<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    protected $fillable = ['status'];
    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
}
