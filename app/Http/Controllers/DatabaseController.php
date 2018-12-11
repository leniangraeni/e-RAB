<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Database_harga;

class DatabaseController extends Controller
{
    public function create () {
        return view ('database.create');
    }
    public function store(Request $request) {
            
        $new = new Database_harga;
        $new->nama_pekerjaan = request('nama_pekerjaan');
        $new->biaya_pekerjaan = request('harga');
        $new->category_pekerjaan = request('categorypekerjaan_id');
        $new->id_pekerjaan = request('id_pekerjaan');
        $new->kualitas_pekerjaan = request('kualitaspekerjaan_id');
        $new->save();
        return redirect('/database');
    }
    public function index() {
        $database = Database_harga::all();
        return view('database.index', compact('database'));
    }
    public function edit ($id_pekerjaan) {
        $database = Database_harga::find($id_pekerjaan);
        return view('database.edit', compact('database'));
    }
    public function update ($id_pekerjaan){
        $database = Database_harga::find($id_pekerjaan);
        $database->update([
            'nama_pekerjaan'=> request ('nama_pekerjaan'),
            'biaya_pekerjaan' => request('harga'),
            'category_pekerjaan' => request('categorypekerjaan_id'),
            'id_pekerjaan' => request('id_pekerjaan')
        ]);
        return redirect()->route('database.index',compact('database'));
    }
}
