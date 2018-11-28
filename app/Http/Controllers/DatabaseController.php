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
        $new->save();
        return view('database.create');
    }
    public function index() {
        $database = Database_harga::all();
        dd($database);
        return view('database.index', compact('database'));
    }
}
