<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hitung_post;
use App\Test;

class HitungController extends Controller
{
    public function create () {
        return view ('hitung.hitungcreate');
    }
    public function store(Request $request) {
        $new = new Hitung_post;
        $new->nama_project = request('nama_project');
        $new->luas_bangunan = request('luas_bangunan');
        $new->kualitas = request('kualitas');
        $new->save();

        $baru = new Test;
        $baru->I = request('luas_bangunan')*40862;
        $baru->II = request('luas_bangunan')*1535156;
        $baru->III = request('luas_bangunan')*846587;
        $baru->IV = request('luas_bangunan')*320000;
        $baru->V = request('luas_bangunan')*326931;
        $baru->VI = request('luas_bangunan')*198990;
        $baru->VII = request('luas_bangunan')*584447;
        $baru->VIII = request('luas_bangunan')*44361;
        $baru->IX = request('luas_bangunan')*162611;
        $baru->X = request('luas_bangunan')*62038;
        $baru->XI = request('luas_bangunan')*73005;
        $baru->XII = request('luas_bangunan')*281045;
        $baru->XIII = request('luas_bangunan')*5973;
        $atribut = ($baru["attributes"]);
        $total = 0;
        foreach ($atribut as $key => $value) {
            $total += $value;
        }
        $baru->hasil = $total;
        $baru->save();
        
        $luas = request('luas_bangunan');
        return view('hitung.indexhitung', compact('luas', 'atribut','total'));
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
