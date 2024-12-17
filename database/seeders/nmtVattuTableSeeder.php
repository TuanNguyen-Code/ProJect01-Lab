<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class nmtVattuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('nmtvattu')->insert([
            'nmtMaVTu'=>'DD01',
            'nmtTenVTu'=>'Đầu DVD Hitachi 1 cửa',
            'nmtDvTinh'=>'Bộ',
            'nmtPhanTram'=>40
        ]);
        DB::table('nmtvattu')->insert([
            'nmtMaVTu'=>'DD02',
            'nmtTenVTu'=>'Đầu DVD Hitachi 2 cửa',
            'nmtDvTinh'=>'Bộ',
            'nmtPhanTram'=>60
        ]);
    }
}
