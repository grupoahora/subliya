<?php

namespace Database\Seeders;

use App\Models\Attribute;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = ['Talla', 'Color'];
        for ($i = 0; $i < count($names); $i++) {
            $attr = new Attribute();
            $attr->name = $names[$i];
            $attr->save();
        }
    }
}
