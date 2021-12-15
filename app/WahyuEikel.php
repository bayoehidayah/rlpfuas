<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WahyuEikel extends Model
{
    public $table = "tbl_wahyu_eikel";
    protected $fillable = [
        'nip', 
        'nama', 
        'jabatan',
        'gol',
        'tanggal_gajian',
        'gaji_pokok',
    ];
}
