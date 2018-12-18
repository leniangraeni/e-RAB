<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hitung_Post extends Model
{
    protected $fillable = ['nama_project', 'luas_bangunan', 'kualitas'];
}
