<?php

namespace Database\Seeders;

use App\Models\users; //thêm vào

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str; //thêm vào
use Illuminate\Support\Facades\DB; //thêm vào

class usersseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        users::create([
            'name' => 'Nguy Vun vy',
            'email' => 'tranhaoanh@gmail.com',
            'password' => '0512mn',
        ]);

        users::create([
            'name' => 'Nguyễn Văn tuấn',
            'email' => 'tuan@gmail.com',
            'password' => '1547p',
        ]);

        users::create([
            'name' => 'Nguyễn b',
            'email' => 'b@gmail.com',
            'password' => '325hk',
        ]);
        users::create([
            'name' => 'túa m',
            'email' => 'hkahsik@gmail.com',
            'password' => '48233b',
        ]);
    }
}
