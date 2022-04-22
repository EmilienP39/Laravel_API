<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('partners')->insert([
            'id' => 1,
            'name' => "Toufick",
            'description' => "Le partner de toufick",
            'address' => "5 impasse des petits chats",
            'cp'=>"85475",
            'city' => "Gotham",
            'votes' => 2,
        ]);
        DB::table('partners')->insert([
            'id' => 2,
            'name' => "Petit Toufick",
            'description' => "Le partner de petit toufick",
            'address' => "5 impasse des petits chats",
            'cp'=>"85475",
            'city' => "Gotham",
            'votes' => 12,
        ]);
        DB::table('partners')->insert([
            'id' => 3,
            'name' => "Soeur Toufick",
            'description' => "Le partner de soueur toufick",
            'address' => "12 avenue des singes",
            'cp'=>"27458",
            'city' => "Montcuq",
            'votes' => 5,
        ]);
    }
}
