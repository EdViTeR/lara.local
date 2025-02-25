<?php

// ⊗pplrPmRtInr_9 №1
Route::get('/test', function () {
    return 'Вы попали на тестовую страницу';
});

// №2
Route::get('/dir/test', function () {
    return 'Вы попали на вторую тестовую страницу';
});

////////////////////////////////////////////////////////////
// ⊗pplrPmRtPr_10 №1
Route::get('/post/{name}', function ($name) {
    return 'пост ' . $name;
});
////////////////////////////////////////////////////////////
// ⊗pplrPmRtSP_11 №1
Route::get('/user/{surname}/{name}', function ($surname, $name) {
    return $surname . ' ' . $name;
});
////////////////////////////////////////////////////////////
// ⊗pplrPmRtOP_12 №1
Route::get('/city/{city?}', function ($city = 'minsk') {
    return 'Город' . ' ' . $city;
});
////////////////////////////////////////////////////////////
// ⊗pplrPmRtPC_13 №1
Route::get('/user/{id}', function ($id) {
    return 'Пользователь ' . $id;
})->where('id', '[0-9]+');
////////////////////////////////////////////////////////////
// ⊗pplrPmRtSPC_14 №1
Route::get('/user/{id}/{name}', function ($id, $name) {
    return 'пост ' . $id . ' ' . $name;
})->where('id', '[0-9]+')->where('name', '[a-z]{2,}');
// №2
Route::get('/post/{date}', function ($date) {
    return 'Дата ' . $date;
})->where('date', '[0-9]{4}-(0[1-9]|1[012])-(0[1-9]|1[0-9]|2[0-9]|3[01])');
// №3
Route::get('/post/{year}/{month}/{day}', function ($year, $month, $day) {
    return 'Дата ' . $year . ' ' . $month . ' ' . $day;
})->where('year', '[0-9]{4}')->where('month', '(0[1-9]|1[012])')->where('day', '(0[1-9]|1[0-9]|2[0-9]|3[01])');
// №4
Route::get('/users/{order}', function ($order) {
    return 'Пользователь ' . $order;
})->where('order', 'name|surname|age');
////////////////////////////////////////////////////////////
// ⊗pplrPmRtPPC_15 №1
Route::get('/user/{id}', function ($id) {
    return 'Пользователь ' . $id;
})->whereNumber('id');
// №2
Route::get('/city/{name}', function($name) {
    return 'Город ' . $name;
})->whereAlpha('name');
////////////////////////////////////////////////////////////
// ⊗pplrPmRtGPC №1
public function boot(): void
{
    Route::pattern('id', '[0-9]+');
    Route::pattern('slug', '[a-zA-Z0-9-_]+');
}
////////////////////////////////////////////////////////////
// ⊗pplrPmRtRC_16 №1
Route::get('/user/{id}', function ($id) {
    return 'qweq';
})->whereNumber('id');
Route::get('/user/all', function () {
    return 'allqwe';
});
// №2
Route::get('/user/', function () {
    return 'user';
});
Route::get('/user/{id?}', function ($id = null) {
    return 'id';
})->whereNumber('id');
Route::get('/user/all', function () {
    return 'all';
});
// №3
Route::get('/user/all', function () {
    return 'all';
});
Route::get('/user/all/desc', function () {
    return 'all desc';
});
Route::get('/user/{name}/{id?}', function ($name, $id) {
    return 'name id';
});
// №4
Route::get('/user/{id}', function ($id) {
    return 'id';
})->whereNumber('id');
Route::get('/user/{slug}', function ($slug) {
    return 'slug';
})->where('slug', '[a-z0-9_-]+');
////////////////////////////////////////////////////////////
// ⊗pplrPmRtRG_18 №1
Route::prefix('admin')->group(function () {
    Route::get('/users', function () {
        return 'all';
    });
    Route::get('/user/{id}', function ($id) {
        return $id;
    });
});
////////////////////////////////////////////////////////////
// ⊗pplrPmRtNR_19 №1
Route::get('/user/profile', function () {
    return 'profile';
})->name('profiles');