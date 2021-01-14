<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Exhibitor;
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
        // \App\Models\User::factory(10)->create();
        Exhibitor::factory(50)->create();
        $this->call(
            CategorySeeder::class,
        );

        $categories = Category::all();

        Exhibitor::all()->each(function ($exhibitor) use ($categories) {
            $exhibitor->categories()->attach(
                $categories->random(rand(1, 3))->pluck('id')->toArray()
            );
        });
    }
}
