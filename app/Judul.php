<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Judul extends Model
{
    protected $table = 'surveytitles';
    protected $fillable = ['judul_survey'];
    // $primaryKey = 'id';
}
