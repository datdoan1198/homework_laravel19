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



Route::get('/profile',function(){
	return view('hw2.profile',[
		'name' =>'Đoàn Tiến Đạt',
		'year' => 1998,
		'schools' => 'Đại học kinh doanh và công nghệ Hà Nội',
		'address' => 'Nam Giang , Nam Trực , Nam Định',
		'introduce_yourself'=> '<b>đây là giới thiệu bản thân</b>',
		'target' => 'trở thành lập trình viên về web'
	]);
});

Route::get('/list',function(){
	return view('hw2.list',[
		'list' => [
			[
				'name' => 'học view trong laravel',
				'status' => 0
			],

			[
				'name' =>'hoc route trong laravel',
				'status' => 1
			],

			[
				'name' => 'làm bài tập view trong laravel',
				'status' => -1

			],

			[
				'name' =>'làm bài tập route trong laravel',
				'status' => 2
			],

			[
				'name' =>'làm bài tập view trong laravel',
				'status' => 1
			],

			[
				'name' =>'làm bài tập route trong laravel 2',
				'status' => -1
			],

			[
				'name' =>'test',
				'status' => 1
			],


		],
	]);

});


Route::get('/home',function(){
		return view('hw2.home');		
});




Route::group([
	'namespace' => 'Fontend',
	'prefix' =>'/Task',
	'as'=>'Task.'

],function(){
	// Route::get('/index','TaskController@index');
	// Route::get('/create','TaskController@create')->name('create');
	// Route::post('/store','TaskController@store')->name('store');
	// Route::get('/show/{id?}','TaskController@show');
	// Route::get('/edit/{id?}','TaskController@edit');
	// Route::post('/update/{id?}','TaskController@update');
	// Route::delete('/destroy/{Task}','TaskController@destroy')->name('destroy');

	Route::get('/complete/{id}','TaskController@complete')->name('complete');
	Route::get('/recomplete/{id}','TaskController@reComplete')->name('reComplete');

});
Route::resource('/Task','Fontend\TaskController');

