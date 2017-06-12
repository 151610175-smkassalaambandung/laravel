<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    protected $table = 'pengguna';
    protected $fillable = ['namalengkap','alamat','nohp'];
    protected $visible = ['namalengkap','alamat','nohp'];
    public $timestamps = true;
}
