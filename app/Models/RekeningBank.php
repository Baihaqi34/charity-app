<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RekeningBank extends Model
{
    protected $table = 'rekening_bank';
    protected $fillable = [
        'id_user',  
        'nama_bank',
        'no_rekening',
        'atas_nama',
];
 }
