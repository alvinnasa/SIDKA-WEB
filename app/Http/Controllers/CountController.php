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
        $hitunglaki = korban::where('jenis_kelamin','=','laki-laki')->count();
        $hitungperempuan = korban::where('jenis_kelamin','=','perempuan')->count();

        $kecamatancount = korban::selectRaw('COUNT(1) as total, kecamatan')->groupBy('kecamatan')->get();
        $laki = korban::selectRaw('COUNT(1) as total, kecamatan')->groupBy('kecamatan')->get();
        $categories = [];
        $total = [];
        foreach($kecamatancount as $con){
            $categories [] = $con->kecamatan;
            $total [] = $con->total;
        }
        
        return view('dashboard',compact('hitungkasus','hitungkorban','hitungperempuan','hitunglaki','kecamatancount','categories','total'));

    }
}
