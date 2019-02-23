<?php
use Illuminate\Http\Request;

//Blog

//Старт
Route::get('/', function () {
    return view('startBlog');
})->name('startBlog');

//Админ & Юзер
Route::post('/','BlogController@Start')->name('access');

//Форма создания Записи
Route::get('/blogcreate', function ()
{    return view('AdminBlog');
})->name('AdminBlog');

//Создание одной задачи
Route::post('/blogcreate','BlogController@CreateBlog')->name('create');

//Список Задач
Route::get('/taskslist', 'BlogController@getTasksList')->name('tasksList');

//Инфо по одной задаче
Route::get('/blog/{id}', 'BlogController@getOneTask')->name('oneTask');




