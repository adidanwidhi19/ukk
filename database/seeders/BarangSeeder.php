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
        Barang::create(['nama_barang' => 'Barang A', 'stok' => 10, 'harga' => 10000]);
        Barang::create(['nama_barang' => 'Barang B', 'stok' => 20, 'harga' => 15000]);
        Barang::create(['nama_barang' => 'Barang C', 'stok' => 30, 'harga' => 30000]);
    }
}
