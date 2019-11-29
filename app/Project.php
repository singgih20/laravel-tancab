<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['users_id', 'jenis_cabai', 'lama_pemodalan', 'dana_target', 'dana_terkumpul', 'resiko_pemodalan', 'jumlah_proyek', 'jumlah_anggota', 'start', 'end', 'gambar', 'lokasi', 'luas_lahan', 'ekspektasi_profit'];
    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
}
