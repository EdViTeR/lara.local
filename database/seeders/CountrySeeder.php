<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str; //генерация ранд строки

class CountrySeeder extends Seeder
{
	
	public function run() {
        DB::table('countries')->insert([
            'name' => Str::random(15),
            'mainland' => Str::random(10),
        ]);		
	}
}
?>