<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Database_harga extends Model
{
   protected $primaryKey = 'id_pekerjaan';
   protected $fillable = ['nama_pekerjaan', 'biaya_pekerjaan', 'databasepekerjaan_id'];
}
