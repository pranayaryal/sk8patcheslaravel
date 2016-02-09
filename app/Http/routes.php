<?php

use Illuminate\Http\Request;


/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
//    return view('pages.home');

    return view('helo');

});

Route::post('/', function (Request $request) {

    $result = Session::get('user.buttonid');
    $req = $request['hosted_button_id'];

    Session::put('user.buttonid', [$req, $result]);


    die;

});






Route::get('catalog', function () {
    return view('pages.catalog');
});

Route::get('store', function () {
    return view('pages.store');
});




//Route::post('charging' , 'StripeChargesController@charge');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //

    Route::post('charging' , 'StripeChargesController@charge');

    Route::get('contact', function () {

        return view('pages.contact');
    });

    Route::post('contact', 'PatchesController@contact');

    Route::post('paypal', 'PatchesController@paypal');

    Route::get('products', 'PatchesController@products');

    Route::get('/', function () {
//    return view('pages.home');
        return view('helo');




    });

    Route::controllers([

        'auth' => 'Auth\AuthController',
        'password' => 'Auth\PasswordController'

    ]);

//    Route::get('login', 'AuthController@getLogin');
//
//    Route::post('login', 'AuthController@postLogin');
//
//    Route::get('register', 'AuthController@getRegister');
//
//    Route::post('register', 'AuthController@postRegister');
//
//    Route::controllers(['password' => 'Auth\PasswordController']);

//    Route::post('password/email', 'PasswordController@postEmail');

});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});
