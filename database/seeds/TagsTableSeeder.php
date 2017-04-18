<?php

use App\Tag;
use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::create([
            'name'=>'Мило'
        ]);
        Tag::create([
            'name'=>'Крем'
        ]);
    }
}
