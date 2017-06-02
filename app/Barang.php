<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barang';
    protected $fillable = ['kode_barang', 'no_faktur', 'qty', 'nama_barang'];
}
