<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'produk';
    protected $fillable = ['namaproduk','harga','diskon'];
    protected $visible = ['namaproduk','harga','diskon'];
    public $timestamps = true;
}
