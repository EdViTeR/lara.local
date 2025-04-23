<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;  //генерация хеша
use Illuminate\Support\Str; //генерация ранд строки
use Illuminate\Support\Carbon;

class PostSeeder extends Seeder
{
	
	public function run() {
        for ($i=0; $i < 20; $i++) { 
            DB::table('posts')->insert([
                'title' => Str::random(10),
                'slug' => Str::random(15),
                'likes' => mt_rand(10, 100),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);		
        }
	}
}
?>