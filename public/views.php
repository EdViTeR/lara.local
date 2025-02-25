<?php

// ⊗pplrPmVwInr_25 №1
// UserController.php
public function all() {
	return view('user');
}
// web.php
Route::get('/user/all/', [UserController::class, 'all']);
// user.blade.php
/*
	<!DOCTYPE html>
	<html>
		<head>
			<title>Пользователь</title>
		</head>
		<body>
			Здесь скоро появится имя пользователя из переменной
		</body>
	</html>
*/

////////////////////////////////////////////////////////////
// ⊗pplrPmVwDP_26 №1
// UserController.php
public function fullName($surname, $name) {
	return view('user', ['surname' => $surname, 'name' => $name]);
	'Фамилия: ' . $surname . ' Имя: ' . $name;
}
// web.php
Route::get('/user/{surname}/{name}', [UserController::class, 'fullname'])->where('surname', '[а-яА-ЯЁё]+')->where('name', '[а-яА-ЯЁё]+');
// user.blade.php
/*
	<!DOCTYPE html>
	<html>
		<head>
			<title>Пользователь</title>
		</head>
		<body>
			Имя {{ $name }}
			Фамилия {{ $surname }}
		</body>
	</html>
*/

////////////////////////////////////////////////////////////
// ⊗pplrPmVwFS_27 №1
// UserController.php
return view('user.fullname', ['surname' => $surname, 'name' => $name]);

////////////////////////////////////////////////////////////
// ⊗pplrPmVwSL_28 №1
// resources/views/components/layout.blade.php
/* 
	<!DOCTYPE html>
	<html>
		<head>
			<title>title</title>
		</head>
		<body>
			{{ $slot }}
		</body>
	</html>
*/

////////////////////////////////////////////////////////////
// ⊗pplrPmVwSLC_29 №1 №2
// UserController.php
public function fullName($surname, $name) {
	return view('user.fullname', ['surname' => $surname, 'name' => $name]);
}
// resources/views/user/fullname.blade.php
/*	
	<x-layout>
		Имя {{ $name }}
		Фамилия {{ $surname }}
	</x-layout>
*/

////////////////////////////////////////////////////////////
// ⊗pplrPmVwSLT_30 №1
// ⊗pplrPmVwCV_31 №1 ||| (случайно выполнились здесь же :D)
// ⊗pplrPmVwTV_32 №1 ||| (случайно выполнились здесь же :D)
// UserController.php
public function name($name) {
	$title = 'Только имя';
	return view('user.name', ['title' => $title, 'name' => $name]);
}

public function age($name, $age) {
	$title = 'Возраст';
	return view('user.age', ['title' => $title, 'name' => $name, 'age' => $age]);
}

public function fullName($surname, $name) {
	$title = 'Полное имя';
	return view('user.fullname', ['title' => $title, 'surname' => $surname, 'name' => $name]);
}
// web.php
Route::get('/user/{name}', [UserController::class, 'name'])->where('name', '[а-яА-ЯЁё]+');
Route::get('/user/{name}/{age}', [UserController::class, 'age'])->where('name', '[а-яА-ЯЁё]+')->whereNumber('age');
Route::get('/user/{surname}/{name}', [UserController::class, 'fullname'])->where('surname', '[а-яА-ЯЁё]+')->where('name', '[а-яА-ЯЁё]+');
// age.blade.php №2 №3
/* 
	<x-layout>
		<x-slot:title>
			{{ $title }}
		</x-slot>
		Имя {{ $name }}
		Возраст {{ $age }}
	</x-layout>

name.blade.php
	<x-layout>
		<x-slot:title>
			{{ $title }}
		</x-slot>
		Имя {{ $name }}
	</x-layout>
*/
