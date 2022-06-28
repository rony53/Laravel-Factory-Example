<?php

namespace Database\Seeders;

use App\Models\DummyData;
use Database\Factories\DummyFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummeyFactorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DummyData::factory()->count(5)->create();
    }
}
