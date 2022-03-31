<?php

namespace App\Http\Controllers;
use App\Models\korban;
use App\Models\kasus;
use App\Models\pelayanan;
use Illuminate\Http\Request;

class CountController extends Controller
{
    public function count(){
        $hitungkasus = kasus::count();
        $hitungkorban = korban::count();
        return view('welcome',compact('hitungkasus','hitungkorban'));

    }
}
