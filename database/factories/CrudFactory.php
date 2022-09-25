<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Crud;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Crud>
 */
class CrudFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique()->name(),
            'slug' => $this->faker->slug(),
            'judul' => $this->faker->sentence(2),
            'deskripsi' => $this->faker->paragraph(3)
        ];
    }
}
