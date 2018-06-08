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


Route::get('upload','PageController@getForm')->name('upload');
Route::post('upload','PageController@postForm')->name('upload');
Route::post('upload-multiple','PageController@postUploadMultilpe')->name('upload-multiple');

Route::get('create-table-customers',function(){

    Schema::create('customers',function($t){
        $t->increments('id');  //PK, AI
        $t->string('email',100)->unique();
        $t->string('name',100)->default('Ti');
        $t->date('birthdate');
        $t->timestamps();
    });
    echo "Created!";
});
Route::get('modify-table-customers',function(){

    // Schema::table('customers',function($t){
    //     $t->string('password',100)->change();
    // });

    //Schema::rename('customers', 'khachhang');
    Schema::dropIfExists('khachhang');
    echo "Success!";
});

Route::get('create-table-bills',function(){

    Schema::create('bills',function($t){
        $t->increments('id');  //PK, AI
        $t->integer('id_user')->unsigned(); //
        $t->float('price', 8, 2);
        $t->date('date_order');
        $t->timestamps();

        $t->foreign('id_user')->references('id')->on('users');

        
    });
    echo "Created!";
});