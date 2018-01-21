<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\barang;

class barangcontroller extends Controller
{
    public function barang(){

    	$a = barang::all('nama_barang');
    	return $a;
    }
    public function abarang()
    {
    	$swey = barang::all();
    	return view('tbarang',compact('swey'));
    }
}
