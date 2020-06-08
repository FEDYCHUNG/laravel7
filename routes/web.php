<?php

use Illuminate\Support\Facades\Http;
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

// Route::view('/example', 'example');

//=========================================== blade ================================
Route::get('/example', function () {
    return view('example', [
        'info' => 'Very cool information',
    ]);
});
//=========================================== end blade ============================

//=========================================== http =================================
Route::get('/example_http', function () {
    //===================================== get ========================================
    $response = Http::get("https://jsonplaceholder.typicode.com/todos/1");

    // dd($response);
    // dd($response->body());
    dd($response->json());
    // dd($response->headers());
    // dd($response->header('Date'));
    // dd($response->status());
    // dd($response->effectiveUri());
    // dd($response->ok()); // dd($response->status() == 200);
    // dd($response->cookies());
    //===================================== end get ====================================

    //===================================== post =======================================
    // $response2 = Http::post("https://jsonplaceholder.typicode.com/postuknownurl", [
    //     'userId' => 1,
    // ]);

    // // post data form
    // $response2 = Http::asForm()->post("https://jsonplaceholder.typicode.com/postuknownurl", [
    //     'userId' => 1,
    // ]);

    // //post file form
    // $response2 = Http::attach('image-upload', file_get_contents('photo.jpg'), 'new-name.jpg')->post("https://jsonplaceholder.typicode.com/postuknownurl", [
    //     'userId' => 1,
    // ]);

    // //post with header
    // $response2 = Http::withHeaders([
    //     'X-CODERS-TAPE' => 'COOLEST CHANNEL!'
    // ])->withBasicAuth('admin@admin.com', '123456')->post("https://jsonplaceholder.typicode.com/postuknownurl", [
    //     'userId' => 1,
    // ]);

    // //post with token
    // $response2 = Http::withHeaders([
    //     'X-CODERS-TAPE' => 'COOLEST CHANNEL!'
    // ])->withToken('123')->post("https://jsonplaceholder.typicode.com/postuknownurl", [
    //     'userId' => 1,
    // ]);

    //how many try access url
    // $response2 = Http::retry(2, 500)->post("https://jsonplaceholder.typicode.com/postuknownurl", [
    //     'userId' => 1,
    // ]);


    // dd($response2->serverError()); //return false
    // dd($response2->throw());

    // $response2 = Http::post("https://jsonplaceholder.typicode.com/posts", [
    //     'userId' => 1,
    // ]);
    // dd($response2->json());
    // dd($response2->offsetGet('userId')); //return userId
    // dd($response2->offsetExists('userId')); //check if userId exists
    //===================================== end post ====================================
});
//=========================================== end http =============================


Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');