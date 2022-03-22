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
            'address' => "5 impasse des petits chats, 85475",
            'city' => "Gotham",
        ]);
        DB::table('partners')->insert([
            'id' => 2,
            'name' => "Petit Toufick",
            'description' => "Le partner de petit toufick",
            'address' => "5 impasse des petits chats, 85475",
            'city' => "Gotham",
        ]);
        DB::table('partners')->insert([
            'id' => 3,
            'name' => "Soueur Toufick",
            'description' => "Le partner de soueur toufick",
            'address' => "12 avenue des singes, 27458",
            'city' => "Montcuq",
        ]);
    }
}
