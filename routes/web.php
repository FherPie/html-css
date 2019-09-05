<?php

/*
 * |--------------------------------------------------------------------------
 * | Web Routes
 * |--------------------------------------------------------------------------
 * |
 * | Here is where you can register web routes for your application. These
 * | routes are loaded by the RouteServiceProvider within a group which
 * | contains the "web" middleware group. Now create something great!
 * |
 */
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;

Route::get('/home', [
    'uses' => 'ProductoController@getIndex',
    'as' => 'producto.index'
]);

Route::get('/vistaProducto', [
    'uses' => 'ProductoController@getProductoVista',
    'as' => 'producto.vista'
]);

Route::get('/', [
    'uses' => 'ProductoController@getIndex',
    'as' => 'producto.index'
]);

Route::get('/add-to-cart/{id}', [
    'uses' => 'ProductoController@getAddToCart',
    'as' => 'producto.addToCart'
]);

Route::get('/add-to-cart-checkout/{id}', [
    'uses' => 'ProductoController@getAddToCartCheckOut',
    'as' => 'producto.addToCartCheckOut'
]);



Route::get('/reduce-to-cart-checkout/{id}', [
    'uses' => 'ProductoController@getReduceCartCheckOut',
    'as' => 'producto.reduceToCartCheckOut'
]);

Route::get('/remove-to-cart-checkout/{id}', [
    'uses' => 'ProductoController@removeItem',
    'as' => 'producto.removeItem'
]);

Route::get('/shoping-cart', [
    'uses' => 'ProductoController@getCart',
    'as' => 'producto.shopingCart'
]);


Route::get('/checkout', [
    'uses' => 'ProductoController@getCheckout',
    'as' => 'checkout',
    'middleware'=>'auth'
]);

Route::post('/checkout', [
    'uses' => 'CheckOutController@postCheckout',
    'as' => 'checkout',
    'middleware'=>'auth'
]);

Route::group(['prefix'=> 'user'], function () {
    
    
Route::group(['middleware'=> 'guest'], function () {
    

    Route::get('/signup', [
        'uses' => 'Auth\RegisterController@getSignup',
        'as' => 'users.signup'
    ]);
    
    Route::post('/signup', [
        'uses' => 'Auth\RegisterController@postSignup',
        'as' => 'users.signup'
    ]);
    
    Route::get('/signin', [
        'uses' => 'Auth\LoginController@getSignin',
        'as' => 'users.signin'
    ]);
    
    Route::post('/signin', [
        'uses' => 'Auth\LoginController@postSignin',
        'as' => 'users.signin'
    ]);

});

Route::group(['middleware'=> 'auth'], function () {
        
        Route::get('/profile', [
            'uses' => 'Auth\LoginController@getProfile',
            'as' => 'users.profile'
        ]);
        
        Route::post('/profile', [
            'uses' => 'Auth\LoginController@postProfile',
            'as' => 'users.profile'
        ]);
        
        Route::get('/logout', [
            'uses' => 'Auth\LoginController@getLogout',
            'as' => 'users.logout'
        ]);
    });
        
});



//     Route::get('he/{filename}', function ($filename="collar.jpg")
//     {
//         error_log("LLEga ");
//         $path = storage_path('app/public/' . $filename);
//         error_log("LLEga ".$path);
//         if (!File::exists($path)) {
//             error_log("LLEga a error");
//             abort(404);
//         }
        
//         $file = File::get($path);
//         $type = File::mimeType($path);
        
//         $response = Response::make($file, 200);
//         $response->header("Content-Type", $type);
        
//         return $response;
//     });


