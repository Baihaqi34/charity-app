<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    protected $table = 'campaign';
    protected $fillable = [
        'id_kategori',
        'judul',
        'deskripsi',
        'nominal_target',
        'nominal_terkumpul',
        'deadline',
        'id_user',
        'mulai',
        'berakhir',
        'foto',
    ];



    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
