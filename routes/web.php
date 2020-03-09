<?php

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
Route::get('/login', function () {
    return view('views.auth.login');
});

Route::get("demo","MyController@demo");
Route::get("demoView","MyController@demoView");
Route::post('signin','MyController@signin')->name('signin');
Route::get('/test', function (){
//    $category = DB::table('category')
//        ->join('typenews', 'category.id_cg', '=', 'typenews.id_cg')
//        ->get();
//
//   foreach ($category as $value){
//       echo $value->name;
//       echo $value->unsigned_name;
//    }
    $category = \App\Category::where('id_cg',1)->get();
    foreach ($category as $value){
        echo $value->name;
    }
});

Route::get('/hello', function () {
    return view('category.add_category');
});

Route::get('/hi', function () {
    return view('category.edit_category');
});
Route::group(['prefix'=> 'admin'],function (){
    Route::group(['prefix'=> 'category'],function (){
        Route::get('edit/{id_cg}','CategoryController@getEdit');
        Route::post('edit/{id_cg}','CategoryController@postEdit');
        Route::get('add','CategoryController@getAdd');
        Route::get('list','CategoryController@getList');
        Route::post('add','CategoryController@postAdd');
        Route::get('delete/{id_cg}','CategoryController@Delete');

    });

    Route::group(['prefix'=> 'typenews'],function (){
        Route::get('list','TypeNewsController@index');
        Route::get('edit/{id_tn}','TypeNewsController@edit');
        Route::post('edit/{id_tn}','TypeNewsController@update');
        Route::get('add','TypeNewsController@create');
        Route::post('add','TypeNewsController@store');
        Route::get('delete/{id_tn}','TypeNewsController@destroy');

    });

    Route::group(['prefix'=> 'news'],function (){
        Route::get('list','NewsController@index');
        Route::get('edit/{id_news}','NewsController@edit');
        Route::post('edit/{id_news}','NewsController@update');
        Route::get('add','NewsController@create');
        Route::post('add','NewsController@store');
        Route::get('delete/{id_news}','NewsController@destroy');

    });

    Route::group(['prefix'=> 'ajax'],function (){
        Route::get('typenews/{id_cg}','AjaxController@getTypeNews');

    });

});


Route::get('demo','MyController@demo')->name('demo');
Route::get('/contact','MyController@contact')->name('contact');
Route::get('/about','MyController@about')->name('about');
Route::get('/single-post','MyController@singlePost')->name('single-post');
Route::get('/archive-blog','MyController@archiveBlog')->name('archive-blog');
Route::get('/typography','MyController@typography')->name('typography');

Route::get('/','MyController@index');
Route::get('/search','MyController@search');
Auth::routes();

Route::get('change-password', 'ChangePasswordController@index');
Route::post('change-password', 'ChangePasswordController@store')->name('change.password');

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
