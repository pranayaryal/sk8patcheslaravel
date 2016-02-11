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


Route::post('/items', function (Request $request)
{
    dd($request->all());
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
    Route::get('charging' , function ()
    {
        return view('payment');
    });


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

    Route::auth();

    Route::post('/', function (Request $request) {

//    $result = Session::get('user.buttonid');
        $req = $request['hosted_button_id'];



        $request->session()->set('buttonid', $req);
        $request->session()->set('user', Auth::user());

        dd($request->session());

    });



//    Route::controllers([
//
//        'auth' => 'Auth\AuthController',
//        'password' => 'Auth\PasswordController'
//
//    ]);

//    Route::auth();

    Route::get('/addProduct/{productId}', 'CartController@addItem');
    Route::get('/removeItem/{productId}', 'CartController@removeItem');
    Route::get('/cart', 'CartController@showCart');



});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});
