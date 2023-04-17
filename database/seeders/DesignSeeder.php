<?php

namespace Database\Seeders;

use App\Models\Design;
use App\Models\Record;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DesignSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $disenosbuzos = [];
        for ($i=1; $i < 11 ; $i++) {
            $disenosbuzos[$i] = Design::create([
                'name' => 'buzo # '.$i,
                'reference' => $i,
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam beatae laborum neque harum sunt commodi quisquam. Dicta voluptates eveniet illo, officiis quia, dolorem temporibus veniam ea aut quod, saepe eligendi.',
                'category_id' =>  1,
                'subcategory_id' => 1,
                /* 'status_id' => Null, */
            ]);
            $img = new Record();
            $img->url = 'image/buzos/'.$i.'.png';
            $img->recordeable_type = 'App\Models\design';
            $img->recordeable_id = $disenosbuzos[$i]->id;
            $img->save();
        }
        $disenosuniforme = [];
        for ($i = 11; $i < 21; $i++) {
            $disenosuniforme[$i] = Design::create([
                'name' => 'uniforme # ' . $i,
                'reference' => $i,
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam beatae laborum neque harum sunt commodi quisquam. Dicta voluptates eveniet illo, officiis quia, dolorem temporibus veniam ea aut quod, saepe eligendi.',
                'category_id' =>  2,
                'subcategory_id' => 7,
                /* 'status_id' => Null, */
            ]);
            $img = new Record();
            $img->url = 'image/uniformes/' . $i . '.png';
            $img->recordeable_type = 'App\Models\design';
            $img->recordeable_id = $disenosuniforme[$i]->id;
            $img->save();
        }
        
    }
}
