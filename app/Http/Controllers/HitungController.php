<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Hitung_Post;
use App\Harga_Satuan;
use App\Hasil;

class HitungController extends Controller
{
    public function create()
    {
        return view('hitung.create');
    }

    public function store(Request $request)
    {
        $masuk = new Hitung_Post;
        $masuk->nama_project = request('nama_project');
        $masuk->luas_bangunan = request('luas_bangunan');
        $masuk->kualitas = request('kualitas');
        $masuk->save();

        $luas = request('luas_bangunan');

        $hasil = new Hasil;
        $data1 = Harga_Satuan::find($id=1); $data2 = Harga_Satuan::find($id=2); $data3 = Harga_Satuan::find($id=3);
        $data4 = Harga_Satuan::find($id=4); $data5 = Harga_Satuan::find($id=5); $data6 = Harga_Satuan::find($id=6); 

        $hasil->A = request('luas_bangunan')*160/267.86*$data1->harga + request('luas_bangunan')*46/267.86*$data2->harga +
                    request('luas_bangunan')*108/267.86*$data3->harga + request('luas_bangunan')*36/267.86*$data4->harga +
                    request('luas_bangunan')*5.4/267.86*$data5->harga + request('luas_bangunan')*6/267.86*$data6->harga;

        $data1 = Harga_Satuan::find($id=7); $data2 = Harga_Satuan::find($id=8); $data3 = Harga_Satuan::find($id=9); $data4 = Harga_Satuan::find($id=10);
        $data5 = Harga_Satuan::find($id=11); $data6 = Harga_Satuan::find($id=12); $data7 = Harga_Satuan::find($id=13); $data8 = Harga_Satuan::find($id=14);
    
        $hasil->B = request('luas_bangunan')*90/267.86*$data1->harga + request('luas_bangunan')*6.2/267.86*$data2->harga +
                    request('luas_bangunan')*29.71/267.86*$data3->harga + request('luas_bangunan')*6.2/267.86*$data4->harga +
                    request('luas_bangunan')*0.48/267.86*$data5->harga + request('luas_bangunan')*12/267.86*$data6->harga +
                    request('luas_bangunan')*147.86/267.86*$data7->harga + request('luas_bangunan')*3/267.86*$data8->harga;

        $data1 = Harga_Satuan::find($id=15); $data2 = Harga_Satuan::find($id=16);

        $hasil->C = request('luas_bangunan')*755.89/267.86*$data1->harga + request('luas_bangunan')*1511.78/267.86*$data2->harga;
        
        $data1 = Harga_Satuan::find($id=17);

        $hasil->D = request('luas_bangunan')*267.86/267.86*$data1->harga;

        $data1 = Harga_Satuan::find($id=18); $data2 = Harga_Satuan::find($id=19);

        $hasil->E = request('luas_bangunan')*75/267.86*$data1->harga + request('luas_bangunan')*221.38/267.86*$data2->harga;

        $data1 = Harga_Satuan::find($id=20);

        $hasil->F = request('luas_bangunan')*242.28/267.86*$data1->harga;

        $data1 = Harga_Satuan::find($id=21); $data2 = Harga_Satuan::find($id=22); $data3 = Harga_Satuan::find($id=23);
        $data4 = Harga_Satuan::find($id=24); $data5 = Harga_Satuan::find($id=25);

        $hasil->G = request('luas_bangunan')*17/267.86*$data1->harga + request('luas_bangunan')*10/267.86*$data2->harga +
                    request('luas_bangunan')*34/267.86*$data3->harga + request('luas_bangunan')*4/267.86*$data4->harga +
                    request('luas_bangunan')*3/267.86*$data5->harga;

        $data1 = Harga_Satuan::find($id=26); $data2 = Harga_Satuan::find($id=27); $data3 = Harga_Satuan::find($id=28); $data4 = Harga_Satuan::find($id=29);
        $data5 = Harga_Satuan::find($id=30); $data6 = Harga_Satuan::find($id=31); $data7 = Harga_Satuan::find($id=32);
    
        $hasil->H = request('luas_bangunan')*30/267.86*$data1->harga + request('luas_bangunan')*68/267.86*$data2->harga +
                    request('luas_bangunan')*28/267.86*$data3->harga + request('luas_bangunan')*4/267.86*$data4->harga +
                    request('luas_bangunan')*17/267.86*$data5->harga + request('luas_bangunan')*17/267.86*$data6->harga +
                    request('luas_bangunan')*17/267.86*$data7->harga;
        
        $data1 = Harga_Satuan::find($id=33); $data2 = Harga_Satuan::find($id=34); $data3 = Harga_Satuan::find($id=35); $data4 = Harga_Satuan::find($id=36);
        $hasil->I = request('luas_bangunan')*12/267.86*$data1->harga + request('luas_bangunan')*12/267.86*$data2->harga +
                    request('luas_bangunan')*1/267.86*$data3->harga + request('luas_bangunan')*12/267.86*$data4->harga;

        $data1 = Harga_Satuan::find($id=37); $data2 = Harga_Satuan::find($id=38); $data3 = Harga_Satuan::find($id=39); $data4 = Harga_Satuan::find($id=40);
        $data5 = Harga_Satuan::find($id=41); $data6 = Harga_Satuan::find($id=42); 
    //lebih 2, 52
        $hasil->J = request('luas_bangunan')*58/267.86*$data1->harga + request('luas_bangunan')*65/267.86*$data2->harga +
                    request('luas_bangunan')*67/267.86*$data3->harga + request('luas_bangunan')*1/267.86*$data4->harga +
                    request('luas_bangunan')*1/267.86*$data5->harga + request('luas_bangunan')*1/267.86*$data6->harga;

        $data1 = Harga_Satuan::find($id=43); $data2 = Harga_Satuan::find($id=44); $data3 = Harga_Satuan::find($id=45);
        $data4 = Harga_Satuan::find($id=46); $data5 = Harga_Satuan::find($id=47);
    
        $hasil->K = request('luas_bangunan')*55/267.86*$data1->harga + request('luas_bangunan')*17/267.86*$data2->harga +
                    request('luas_bangunan')*55/267.86*$data3->harga + request('luas_bangunan')*1/267.86*$data4->harga +
                    request('luas_bangunan')*2/267.86*$data5->harga;

        $data1 = Harga_Satuan::find($id=48); $data2 = Harga_Satuan::find($id=49); $data3 = Harga_Satuan::find($id=50);
        $data4 = Harga_Satuan::find($id=51); $data5 = Harga_Satuan::find($id=52);
    
        $hasil->L = request('luas_bangunan')*1511.78/267.86*$data1->harga + request('luas_bangunan')*239.63/267.86*$data2->harga +
                    request('luas_bangunan')*3/267.86*$data3->harga + request('luas_bangunan')*11/267.86*$data4->harga +
                    request('luas_bangunan')*8/267.86*$data5->harga;

        $data1 = Harga_Satuan::find($id=53);

        $hasil->M = request('luas_bangunan')*160/267.86*$data1->harga;
        //rounding
        $save =  $hasil->A % 10;
        $hasil->A = $hasil->A - $save;
        if($save>=5){
            $save = 10;
        } 
        else{
            $save = 0;
        }
        $hasil->A = $hasil->A + $save;

        $save =  $hasil->B % 10;
        $hasil->B = $hasil->B - $save;
        if($save>=5){
            $save = 10;
        } 
        else{
            $save = 0;
        }
        $hasil->B = $hasil->B + $save;

        $save =  $hasil->C % 10;
        $hasil->C = $hasil->C - $save;
        if($save>=5){
            $save = 10;
        } 
        else{
            $save = 0;
        }
        $hasil->C = $hasil->C + $save;

        $save =  $hasil->D % 10;
        $hasil->D = $hasil->D - $save;
        if($save>=5){
            $save = 10;
        } 
        else{
            $save = 0;
        }
        $hasil->D = $hasil->D + $save;

        $save =  $hasil->E % 10;
        $hasil->E = $hasil->E - $save;
        if($save>=5){
            $save = 10;
        } 
        else{
            $save = 0;
        }
        $hasil->E = $hasil->E + $save;

        $save =  $hasil->F % 10;
        $hasil->F = $hasil->F - $save;
        if($save>=5){
            $save = 10;
        } 
        else{
            $save = 0;
        }
        $hasil->F = $hasil->F + $save;

        $save =  $hasil->G % 10;
        $hasil->G = $hasil->G - $save;
        if($save>=5){
            $save = 10;
        } 
        else{
            $save = 0;
        }
        $hasil->G = $hasil->G + $save;

        $save =  $hasil->H % 10;
        $hasil->H = $hasil->H - $save;
        if($save>=5){
            $save = 10;
        } 
        else{
            $save = 0;
        }
        $hasil->H = $hasil->H + $save;

        $save =  $hasil->I % 10;
        $hasil->I = $hasil->I - $save;
        if($save>=5){
            $save = 10;
        } 
        else{
            $save = 0;
        }
        $hasil->I = $hasil->I + $save;

        $save =  $hasil->J % 10;
        $hasil->J = $hasil->J - $save;
        if($save>=5){
            $save = 10;
        } 
        else{
            $save = 0;
        }
        $hasil->J = $hasil->J + $save;

        $save =  $hasil->K % 10;
        $hasil->K = $hasil->K - $save;
        if($save>=5){
            $save = 10;
        } 
        else{
            $save = 0;
        }
        $hasil->K = $hasil->K + $save;

        $save =  $hasil->L % 10;
        $hasil->L = $hasil->L - $save;
        if($save>=5){
            $save = 10;
        } 
        else{
            $save = 0;
        }
        $hasil->L = $hasil->L + $save;

        $atribut = ($hasil["attributes"]);
        $total = 0;
        foreach ($atribut as $key => $value) {
            $total += $value;
        }
        $hasil->total = $total;

        $hasil->hitung_id = $masuk->id;
        $save =  $hasil->total % 10;
        $hasil->total = $hasil->total - $save;
        if($save>=5){
            $save = 10;
        } 
        else{
            $save = 0;
        }
        $hasil->total = $hasil->total + $save;
        $hasil->save();

        return view('hitung.hasil', compact('luas', 'atribut', 'total'));
    }

    public function coba($id)
    {
        $baru = Harga_Satuan::find($id);
        $masuk = Hitung_Post::find($id=18);
        dd($baru->harga*$masuk->luas_bangunan);

        return view('hitung.coba', compact('baru'));
    }

    public function index()
    {
        $hitung = Hitung_Post::all();
       
        return view('hitung.index', compact('hitung'));
    }
}