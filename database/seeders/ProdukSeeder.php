<?php

namespace Database\Seeders;

use App\Models\Produk;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $produk = 
        [
            [
                'nama_produk' => 'Produk 1',
                'harga' => 10000,
                'stok' => 50,
            ],
            [
                'nama_produk' => 'Produk 2',
                'harga' => 15000,
                'stok' => 30,
            ]
        ];

        Produk::insert($produk);
    }
}
