<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tag::factory()->create([
            'name' => 'Front End'
        ]);
        Tag::factory()->create([
            'name' => 'Back End'
        ]);
        Tag::factory()->create([
            'name' => 'Manager'
        ]);
        Tag::factory()->create([
            'name' => 'Full Stack Dev'
        ]);
    }
}
