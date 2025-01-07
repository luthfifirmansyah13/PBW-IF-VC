<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Item;

class ItemSeeder extends Seeder
{
    public function run()
    {
        // Menambahkan data dummy menggunakan factory
        Item::factory(10)->create();
    }
}
