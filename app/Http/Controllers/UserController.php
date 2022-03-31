<?php

namespace App\Http\Controllers;

use App\Models\kasus;
use App\Models\pelaku;
use App\Models\korban;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function index()
    {
        //fungsi eloquent menampilkan data menggunakan pagination
        $users = kasus::all();
        return view('users.index', compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        //melakukan validasi data
        $request->validate([
            'name' => 'required',
            'lembaga' => 'required',
            'tgl_laporan' => 'required',
        ]);

        //fungsi eloquent untuk menambah data
        kasus::create($request->all());

        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('kasus.index')
            ->with('success', 'Kasus Berhasil Ditambahkan');
    }

    public function show(Request $request, $id)
    {
        //menampilkan detail data dengan menemukan/berdasarkan id user
        $user = kasus::find($id);
        $pelaku = pelaku::where('id', '=', $id)->get();
        $korban = korban::where('id', '=', $id)->get();
        
       
        return view('users.detail', compact('user','pelaku','korban'));
    }

    public function edit($id)
    {
        //menampilkan detail data dengan menemukan/berdasarkan id user untuk diedit
        $user = kasus::find($id);
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        //melakukan validasi data
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        //fungsi eloquent untuk mengupdate data inputan kita
        kasus::find($id)->update($request->all());

        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('kasus.index')
            ->with('success', 'Kasus Berhasil Diupdate');
    }

    public function destroy($id)
    {
        //fungsi eloquent untuk menghapus data
        kasus::find($id)->delete();
        return redirect()->route('kasus.index')
            ->with('success', 'Kasus Berhasil Dihapus');
    }
}