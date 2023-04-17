<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = Category::all();
        foreach ($categories as $key => $categoryval) {
            for ($i=0; $i < 2 ; $i++) {
                $subcategory = Subcategory::create([
                    'name' => 'subcategoria' . $categoryval->id,
                ])->Categories()->attach($categoryval->id);
                $subcategory = Subcategory::create([
                    'name' => 'subcategoria' . $categoryval->id,
                ])->Categories()->attach($categoryval->id);
            }

        }
    }
}
