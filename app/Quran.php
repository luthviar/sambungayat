<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quran extends Model
{
    protected $table = 'qurans';
    protected $primaryKey = 'id';
    protected $fillable = ['namesuraheng'];
    public $timestamps = false;
}
