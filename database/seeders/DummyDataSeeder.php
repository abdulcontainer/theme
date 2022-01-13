<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class DummyDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dummydata')->insert([
            'name'=>Str::random(10),
            'email'=>Str::random(10).'@gmail.com',
            'city'=>Str::random(10),
            'phone'=>Str::random(10)   
        ]);
    }
}
