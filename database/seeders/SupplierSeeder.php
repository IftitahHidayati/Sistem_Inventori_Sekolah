<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Supplier::insert([
            [
                'kode_supplier' => 'SUP001',
                'nama_supplier' => 'PT. Sinar Jaya',
                'alamat' => 'Jl. Patiunus No.25',
                'telp' => '081234500000',
                'kota' => 'Pasuruan',
                'penyedia' => 'Barang Elektronik',
            ],
            [
                'kode_supplier' => 'SUP002',
                'nama_supplier' => 'Mebel Lumintu',
                'alamat' => 'Jl. Bukir No.04',
                'telp' => '082005567123',
                'kota' => 'Probolinggo',
                'penyedia' => 'Meja dan Kursi',
            ],
            [
                'kode_supplier' => 'SUP003',
                'nama_supplier' => 'PT. Sehat Ceria',
                'alamat' => 'Jl. Pahlawan No.10',
                'telp' => '085001185961',
                'kota' => 'Surabaya',
                'penyedia' => 'Sarana Olahraga',
            ],
            [
                'kode_supplier' => 'SUP004',
                'nama_supplier' => 'PT. Berkah Jaya',
                'alamat' => 'Jl. Candi Mendut No.20',
                'telp' => '0850011851234',
                'kota' => 'Malang',
                'penyedia' => 'Kendaraan',
            ],
        ]);
    }
}