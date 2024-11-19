<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenerbitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("penerbit")->insert([
            "nama" => "Airlangga",
            "email" => "airlangga@gmail.com",
            "alamat" => "Jalan Airlangga",
        ]);

        DB::table("penerbit")->insert([
            "nama" => "Yudhistira",
            "email" => "yudhistira@gmail.com",
            "alamat" => "Jalan Yudhistira",
        ]);
    }
}
