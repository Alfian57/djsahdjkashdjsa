<?php

namespace Database\Seeders;

use App\Models\Buku;
use App\Models\Penulis;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Buku::factory(50)
            ->recycle(Penulis::factory(10)->create())
            ->create();
    }
}
