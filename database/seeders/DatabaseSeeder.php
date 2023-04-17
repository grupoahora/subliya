<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /* $this->call(userSeeder::class);
        $this->call(configurationSeeder::class); */
        /* $this->call(CategorySeeder::class);
        $this->call(SubCategorySeeder::class); */
        $this->call(DesignSeeder::class);
       /*  $this->call(AttributeSeeder::class); */
        /* $this->call(configurationSeeder::class); */
        /* $this->call(userSeeder::class); */
       /*   */
        /* $this->call(userSeeder::class);
        $this->call(configurationSeeder::class); */
       /*  $this->call(CategorySeeder::class);
        $this->call(SubCategorySeeder::class);
        
        $this->call(AttributeSeeder::class); */
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
