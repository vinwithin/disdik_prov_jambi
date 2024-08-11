<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        DB::table('category_prod_hukum')->insert([
            "name" => "UNDANG-UNDANG (UU)",
            "slug" => "undang-undang"
         ]);
         DB::table('category_prod_hukum')->insert([
            "name" => "PERATURAN PEMERINTAH (PP)",
            "slug" => "peraturan-pemerintah"
         ]);
         DB::table('category_prod_hukum')->insert([
            "name" => "PERATURAN PRESIDEN (PERPRES)",
            "slug" => "peraturan-presiden"
         ]);
         DB::table('category_prod_hukum')->insert([
            "name" => "PERATURAN DAERAH",
            "slug" => "peraturan-daerah"
         ]);
         DB::table('category_prod_hukum')->insert([
            "name" => "PERATURAN GUBERNUR",
            "slug" => "peraturan-gubernur"
         ]);
         DB::table('category_prod_hukum')->insert([
            "name" => "KEPUTUSAN KEPALA DINAS",
            "slug" => "keputusan-kepala-dinas"
         ]);
         DB::table('category_prod_hukum')->insert([
            "name" => "SOP PELAYANAN",
            "slug" => "sop-pelayanan"
         ]);
         DB::table('category_prod_hukum')->insert([
            "name" => "PENDIDIKAN UNTUK SEMUA (PUS)",
            "slug" => "pendidikan-untuk-semua"
         ]);
         DB::table('category_prod_hukum')->insert([
            "name" => "KEPUTUSAN GUBERNUR",
            "slug" => "keputusan-gubernur"
         ]);
         DB::table('category_prod_hukum')->insert([
            "name" => "PPID",
            "slug" => "ppid"
         ]);
         DB::table('category_prod_hukum')->insert([
            "name" => "SURAT DUKUNGAN PUSDATIN",
            "slug" => "surat-dukungan-pusdatin"
         ]);
         DB::table('category_prod_hukum')->insert([
            "name" => "SURAT EDARAN GUBERNUR",
            "slug" => "surat-edaran-gubernur"
         ]);
         DB::table('category_prod_hukum')->insert([
            "name" => "SURAT EDARAN MENTERI",
            "slug" => "surat-edaran-menteri"
         ]);
         DB::table('category_prod_hukum')->insert([
            "name" => "INSTRUKSI GUBERNUR",
            "slug" => "instruksi-gubernur"
         ]);
    }
}
