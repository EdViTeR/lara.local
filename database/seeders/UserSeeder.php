<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;  //генерация хеша
use Illuminate\Support\Str; //генерация ранд строки
use Illuminate\Support\Carbon;

class UserSeeder extends Seeder
{
	
	public function run() {
        for ($i=0; $i < 20; $i++) { 
            DB::table('users')->insert([
                'name' => Str::random(10),
                'email' => Str::random(15) . '@' . Str::random(4) . '.ru',
                'age' => mt_rand(10, 100),
                'salary' => mt_rand(1000, 100000),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);	
        }
	}
}
?>