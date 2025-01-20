<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Web Desain',
            'slug' => 'web-desain'
        ]);
        Category::create([
            'name' => 'UI UX',
            'slug' => 'UI UX'
        ]);
        Category::create([
            'name' => 'Mechine Learning',
            'slug' => 'Mechine Learning'
        ]);
    }
}
