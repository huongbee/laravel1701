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

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('home',function(){
//     echo "Hello Laravel";
// });


// Route::group(['prefix'=>'admin'],function(){

//     //    admin/home
//     Route::get('home',function(){
//         echo "Hello Laravel 2";
//     });

//     //    admin/detail
//     Route::get('detail',function(){
//         echo "Hello Laravel 2";
//     });
    
// });

// Route::get('detail/{id}-{alias}/{page}',function($ms,$alias,$page){
//     //echo "1235";
//     //echo $_GET['id'];
//     echo $ms;
//     echo $alias;
// });

// Route::get('type/{page?}',function($page=1){
//     echo $page;
// });//->where('page','[0-9]+');

// // php artisan make:controller PageController
// Route::get('demo-ctrl','PageController@getHomePage');


// Route::get('demo-ctrl2/{product}','PageController@getHomePage3');

Route::get('home','PageController@callView');

Route::get('type', 'PageController@getTypePage' );
Route::get('detail', 'PageController@getDetailPage' );


Route::get('contact','PageController@getContact')->name('get-contact');
Route::post('contact','PageController@postContact')->name('post-contact');
