<?php

namespace Database\Seeders;

use App\Models\MenuItem;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class MenuItemsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('menu_items')->truncate();

        MenuItem::create([
            'name' => 'Jeruk',
            'price' => 25000,
            'description' => 'seger',
            'photo' => 'foto1.png',
            'menu_number' => '1',
            'type' => 'Minuman',
            'stock' => 5,
            'slug' => Str::slug('Wedrink Jeruk'),
        ]);

        MenuItem::create([
            'name' => 'Anggur',
            'price' => 20000,
            'description' => 'Segarr',
            'photo' => 'foto2.png',
            'menu_number' => '2',
            'type' => 'Minuman',
            'stock' => 10,
            'slug' => Str::slug('Wedrink Anggur'),
        ]);

        MenuItem::create([
            'name' => 'Coklat',
            'price' => 22000,
            'description' => 'Minuman Segarrr dan manis',
            'photo' => 'foto4.jfif',
            'menu_number' => '3',
            'type' => 'Minuman',
            'stock' => 12,
            'slug' => Str::slug('wedrink coklat'),
        ]);
    }
}
