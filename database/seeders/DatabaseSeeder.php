<?php

namespace Database\Seeders;

use App\Models\Mypage;
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
        Mypage::factory()->count(10)->create();
    }
}
