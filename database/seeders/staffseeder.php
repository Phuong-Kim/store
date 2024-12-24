<?php

namespace Database\Seeders;

use App\Models\staff; //thêm vào

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str; //thêm vào
use Illuminate\Support\Facades\DB; //thêm vào

class staffseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        staff::create([
            'name' => 'Nguyễn Văn Anh',
            'phone' => 0522550263,
            'birthday' => '2024-11-28',
            'email' => 'nguyenvana@gmail.com',
        ]);

        staff::create([
            'name' => 'tran van b',
            'phone' => 02521353,
            'birthday' => '2024-11-2',
            'email' => 'tranvanb@gmail.com',
        ]);

        staff::create([
            'name' => 'do thi ha',
            'phone' => 159752335,
            'birthday' => '2023-11-28',
            'email' => 'nguyenkkk23@gmail.com',
        ]);
        staff::create([
            'name' => 'nha thi na',
            'phone' => 1023458769,
            'birthday' => '2024-11-18',
            'email' => 'nguyenthi@gmail.com',
        ]);
    }
}
