<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('books')->insert([
            [
                'title' => 'The Alchemist',
                'price' => 1200,
                'author' => 'Paulo Coelho',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Atomic Habits',
                'price' => 1500,
                'author' => 'James Clear',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Pir-e-Kamil',
                'price' => 1000,
                'author' => 'Umera Ahmed',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
