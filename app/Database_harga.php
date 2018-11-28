<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Database_harga extends Model
{
   protected $primaryKey = 'id_barang';
   protected $fillable = ['nama_barang', 'harga_barang', 'databasebarang_id'];
}
