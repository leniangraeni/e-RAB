<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hitung_post extends Model
{
    protected $primaryKey = 'id_post';
    protected $fillable=['luas_bangunan','luas_tanah','luas_atap'];
}
