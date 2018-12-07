<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hitung_post;

class HitungController extends Controller
{
    public function create () {
        return view ('hitung.hitungcreate');
    }
    public function store(Request $request) {
        $new = new Hitung_post;
        $new->luas_bangunan = request('luas_bangunan');
        $new->luas_tanah = request('luas_tanah');
        $new->luas_atap = request('luas_atap');
        $new->id_post = request('id_post');
        $new->save();
        return redirect('/hitungRAB');
    }
    public function index() {
        $post = Hitung_post::all();
        return view('hitung.indexhitung', compact('hitung'));
    }
    public function edit ($id_post) {
        $post = Hitung_post::find($id_post);
        return view('hitung.edithitung', compact('hitung'));
    }
    public function update ($id_post){
        $post = Hitung_post::find($id_post);
        $post->update([
            'id_post'=> request ('id_post'),
            'luas_bangunan' => request('luas_bangunan'),
            'luas_tanah' => request('luas_tanah'),
            'luas_atap' => request('luas_atap'),
            'perkiraan_rab' => request('perkiraan_rab')
        ]);
        return redirect()->route('hitung.indexhitung',compact('hitung'));
    }
}
