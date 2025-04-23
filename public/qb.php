<?php

//⊗pplrPmQBGAN_86 №1 №2
public function allUsers()
{
	$users = DB::table('users')->get();
	foreach ($users as $key => $user) {
		dump($user->name);
		dump($user->email);
	}
}
///////////////////////////////////////////////////////////
// ⊗pplrPmQBRVO_87 №1 UserController.php
public function allUsers()
{
	$title = 'Таблица пользователей';
	$users = DB::table('users')->get();
	return view('user.all', ['title' => $title, 'users' => $users]);
}
// all.blade.php
<x-layout>
	<x-slot:title>
		{{ $title }}
	</x-slot>
	<table>
		<tr>
			<th>Имя</th>
			<th>Почта</th>
			<th>Дата</th>
		</tr>
		@foreach ($users as $user)
			<tr>
				<td>{{ $user->name}}</td>
				<td>{{ $user->email}}</td>
				<td>{{ $user->created_at}}</td>
			</tr>
		@endforeach
	</table>
</x-layout>
///////////////////////////////////////////////////////////