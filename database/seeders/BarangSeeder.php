<?php

namespace Database\Seeders;

use App\Models\barang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Barang::create(['nama_barang' => 'Kopi', 'stok' => 100, 'harga' => 5000]);
        Barang::create(['nama_barang' => 'Gula', 'stok' => 50, 'harga' => 8000]);
        Barang::create(['nama_barang' => 'Susu', 'stok' => 70, 'harga' => 10000]);
    }
}
