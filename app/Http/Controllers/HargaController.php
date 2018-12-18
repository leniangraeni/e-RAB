<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Harga_Satuan;

class HargaController extends Controller
{
    public function create()
    {
        return view('harga.create');
    }

    public function store()
    {
        $masuk = new Harga_Satuan;
        $masuk->kode_pekerjaan = request('kode_pekerjaan');
        $masuk->nama_pekerjaan = request('nama_pekerjaan');
        $masuk->harga = request('harga');
        $masuk->save();

        return redirect('/harga');
    }

    public function index()
    {
        $harga = Harga_Satuan::all();
       
        return view('harga.index', compact('harga'));
    }

    public function edit($id)
    {
        $harga = Harga_Satuan::find($id);

        return view('harga.edit', compact('harga'));
    }

    public function update($id)
    {
        $masuk = Harga_Satuan::find($id);
        $masuk->kode_pekerjaan = request('kode_pekerjaan');
        $masuk->nama_pekerjaan = request('nama_pekerjaan');
        $masuk->harga = request('harga');
        $masuk->save();

        return redirect('/harga');
    }
}
