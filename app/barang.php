<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    protected $table = ('barangs');
    protected $fillable = ['kode _barang' , 'nama_Barang' ,'harga_barang'];
}
