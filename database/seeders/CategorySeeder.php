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
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints(); 
        Category::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            'sedan', 'Hatchback', 'SUV', 'MPV', 'Crosover', 'Minivan', 'Sports Car', 'Convertible'
        ];

        foreach ($data as  $value) {
           Category::insert([
            'name' => $value
        ]);
        }    }
}
