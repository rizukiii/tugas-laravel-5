<?php

namespace Database\Seeders;

use App\Models\Laptop;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LaptopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Laptop::create([
            'gambar' => 'Malin Kundang',
            'merek' => 'Yuliadi Soekardi',
            'seri' => 'Gramedia',
            'harga' => '2021',
            'deskripsi' => 'Novel',
        ]);
    }
}
