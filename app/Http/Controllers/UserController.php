<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
class UserController extends Controller {

	public function show() {
		$users = DB::table('users')->select('name', 'age', 'salary')
			->where('age', '=', '30')
			->orWhere('salary', '=', '500')
			->orWhere('id', '>', '4')->get();
		dd($users); die;
		$title = 'Таблица пользователей';
		return view('user.show', ['title'=>$title, 'users'=>$users]);
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
		$title = 'Время';
		$arr = collect([1,2,3,4,5])->chunk(2);
		return view('user.arr', ['arr' => $arr, 'title' => $title]);
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