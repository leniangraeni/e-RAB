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
        $new->nama_barang = request('nama_barang');
        $new->harga_barang = request('harga');
        $new->category_barang = request('categorybarang_id');
        $new->id_barang = request('id_barang');
        $new->save();
        return view('database.create');
    }
    public function index() {
        $database = Database_harga::all();
        return view('database.index', compact('database'));
    }
    public function edit ($id_barang) {
        $database = Database_harga::find($id_barang);
        return view('database.edit', compact('database'));
    }
    public function update ($id_barang){
        $database = Database_harga::find($id_barang);
        $database->update([
            'nama_barang'=> request ('nama_barang'),
            'harga_barang' => request('harga'),
            'category_barang' => request('categorybarang_id'),
            'id_barang' => request('id_barang')
        ]);
        return redirect()->route('database.index',compact('database'));
    }
}
