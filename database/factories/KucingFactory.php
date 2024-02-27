<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Breed;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class KucingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $breedIds = Breed::pluck('id')->toArray();

        return [
            'nama' => $this->faker->firstNameFemale,
            'tanggal_lahir' => $this->faker->dateTimeBetween('-5 years', 'now')->format('Y-m-d'),
            'berat' => $this->faker->numberBetween(1, 6),
            'warna' => $this->faker->randomElement(['Putih', 'Hitam', 'Coklat', 'Abu-abu', 'Merah', 'Kuning']),
            'kondisi_kesehatan' => $this->faker->randomElement(['Sehat', 'Vaksin', 'Sakit']),
            'jenis_id' => $this->faker->randomElement($breedIds),
        ];
    }
}
