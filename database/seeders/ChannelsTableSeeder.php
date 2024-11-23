<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChannelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('channels')->insert([
            ['name' => 'Music News'],
            ['name' => 'Sports News'],
            ['name' => 'Tech Updates'],
            ['name' => 'World News'],
            ['name' => 'Finance Today'],
            ['name' => 'Health Insights'],
            ['name' => 'Lifestyle Buzz'],
            ['name' => 'Entertainment Weekly'],
            ['name' => 'Travel Daily'],
            ['name' => 'Foodie Hub'],
            ['name' => 'Science Daily'],
            ['name' => 'Education Now'],
            ['name' => 'Movie Central'],
            ['name' => 'Book Club'],
            ['name' => 'Local Highlights']
        ]);
    }
}
