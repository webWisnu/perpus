<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;

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
                'name' => $key,
                'slug' => $key,
               'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
