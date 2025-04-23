<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str; //генерация ранд строки

class CitySeeder extends Seeder
{
	
	public function run() {
        DB::table('cities')->insert([
            'name' => Str::random(10),
            'country' => Str::random(15),
        ]);		
	}
}
?>