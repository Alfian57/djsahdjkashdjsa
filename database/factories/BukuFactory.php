<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Buku>
 */
class BukuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'judul' => $this->faker->sentence(3),
            'id_penulis' => \App\Models\Penulis::factory(),
            'id_penerbit' => \App\Models\Penerbit::factory(),
            'tahun_terbit' => $this->faker->year,
        ];
    }
}
