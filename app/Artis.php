<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class artis extends Model
{
    protected $table = "artis";
    protected $fillable = ['NIS','nama','tempat_lahir','tanggal_lahir','alamat','cita_cita','hobi','poto'];
}
