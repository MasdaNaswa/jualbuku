<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kategori = [
            'Cerpen',
            'Novel',
            'Komik',
            'Fiksi',
            'Non-Fiksi',
        ];

        foreach ($kategori as $item) {
            \App\Models\Kategori::create([
                'kategori' => $item,
            ]);
        }
    }
}
