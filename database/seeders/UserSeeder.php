<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Adidan Widhi',
            'email' => 'adidan@gmail.com',
            'password' => bcrypt('123456'),
            'alamat' => 'jonggol',
            'telepon' => '08368310391',
        ]);
    }
}
