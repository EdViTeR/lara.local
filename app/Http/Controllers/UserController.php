<?php

namespace App\Http\Controllers;

class UserController extends Controller {
	
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

	public function all() {
		return view('user');
	}
}
?>