<?php
use Illuminate\Database\Seeder;
use App\Hitung_Post;

class Hitung_PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hitung_posts');

        Hitung_Post::create([
            'nama_project' => 'Ilkomerz Juara',
            'luas_bangunan' => '300',
            'kualitas' => 'Bagus'
        ]);
    }
}