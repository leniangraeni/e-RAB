<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Properti extends Model
{
    public $table="Properti";
    protected $fillable=[
    	'id',
    	'id_pemilik',
        'tipe_prop',
    	'nama',
    	'alamat',
    	'jarak'
    ];
    public function kosan(){
        return $this->hasMany(Kosan::class);
    }
    public function kontrakan(){
        return $this->hasOne(Kontrakan::class);
    }
}
