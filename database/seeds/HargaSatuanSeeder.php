<?php
use Illuminate\Database\Seeder;
use App\Harga_Satuan;

class HargaSatuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('harga_satuans');

        Harga_Satuan::create([
            'kode_pekerjaan' => 'A1',
            'nama_pekerjaan' => 'Pekerjaan persiapan lahan (pembersihan lokasi pekerjaan)',
            'harga' => '7500'
        ]);

        Harga_Satuan::create([
            'kode_pekerjaan' => 'A2',
            'nama_pekerjaan' => 'Pekerjaan pengukuran dan pasangan bouw plank',
            'harga' => '81420'
        ]);

        Harga_Satuan::create([
            'kode_pekerjaan' => 'A3',
            'nama_pekerjaan' => 'Pekerjaan galian tanah untuk pondasi',
            'harga' => '21000'
        ]);

        Harga_Satuan::create([
            'kode_pekerjaan' => 'A4',
            'nama_pekerjaan' => 'Urugan tanah kembali sisi pondasi',
            'harga' => '15000'
        ]);

        Harga_Satuan::create([
            'kode_pekerjaan' => 'A5',
            'nama_pekerjaan' => 'Pekerjaan urugan pasir di bawah pondasi',
            'harga' => '280000'
        ]);

        Harga_Satuan::create([
            'kode_pekerjaan' => 'A6',
            'nama_pekerjaan' => 'Pekerjaan urugan pasir di bawah lantai',
            'harga' => '280000'
        ]);

        Harga_Satuan::create([
            'kode_pekerjaan' => 'B1',
            'nama_pekerjaan' => 'Membuat Pondasi Batu belah 1 Pc : 5 Psr',
            'harga' => '600000'
        ]);

        Harga_Satuan::create([
            'kode_pekerjaan' => 'B2',
            'nama_pekerjaan' => 'Membuat Sloof Beton Bertulang ( 200 KG Besi + Bekisting )',
            'harga' => '3500000'
        ]);

        Harga_Satuan::create([
            'kode_pekerjaan' => 'B3',
            'nama_pekerjaan' => 'Membuat Kolom Beton Bertulang ( 150 KG Besi + Bekisting )',
            'harga' => '4800000'
        ]);

        Harga_Satuan::create([
            'kode_pekerjaan' => 'B4',
            'nama_pekerjaan' => 'Membuat Ring Balok Beton Bertulang ( 150 KG Besi + Bekisting )',
            'harga' => '4200000'
        ]);

        Harga_Satuan::create([
            'kode_pekerjaan' => 'B5',
            'nama_pekerjaan' => 'Membuat Plat dak topi Beton Bertulang ( 115 KG Besi + Bekisting )',
            'harga' => '4500000 '
        ]);

        Harga_Satuan::create([
            'kode_pekerjaan' => 'B6',
            'nama_pekerjaan' => 'Membuat  Beton lantai kerja dibawah lantai 1 PC : 3 Splt: 5 Psr',
            'harga' => '750000'
        ]);

        Harga_Satuan::create([
            'kode_pekerjaan' => 'B7',
            'nama_pekerjaan' => 'Membuat Beton struktur dengan mutu K 275',
            'harga' => '980000'
        ]);

        Harga_Satuan::create([
            'kode_pekerjaan' => 'B8',
            'nama_pekerjaan' => 'Membuat Tangga Beton Bertulang',
            'harga' => '3598700'
        ]);

        Harga_Satuan::create([
            'kode_pekerjaan' => 'C1',
            'nama_pekerjaan' => 'Pasangan dinding bata merah 1 : 3',
            'harga' => '250000'
        ]);

        Harga_Satuan::create([
            'kode_pekerjaan' => 'C2',
            'nama_pekerjaan' => 'Plesteran dan aci 1 : 5',
            'harga' => '25000'
        ]);

        Harga_Satuan::create([
            'kode_pekerjaan' => 'D1',
            'nama_pekerjaan' => 'Pasangan lantai keramik motif 50 cm x 50 cm',
            'harga' => '320000'
        ]);

        Harga_Satuan::create([
            'kode_pekerjaan' => 'E1',
            'nama_pekerjaan' => 'Pasangan lisplank kayu kamper medan 3/30',
            'harga' => '105000'
        ]);

        Harga_Satuan::create([
            'kode_pekerjaan' => 'E2',
            'nama_pekerjaan' => 'Pasangan rangka atap baja + genteng',
            'harga' => '360000'
        ]);

        Harga_Satuan::create([
            'kode_pekerjaan' => 'F1',
            'nama_pekerjaan' => 'Plafon Gypsum rangka Hollow',
            'harga' => '220000'
        ]);

        Harga_Satuan::create([
            'kode_pekerjaan' => 'G1',
            'nama_pekerjaan' => 'Jendela PVC minimalis',
            'harga' => '850000'
        ]);

        Harga_Satuan::create([
            'kode_pekerjaan' => 'G2',
            'nama_pekerjaan' => 'Jendela PVC 2 bukaan rooftop',
            'harga' => '650000'
        ]);

        Harga_Satuan::create([
            'kode_pekerjaan' => 'G3',
            'nama_pekerjaan' => 'Pintu Panel',
            'harga' => '3500000'
        ]);

        Harga_Satuan::create([
            'kode_pekerjaan' => 'G4',
            'nama_pekerjaan' => 'Ventilasi Kamar mandi',
            'harga' => '400000'
        ]);

        Harga_Satuan::create([
            'kode_pekerjaan' => 'G5',
            'nama_pekerjaan' => 'Pintu Geser',
            'harga' => '5000000'
        ]);

        Harga_Satuan::create([
            'kode_pekerjaan' => 'H1',
            'nama_pekerjaan' => 'Pasangan kunci pintu 2 slaag (putaran) untuk pintu kayu dan pintu besi',
            'harga' => '240000'
        ]);

        Harga_Satuan::create([
            'kode_pekerjaan' => 'H2',
            'nama_pekerjaan' => 'Pasangan engsel pintu standard 4 inci',
            'harga' => '29770'
        ]);

        Harga_Satuan::create([
            'kode_pekerjaan' => 'H3',
            'nama_pekerjaan' => 'Pasangan engsel jendela standard 3 inci',
            'harga' => '25850'
        ]);

        Harga_Satuan::create([
            'kode_pekerjaan' => 'H4',
            'nama_pekerjaan' => 'Pasangan grendel pintu dobel dan pintu garasi',
            'harga' => '53250'
        ]);

        Harga_Satuan::create([
            'kode_pekerjaan' => 'H5',
            'nama_pekerjaan' => 'Pasangan grendel jendela',
            'harga' => '43250'
        ]);

        Harga_Satuan::create([
            'kode_pekerjaan' => 'H6',
            'nama_pekerjaan' => 'Pasangan kait angin jendela',
            'harga' => '18170'
        ]);

        Harga_Satuan::create([
            'kode_pekerjaan' => 'H7',
            'nama_pekerjaan' => 'Pasangan tarikan jendela',
            'harga' => '39850'
        ]);

        Harga_Satuan::create([
            'kode_pekerjaan' => 'I1',
            'nama_pekerjaan' => 'Pasangan kloset jongkok/duduk',
            'harga' => '3500000'
        ]);

        Harga_Satuan::create([
            'kode_pekerjaan' => 'I2',
            'nama_pekerjaan' => 'Pasangan kran air KM / WC',
            'harga' => '60840'
        ]);

        Harga_Satuan::create([
            'kode_pekerjaan' => 'I3',
            'nama_pekerjaan' => 'Pasangan kran air taman',
            'harga' => '60840'
        ]);

        Harga_Satuan::create([
            'kode_pekerjaan' => 'I4',
            'nama_pekerjaan' => 'Pasangan floor drain KM / WC',
            'harga' => '63850'
        ]);

        Harga_Satuan::create([
            'kode_pekerjaan' => 'J1',
            'nama_pekerjaan' => 'Pasangan pipa PVC diameter 3/4 inci',
            'harga' => '30440'
        ]);

        Harga_Satuan::create([
            'kode_pekerjaan' => 'J2',
            'nama_pekerjaan' => 'Pasangan pipa PVC diameter 2 inci',
            'harga' => '25000'
        ]);

        Harga_Satuan::create([
            'kode_pekerjaan' => 'J3',
            'nama_pekerjaan' => 'Pasangan pipa PVC diameter 4 inci',
            'harga' => '48000'
        ]);

        Harga_Satuan::create([
            'kode_pekerjaan' => 'J4',
            'nama_pekerjaan' => 'Accesoris lain (lem pipa, ampelas, sambungan, dll 10 % pipa)',
            'harga' => '660652'
        ]);

        Harga_Satuan::create([
            'kode_pekerjaan' => 'J5',
            'nama_pekerjaan' => 'Pekerjaan septic tank dan rembesan',
            'harga' => '5350480'
        ]);

        Harga_Satuan::create([
            'kode_pekerjaan' => 'J6',
            'nama_pekerjaan' => 'Pasangan penyambung air bersih ke PAM/ bor baru',
            'harga' => '4000000'
        ]);

        Harga_Satuan::create([
            'kode_pekerjaan' => 'K1',
            'nama_pekerjaan' => 'Pasangan instalasi titik nyala lampu kabel NYM 3 x 2,5 mm',
            'harga' => '200000'
        ]);

        Harga_Satuan::create([
            'kode_pekerjaan' => 'K2',
            'nama_pekerjaan' => 'Pasangan instalasi daya stop kontak kabel NYM 3x2,5 mm',
            'harga' => '159000'
        ]);

        Harga_Satuan::create([
            'kode_pekerjaan' => 'K3',
            'nama_pekerjaan' => 'Pasangan lampu TL 1 x 18  watt',
            'harga' => '60950'
        ]);

        Harga_Satuan::create([
            'kode_pekerjaan' => 'K4',
            'nama_pekerjaan' => 'Pasangan lampu taman 40 watt lengkap dengan tiang besi diameter 2 inci',
            'harga' => '500000'
        ]);

        Harga_Satuan::create([
            'kode_pekerjaan' => 'K5',
            'nama_pekerjaan' => 'Pasangan panel listrik',
            'harga' => '1000000'
        ]);

        Harga_Satuan::create([
            'kode_pekerjaan' => 'L1',
            'nama_pekerjaan' => 'Pengecatan dinding dengan cat tembok kwalitas baik',
            'harga' => '44000'
        ]);

        Harga_Satuan::create([
            'kode_pekerjaan' => 'L2',
            'nama_pekerjaan' => 'Pengecatan plafon dengan cat tembok kwalitas sedang',
            'harga' => '33000'
        ]);

        Harga_Satuan::create([
            'kode_pekerjaan' => 'L3',
            'nama_pekerjaan' => 'Pengecatan plafon Ramin dengan cat melamin',
            'harga' => '30000'
        ]);

        Harga_Satuan::create([
            'kode_pekerjaan' => 'L4',
            'nama_pekerjaan' => 'Pengecatan lis plank dengan cat minyak',
            'harga' => '40250'
        ]);

        Harga_Satuan::create([
            'kode_pekerjaan' => 'L5',
            'nama_pekerjaan' => 'Pengecatan lis plafon dengan cat minyak',
            'harga' => '40250'
        ]);

        Harga_Satuan::create([
            'kode_pekerjaan' => 'M1',
            'nama_pekerjaan' => 'Pembersihan lahan setelah selesai pekerjaan',
            'harga' => '10000'
        ]);

    }
}