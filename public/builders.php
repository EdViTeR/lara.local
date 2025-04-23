<?php
// ⊗pplrPmQBGAN_86 №1 №2
public function show() {
	$users = DB::table('users')->get();
	foreach ($users as $user) {
		dump($user->id . '|' . $user->name . '|' . $user->email . '|' . $user->age . '|' . $user->salary . '|' . $user->created_at . '|' . $user->updated_at);
	}
}
////////////////////////////////////////////////////////////
// ⊗pplrPmQBRVO_87 №1
// UserController.php
	public function show() {
		$title = 'Таблица пользователей';
		$users = DB::table('users')->get();
		return view('user.show', ['title'=>$title, 'users'=>$users]);
	}
/* show.blade.php
	<x-layout>
		<x-slot:title>
			{{ $title }}
		</x-slot>
		<table>
			<tr>
				<th>id</th>
				<th>Имя</th>
				<th>email</th>
				<th>Возраст</th>
				<th>Зарплата</th>
				<th>Время регистрации</th>
				<th>Последний апдейт</th>
			</tr>
			@foreach ($users as $user)
				<tr>
					<td>{{$user->id}}</td>
					<td>{{$user->name}}</td>
					<td>{{$user->email}}</td>
					<td>{{$user->age}}</td>
					<td>{{$user->salary}}</td>
					<td>{{$user->created_at}}</td>
					<td>{{$user->updated_at}}</td>
				</tr>
			@endforeach 
		</table>
	</x-layout>
*/
////////////////////////////////////////////////////////////
// ⊗pplrPmQBVSQ_88 №1
// 1-й способ:  №2
DB::enableQueryLog();
DB::table('posts')->where('id', '!=', 3)->get();
dump(DB::getQueryLog()); // "query" => "select * from `posts` where `id` != ?"
//"time" => 0.54
// 2-й способ:
DB::table('posts')->where('id', '!=', 3)->dd(); // "select * from `posts` where `id` != ?"
// 3-й способ:
DB::table('posts')->where('id', '!=', 3)->dump(); // "select * from `posts` where `id` != ?"
// 4-й способ:
$posts = DB::table('posts')->where('id', '!=', 3)->toSql();
dump($posts); // "select * from `posts` where `id` != ?"
////////////////////////////////////////////////////////////
// ⊗pplrPmQBSF_89 №1
$users = DB::table('users')->select('name', 'email')->get();
// №2
$users = DB::table('users')->select('name', 'email as user_email')->get();
////////////////////////////////////////////////////////////
// ⊗pplrPmQBCW_90 №1
$users = DB::table('users')->select('name', 'age')->where('age', '=', '30')->get();
// №2
$users = DB::table('users')->select('name', 'age')->where('age', '!=', '30')->get();
// №3
$users = DB::table('users')->select('name', 'age')->where('age', '>', '30')->get();
// №4
$users = DB::table('users')->select('name', 'age')->where('age', '<', '30')->get();
// №5
$users = DB::table('users')->select('name', 'age')->where('age', '<=', '30')->get();
////////////////////////////////////////////////////////////
// ⊗pplrPmQBSCW_91 №1
$users = DB::table('users')->select('name', 'age')
	->where('age', '>=', '20')
	->where('age', '<=', '30')->get();
////////////////////////////////////////////////////////////
// ⊗pplrPmQBCO_92 №1
$users = DB::table('users')->select('name', 'age')
	->where('age', '=', '30')
	->orWhere('id', '>', '4')->get();
// №2
$users = DB::table('users')->select('name', 'age', 'salary')
	->where('age', '=', '30')
	->orWhere('salary', '=', '500')
	->orWhere('id', '>', '4')->get();
////////////////////////////////////////////////////////////
// ⊗pplrPmQBCC_93 №1