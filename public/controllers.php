<?php

// ⊗pplrPmCnRt_21  №1
// UserController.php
namespace App\Http\Controllers;

class UserController extends Controller {
	
	public function show() {
		return 'Привет юзер';
	}
 	// №2
	public function all() {
		return 'Привет всем!';
	}
}
// web.php
Route::get('/user', [UserController::class, 'show']);
Route::get('/user/all/', [UserController::class, 'all']);
////////////////////////////////////////////////////////////
// ⊗pplrPmCnPr_23 №1
// UserController.php
class UserController extends Controller {
	
	public function show($name) {
		return 'Привет ' . $name;
	}

	// №2
	public function fullName($surname, $name) {
		return 'Фамилия: ' . $surname . ' Имя: ' . $name;
	}

	public function all() {
		return 'Привет всем!';
	}
}
// web.php
Route::get('/user/{name}', [UserController::class, 'show'])->whereAlpha('name');
Route::get('/user/{surname}/{name}', [UserController::class, 'fullname'])->whereAlpha(['name', 'surname']);
////////////////////////////////////////////////////////////
// ⊗pplrPmCnAP_24 №1
// UserController.php
public function show($name) {
	$users = [
		'user1' => 'city1',
		'user2' => 'city2',
		'user3' => 'city3',
		'user4' => 'city4',
		'user5' => 'city5',
	];
	if (!array_key_exists($name, $users)) {
		return 'Такого пользователя не существует';
	}
	return $users[$name];
}
// web.php
Route::get('/user/{name}', [UserController::class, 'show']);