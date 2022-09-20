<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CatatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('catatans')->insert([
            'tanggal' => '23',
            'waktu' => '08',
            'lokasi' => 'taruna bhakti',
            'suhu' => '36'
        ]);
    }
}
