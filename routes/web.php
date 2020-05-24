<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/task/complete/{id}',function(){
	echo 'Đây là tính năng Hoàn Thành';
})->name('todo.task.complete');

Route::get('/task/reset/{id}',function(){
	echo 'Đây là tính năng làm lại';

})->name('todo.task.reset');



Route::prefix('ad')->group(function(){
	Route::get('complete/{id}',function($id){
		echo 'Đây là group có tính năng hoàn thành với id : '.$id;
	})->name('group.task.complete');

	Route::get('reset/{id}',function($id){
		echo 'Đây là group có tính năng làm lại với id :'.$id;
	})->name('group.task.reset');
});