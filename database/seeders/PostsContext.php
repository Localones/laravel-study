<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PostsContext extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       \App\Models\PostsContext::factory(10)->create();
    }
}
