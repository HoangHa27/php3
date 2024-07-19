<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class ThanhVien extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
     $ho = ['Nguyễn','Lê','Phan','Đỗ','Võ','Bùi'];
     $lot = ['Thi','Văn','Đức','Ngọc','Hoàng','Minh'];
     $ten =['Hà','Tâm','Thảo','Hải','Hòa','Hảo','Thanh'];
     for($i=0; $i<100; $i++){
        $ht = Arr::random($ho). '' .Arr::random($lot). '' .Arr::random($ten);
        DB::table( 'thanhvien')->insert([
            'hoTen'=>$ht,
            'email'=>Str::random(5).'@gmail.com',
            'password' => bcrypt('hehe')
        ]);
     }
    }
}
