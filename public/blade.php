<?php

// ⊗pplrPmBlVT_34  №1
// UserController.php
public function customer() {
	$name 	= 'Имя';
	$age  	= 23;
	$salary = 1000;
	$title = 'Сотрудник';
	return view('user.customer', ['title' => $title, 'name' => $name, 'age' => $age, 'salary' => $salary]);
}
// web.php
Route::get('/user/customer/', [UserController::class, 'customer']);
//customer.blade.php
/*
	<x-layout>
		<x-slot:title>
			{{ $title }}
		</x-slot>
		<p>{{ $name }}</p>
		<p>{{ $age }}</p>
		<p>{{ $salary }}</p>
	</x-layout>
*/
////////////////////////////////////////////////////////////
// ⊗pplrPmBlVA_35 №1
// UserController.php
public function customer() {
	$title = 'Сотрудник';
	// №1
	$class = 'classname';
	// №2
	$name 	= 'Имя';
	$age  	= 23;
	$salary = 1000;
	$inputval = "Значение для 3го инпута";
	// №3
	$color = 'color:red;';
	// №4
	$text = 'Сайт code.mu';
	$href = 'https://code.mu';
	return view('user.customer', ['title' => $title, 'name' => $name, 'age' => $age, 'salary' => $salary, 'inputval' => $inputval, 'class' => $class, 'color' => $color, 'text' => $text, 'href' => $href]);
}
// customer.blade.php
/*
	<x-layout>
		<x-slot:title>
			{{ $title }}
		</x-slot>
		<p class="{{ $class }}" style={{ $color }}>{{ $name }}</p>
		<input value="{{ $age }}">
		<input value="{{ $salary }}">
		<input value="{{ $inputval }}">
		<p><a href={{ $href }}>{{ $text }}</a></p>
	</x-layout>
*/
////////////////////////////////////////////////////////////
// ⊗pplrPmBlAC_36 №1
// customer.blade.php
// <p>current timestamp: {{ date('d.m.Y') }}<p>
////////////////////////////////////////////////////////////
// ⊗pplrPmBlAr_37 №1
// UserController.php
public function arr() {
	$title = 'Массив';
	$customer = ['name' => 'Валерик', 'age' => 25, 'salary' => 10000];
	// №2
	$arr = [1, 2, 3, 4, 5, 6, 7, 'восемь'];
	return view('user.arr', ['customer' => $customer, 'arr' => $arr, 'title' => $title]);
}
// arr.blade.php
/*
	<x-layout>
		<x-slot:title>
			{{ $title }}
		</x-slot>
		<p>{{ $customer['name'] }}<p>
		<p>{{ $customer['age'] }}<p>
		<p>{{ $customer['salary'] }}<p>
		<p>{{ count($arr) }}<p>
	</x-layout>
*/
////////////////////////////////////////////////////////////
// ⊗pplrPmBlVCh_38 №1
// UserController.php
function city($name = null) {
	$title = 'Город';
	return view('user.city', ['title' => $title, 'name' => $name]);
}
// web.php
Route::get('user/city/{name?}', [UserController::class, 'city']);
// city.blade.php
// {{ $name ?? 'Москва' }}
// №2
// UserController.php
function city($country = null, $city = null) {
	$location = ['country' => $country, 'city' => $city];
	$title = 'Город';
	return view('user.city', ['title' => $title, 'location' => $location]);
}
// web.php
Route::get('user/city/{country?}/{city?}', [UserController::class, 'city']);
// city.blade.php
//	<p>Страна: {{ $location['country'] ?? 'Россия'}}</p>
//	<p>Город: {{ $location['city'] ?? 'Москва'}}</p>
////////////////////////////////////////////////////////////
// №3
// UserController.php
public function viewDate($year = null, $month = null, $day = null) {
	$title = 'Даты';
	$viewDate = ['year' => $year, 'month' => $month, 'day' => $day];
	return view('user.date', ['title' => $title, 'viewDate' => $viewDate]);
}
// web.php
Route::get('user/date/{year?}/{month?}/{day?}', [UserController::class, 'viewDate']);
// date.blade.php
/*
	<x-layout>
		<x-slot:title>
			{{ $title }}
		</x-slot:title>
		<p>Год: {{ $viewDate['year'] ?? date('Y')}}</p>
		<p>Месяц: {{ $viewDate['month'] ?? date('m')}}</p>
		<p>День: {{ $viewDate['day'] ?? date('d')}}</p>
	</x-layout>
*/
////////////////////////////////////////////////////////////
// ⊗pplrPmBlUDO_39 
public function text() {
	$str = '<b>text</b>';
	return view('user.text', ['title' => $title, 'text' => $text]);
}
// text.blade.php
// <p>{!! $str !!}</p>
////////////////////////////////////////////////////////////
/* ⊗pplrPmBlCm_40 №1
	<x-layout>
		<x-slot:title>
			{{ $title }}
		</x-slot:title>
		<p>Год: {{ $viewDate['year'] ?? date('Y')}}</p>
		<p>Месяц: {{ $viewDate['month'] ?? date('m')}}</p>
		<p>{{-- Здесь в задаче 38 мы передавали день --}}</p>
		<p>День: {{ $viewDate['day'] ?? date('d')}}</p>
	</x-layout>
*/
////////////////////////////////////////////////////////////
// ⊗pplrPmBlCn_41 №1
public function age($name, $age) {
	$title = 'Возраст';
	return view('user.age', ['title' => $title, 'name' => $name, 'age' => $age]);
}
/*
	<x-layout>
		<x-slot:title>
			{{ $title }}
		</x-slot>
		Имя {{ $name }}
		Возраст {{ $age }}
		@if ($age > 18)
			Смотри
		@endif
	</x-layout>
*/
////////////////////////////////////////////////////////////
/* ⊗pplrPmBlED_42 №1
	<x-layout>
		<x-slot:title>
			{{ $title }}
		</x-slot>
		Имя {{ $name }}
		Возраст {{ $age }}
		@if ($age > 18)
			Смотри
		@else
			Не смотри
		@endif
	</x-layout>
*/
////////////////////////////////////////////////////////////
/* ⊗pplrPmBlEiD_43 №1
	<x-layout>
		<x-slot:title>
			{{ $title }}
		</x-slot>
		Имя {{ $name }}
		Возраст {{ $age }}
		@if ($age > 18)
			Смотри
		@elseif ($age == 18)
			Почти можно смотреть
		@else
			Не смотри
		@endif
	</x-layout>
*/
////////////////////////////////////////////////////////////
/* ⊗pplrPmBlUD_44 №1
	<x-layout>
		<x-slot:title>
			{{ $title }}
		</x-slot>
		Имя {{ $name }}
		Возраст {{ $age }}
		@unless($age > 18)
			Пока рано смотреть
		@endunless
	</x-layout>
*/
////////////////////////////////////////////////////////////
/* ⊗pplrPmBlCC_45 №1
	<x-layout>
		<x-slot:title>
			{{ $title }}
		</x-slot>
		@if (count($arr) > 0)
			{{ count($arr) }}
		@else
			Массив пустой
		@endif
	</x-layout>
*/
////////////////////////////////////////////////////////////
/* ⊗pplrPmBlFeD_46 №1 №2
	<x-layout>
		<x-slot:title>
			{{ $title }}
		</x-slot>
		<p>{{ $customer['name'] }}<p>
		<p>{{ $customer['age'] }}<p>
		<p>{{ $customer['salary'] }}<p>
		<ul>
		@foreach ($arr as $value)
			<li>{{ $value**2 }}</li>
		@endforeach
		</ul>
	</x-layout>
*/// №3
// <ul>{{ sqrt($value) }}</ul>
////////////////////////////////////////////////////////////
/* ⊗pplrPmBlFeK_47 №1 №2
	@foreach ($arr as $key => $value)
		<ul>{{ $key + 1 }} {{ $value }}</ul>
	@endforeach
*/
////////////////////////////////////////////////////////////
/* ⊗pplrPmBlFeC_48 №1
	@foreach ($arr as $key => $value)
		<ul>
			@if ($value % 2 == 0)
				<li>{{ $value }}</li>
			@endif
		</ul>
	@endforeach
*/
/* №1
	@if (is_array($data))
		<ul>
			@foreach ($data as $value)
				<li>{{ $value }}</li>
			@endforeach
		</ul>
		@else
			<p>{{ $data }}</p>
	@endif
*/
////////////////////////////////////////////////////////////
/* ⊗pplrPmBlFeN_49 №1
	<table>
		@foreach ($arr as $subArr)
			<tr>
				@foreach ($subArr as $elem)
					<td>{{ $elem }}</td>
				@endforeach
			</tr>
		@endforeach
	</table>
*/
////////////////////////////////////////////////////////////
/* ⊗pplrPmBlFeMA_50 №1
	<ul>
		@foreach ($employees as $value)
			<li>{{ $value['name'] }} {{ $value['surname'] }} {{ $value['salary'] }}</li>
		@endforeach
	</ul>
*/// №2
/*
	<table>
		@foreach ($employees as $value)
			<tr>
				<td>{{ $value['name'] }}</td>
				<td>{{ $value['surname'] }}</td>
				<td>{{ $value['salary'] }}</td>
			</tr>
		@endforeach
	</table>
*/
////////////////////////////////////////////////////////////
/* ⊗pplrPmBlFsD_51 №1
	@forelse ($employees as $elem)
		<p>{{ $elem }}</p>
	@empty
		<p>в массиве нет элементов</p>
	@endforelse
*/
////////////////////////////////////////////////////////////
/* ⊗pplrPmBlVL_52 №1
	<ul>
		@foreach ($arr as $elem)
			<li>{{ $loop->iteration-1 }} {{ $elem }}</li>
		@endforeach
	</ul>
*/// №2
// <li>{{ $loop->iteration }} {{ $elem }}</li>
/* №3
	@foreach ($arr as $elem)
		@if ($loop->first)
			<li class="first">{{ $loop->iteration }} {{ $elem }}</li>
		@elseif ($loop->last)
			<li class="last">{{ $loop->iteration }} {{ $elem }}</li>
		@else
			<li>{{ $loop->iteration }} {{ $elem }}</li>
		@endif
	@endforeach
*/
/* №4
		@foreach ($arr as $elem)
			@if ($loop->remaining < 3)
				<li><i>{{ $loop->iteration }} {{ $elem }}</i></li>
			@else
				<li><b>{{ $loop->iteration }} {{ $elem }}</b></li>
			@endif
		@endforeach
*/
////////////////////////////////////////////////////////////
/* ⊗pplrPmBlBD_53 №1
Из контроллера: $arr = [1,2,3,4,5,6,7,8,9,0,1,2,3,4];
	@foreach ($arr as $elem)
		<li>{{ $loop->iteration }}. <b>{{ $elem }}</b></li>
		@break($elem == 0)
	@endforeach
*/
////////////////////////////////////////////////////////////
/* ⊗pplrPmBlCD_54 №1
Из контроллера: $arr = [1,2,3,4,5,6,7,8,9,0,1,2,3,4];
	@foreach ($arr as $elem)
		@continue($elem == 0)
		<li>{{ $loop->iteration }}. <b>{{ $elem }}</b></li>
	@endforeach
*/
////////////////////////////////////////////////////////////
/* ⊗pplrPmBlFrD_55 №1
	@for ($i = 1; $i < 11; $i++)
		<p>{{ $i }}</p>
	@endfor
*/
////////////////////////////////////////////////////////////
/*	⊗pplrPmBlPCB_56 №1
@php
	for ($i = 1; $i < 11; $i++) {
		echo "<p>$i</p>";
	}
@endphp
*/
////////////////////////////////////////////////////////////
/* ⊗pplrPmBlPrm_57 №1
	@foreach($links as $key => $link)
		<a href="http://{{ $link['href']  }}">{{ $link['text']  }}</a>
	@endforeach
*/
/* №2
	<ul>
		@foreach($links as $key => $link)
			<li><a href="http://{{ $link['href']  }}">{{ $link['text']  }}</a></li>
		@endforeach
	</ul>
*/
/* №3
	<table>
		@foreach ($employees as $employer)
			<tr>
			@foreach ($employer as $key => $value)
				<td>{{ $value }}</td>
			@endforeach
			</tr>
		@endforeach
	</table>
*/
/* №4 
	<table>
		@foreach ($employees as $employer)
			@if ($loop->first)
				<tr>
					<th>Имя</th>
					<th>Фамилия</th>
					<th>Зарплата</th>
				</tr>
			@else
				<tr>
				@foreach ($employer as $key => $value)
					<td>{{ $value }}</td>
				@endforeach
				</tr>
			@endif
		@endforeach
	</table>
*/
/* №5
	<table>
		<tr>
			<th>#</th>
			<th>Имя</th>
			<th>Фамилия</th>
			<th>Зарплата</th>
		</tr>
		@foreach ($employees as $employer)
				<tr>
					<th>{{ $loop->iteration }}</th>
					@foreach ($employer as $key => $value)
						<td>{{ $value }}</td>
					@endforeach
				</tr>
		@endforeach
	</table>
*/