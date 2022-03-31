<?php

namespace App\Http\Controllers;
use App\Models\korban;
use App\Models\kasus;
use App\Models\pelayanan;
use Illuminate\Http\Request;


class PelayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pelayanan = pelayanan::select('id_layanan','lembaga', 'pelayanan', 'keterangan', 'tgl_pelayanan', 'korbans.nama_korban')
        ->join('korbans','pelayanans.id_korban','=','korbans.id_korban')
        ->get();
        
        return view('pelayanan.index', compact('pelayanan'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
            
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $idk = korban::all();
     
        return view('pelayanan.create',compact('idk'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        pelayanan::create($request->all());
        return redirect()->route('pelayanan.index')
        ->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pelayanan = pelayanan::find($id);
        $idkor = korban::all();
        return view('pelayanan.edit', compact('pelayanan','idkor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        pelayanan::find($id)->update($request->all());

        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('pelayanan.index')
            ->with('success', 'DATA Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        pelayanan::find($id)->delete();
        return redirect()->route('pelayanan.index')
            ->with('success', 'Data Berhasil Dihapus');
    }
}
