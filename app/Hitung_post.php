<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hitung_post extends Model
{
    protected $primaryKey = 'id_post';
    protected $fillable=['luas_bangunan','nama_project','kualitas'];
}
