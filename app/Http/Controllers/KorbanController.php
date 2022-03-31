<?php

namespace App\Http\Controllers;
use App\Models\korban;
use App\Models\kasus;
use App\Models\pelayanan;
use Illuminate\Http\Request;

class KorbanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $korban = korban::select('id_korban','nama_korban', 'alamat', 'kecamatan', 'kasuses.name','kabupaten','tgl_lahir','umur','hubungan','pendidikan','jenis_kelamin')
        ->join('kasuses','korbans.id','=','kasuses.id')
        ->get();
       
        return view('korban.index', compact('korban'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $idkas = kasus::all();
        return view('korban.create',compact('idkas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        korban::create($request->all());
        return redirect()->route('korban.index')
        ->with('success', 'korban Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $korban = korban::find($id);
        $pelayanan = pelayanan::where('id_korban', '=', $id)->get();
       

        return view('korban.detail', compact('korban','pelayanan'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $korban = korban::find($id);
        $idkas = kasus::all();
        return view('korban.edit', compact('korban','idkas'));
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
        korban::find($id)->update($request->all());

        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('korban.index')
            ->with('success', 'korban Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        korban::find($id)->delete();
        return redirect()->route('korban.index')
            ->with('success', 'korban Berhasil Dihapus');
    }
}
