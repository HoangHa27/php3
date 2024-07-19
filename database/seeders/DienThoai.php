<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DienThoai extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 300; $i++) {
            DB::table('dienthoai')->insert([
                ['tenDT' => 'Nokia Pro'  . $i, 'gia' => mt_rand(250000, 500000), 'ngayCapNhat' => Now(), 'idLoai' => 2],
                ['tenDT' => 'Nokia ip'  . $i, 'gia' => mt_rand(250000, 500000), 'ngayCapNhat' => Now(), 'idLoai' => 2],
                ['tenDT' => 'Nokia a'  . $i, 'gia' => mt_rand(250000, 500000), 'ngayCapNhat' => Now(), 'idLoai' => 2],
            ]);
        }
    }
}
