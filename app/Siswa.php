<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    //
    protected $table = 'siswas';
    protected $fillable = ['nama','alamat','jk'];
    //$fillable = bisa diisi
    protected $visible  = ['nama','alamat','jk'];
    //$visible = bisa dilihat
    public $timestamps = true;
}
