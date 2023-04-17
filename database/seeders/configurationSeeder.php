<?php

namespace Database\Seeders;

use App\Models\Configuration;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class configurationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Configuration::create([
            'whatsapp' => 'https://wa.me/message/3F33KG3IEVX5I1',
            'facebook' => 'https://web.facebook.com/subliyaSD',
            'instagram' => 'https://www.instagram.com/subliyasd/',
        ]);
    }
}
