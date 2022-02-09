<?php

namespace Database\Seeders;

use App\Models\Mypage;
use App\Models\PostsContext;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PostsContext::factory(10)->create();
    }
}
