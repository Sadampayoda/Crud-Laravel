<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Crud;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Crud::create([
            'name' => 'Sadam payoda',
            'slug' => 'Sadam-payoda',
            'judul' => 'Saya punya impian',
            'deskripsi' => 'Saya adalah seeorang yang mempunyai impian yaitu menjadi backend developer'
        
        ]);
    }
}
