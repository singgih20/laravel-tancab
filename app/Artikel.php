<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Artikel extends Model
{
    protected $fillable = ['users_id', 'gambar', 'referensi', 'deskripsi', 'judul'];
    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
}
