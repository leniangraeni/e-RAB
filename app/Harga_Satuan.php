<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Harga_Satuan extends Model
{
    protected $fillable = ['kode_pekerjaan', 'nama_pekerjaan', 'harga'];
}
