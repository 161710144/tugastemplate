<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artis;
class artiscontroller extends Controller
{
    public function dataartis(){
    	$swey = Artis::all();
    	return view('layouts.dataartis',compact('swey'));
    }
}
