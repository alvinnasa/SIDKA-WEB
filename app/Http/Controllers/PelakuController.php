<?php

namespace App\Http\Controllers;
use App\Models\pelaku;
use App\Models\kasus;
use Illuminate\Http\Request;

class PelakuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pelaku = pelaku::select('id_pelaku', 'nama_pelaku', 'alamat', 'kasuses.name')
        ->join('kasuses','pelakus.id','=','kasuses.id')
        ->get();
        return view('pelaku.index', compact('pelaku'))
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
        return view('pelaku.create',compact('idkas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        pelaku::create($request->all());
        return redirect()->route('pelaku.index')
        ->with('success', 'Pelaku Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pelaku = pelaku::find($id);
        


        return view('pelaku.detail', compact('pelaku'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pelaku = pelaku::find($id);
        $idkas = kasus::all();
        return view('pelaku.edit', compact('pelaku','idkas'));
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
        pelaku::find($id)->update($request->all());

        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('pelaku.index')
            ->with('success', 'pelaku Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        pelaku::find($id)->delete();
        return redirect()->route('pelaku.index')
            ->with('success', 'pelaku Berhasil Dihapus');
    }
}
