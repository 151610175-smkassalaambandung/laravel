<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengaturan extends Model
{
    protected $table = 'pengaturan';
    protected $fillable = ['namasitus','alamatsitus','email'];
    protected $visible = ['namasitus','alamatsitus','email'];
    public $timestamps = true;
}
