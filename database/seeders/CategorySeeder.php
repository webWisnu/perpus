<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::enableForeignKeyConstraints();
        Schema::disableForeignKeyConstraints();


        $data = [
            ' komik', 'novel', 'fantasy', 'Bahasa Pemograman', 'sejarah', 'Horor'
        ];

        foreach ($data as $key) {
            Category::insert([
                'name' => $key
            ]);
        }
    }
}