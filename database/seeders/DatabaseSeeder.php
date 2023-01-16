<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'category' => 'B Indonesia'
        ]);
        DB::table('categories')->insert([
            'category' => 'Matematika'
        ]);
        DB::table('categories')->insert([
            'category' => 'IPA'
        ]);
    }
}
