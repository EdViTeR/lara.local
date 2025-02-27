<?php

namespace App\Http\Controllers;

class UserController extends Controller {

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

	public function customer() {
		$name 	= 'Имя';
		$age  	= 23;
		$salary = 1000;
		$title = 'Сотрудник';
		$class = 'classname';
		$color = 'color:red;';
		$inputval = "Значение для 3го инпута";
		$text = 'Сайт code.mu';
		$href = 'https://code.mu';
		return view('user.customer', ['title' => $title, 'name' => $name, 'age' => $age, 'salary' => $salary, 'inputval' => $inputval, 'class' => $class, 'color' => $color, 'text' => $text, 'href' => $href]);
	}

	public function arr() {
		$title = 'Массив';
		$employees = [
			[
				'name' => 'user1',
				'surname' => 'surname1',
				'salary' => 1000,
			],
			[
				'name' => 'user2',
				'surname' => 'surname2',
				'salary' => 2000,
			],
			[
				'name' => 'user3',
				'surname' => 'surname3',
				'salary' => 3000,
			],
			[
				'name' => 'user4',
				'surname' => 'surname4',
				'salary' => 4000,
			],
			[
				'name' => 'user5',
				'surname' => 'surname5',
				'salary' => 5000,
			],
		];
		return view('user.arr', ['employees' => $employees, 'title' => $title]);
	}

	function city($country = null, $city = null) {
		$location = ['country' => $country, 'city' => $city];
		$title = 'Город';
		return view('user.city', ['title' => $title, 'location' => $location]);
	}

	public function viewDate($year = null, $month = null, $day = null) {
		$title = 'Даты';
		$viewDate = ['year' => $year, 'month' => $month, 'day' => $day];
		return view('user.date', ['title' => $title, 'viewDate' => $viewDate]);
	}
}
?>