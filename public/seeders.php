<?php
////////////////////////////////////////////////////////////
// ⊗pplrPmSdTF_77 №1
User::factory()->create([
    'name' => 'Vanbka',
    'email' => 'vanoff@example.com',
    'password' => '1111',
]);
////////////////////////////////////////////////////////////
// ⊗pplrPmSdRSG_78 №1
    public function run(): void
    {
        for ($i=0; $i < 10; $i++) { 
            DB::table('users')->insert([
                'name' => Str::random(10),
                'email' => Str::random(15),
                'password' => Str::random(20),
            ]);
        }
    }
////////////////////////////////////////////////////////////
// ⊗pplrPmSdSPG_79 №1
    for ($i=0; $i < 10; $i++) { 
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(15) . '@' . Str::random(4) . '.ru',
            'password' => Str::random(20),
        ]);
    }
////////////////////////////////////////////////////////////
// ⊗pplrPmSdPH_80 №1
    for ($i=0; $i < 10; $i++) { 
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(15) . '@' . Str::random(4) . '.ru',
            'password' => Hash::make(12345),
        ]);
    }
////////////////////////////////////////////////////////////
// ⊗pplrPmSdDC_81 №1
// UserSeeder.php | php artisan db:seed --class=UserSeeder
<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;  //генерация хеша
use Illuminate\Support\Str; //генерация ранд строки

class UserSeeder extends Seeder
{
    
    public function run() {
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(15) . '@' . Str::random(4) . '.ru',
            'password' => Hash::make(12345),
        ]);     
    }
}
?>
// №2 CitySeeder.php | php artisan db:seed --class=CitySeeder
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
// №3 CountrySeeder.php | php artisan db:seed --class=CountrySeeder
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
////////////////////////////////////////////////////////////
// ⊗pplrPmSdCC_82 №1
public function run(): void
{
    $this->call([
        UserSeeder::class,
        CitySeeder::class,
        CountrySeeder::class,
    ]);
}
////////////////////////////////////////////////////////////
// ⊗pplrPmSdFR_83 №1
php artisan migrate:fresh --seed
////////////////////////////////////////////////////////////
// ⊗pplrPmSdTT_84 №1
// create_post_table
Schema::create('posts', function (Blueprint $table) {
    $table->id();
    $table->string('title');
    $table->string('slug');
    $table->integer('likes');
    $table->dateTime('created_at');
    $table->dateTime('updated_at');
});
// create_user_table
Schema::create('users', function(Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->string('email');
    $table->integer('age');
    $table->integer('salary');
    $table->dateTime('created_at');
    $table->dateTime('updated_at');
});
// DatabaseSeeder.php
public function run(): void
{
    $this->call([
        UserSeeder::class,
        PostSeeder::class,
    ]);
}
// UserSeeder.php
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
// PostSeeder.php
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
////////////////////////////////////////////////////////////