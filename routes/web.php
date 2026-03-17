
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

//---------------------1------------------------------//

//1) Route::get() ==> when browser requests a page :

Route::get('me',function () {
    return "<h1>Hello My name is Boshra</h1>";
});

// veiwing page and loading content ===> GET /about


//---------------------2------------------------------//

//2) Route::post(). ==> when date is sent to the server usually from a form

// Route::post('/contact', function () {
//     return "Form submitted";
// });

//<form method="POST" action="/contact">///


Route::post('/submit', function (Request $request) {

    $name = $request->name;
    $city = $request->city;

    return "Hello $name from $city";

})->name('form.submit');

Route::post('/contact',[HomeController::class, 'store'])->name('form.store');


Route::post('/posts', [HomeController::class, 'store'])->name('posts.store');
//----------------------3------------------------------//

//3) Route::put() ==>. used for updating data

Route::put('/user', function () {
    return "User updated";
});


//----------------------4------------------------------//

//4) Route::delete() ==> used for deleting data 

Route::delete('/post', function () {
    return "Post deleted";
});

//----------------------5------------------------------//

//5) Route::any() ==> allows any http method
Route::any('/test', function () {
    return "Any request works";
});

//----------------------6------------------------------//

//6) Route::match() ==> allow specific multiple methods

Route::match(['get','post'], '/login', function () {
    return "Login route";
});

//----------------------7------------------------------//
//7) capture values from the URL

Route::get('/user/{id}', function ($id) {
    return "User ID: " . $id;
});
//Create a route with a Parameter
Route::get('/post/{id}', function ($id) {
    return "Post ID: " . $id;
});

//localhost:8000/user/5

//Multiple Parameters  ==>

Route::get('/user/{name}/{city}', function ($name, $city) {
    return $name . " lives in " . $city;
});

//Optional Parameters. ==>
Route::get('/hello/{name?}', function ($name = "Guest") {
    return "Hello " . $name;
});
//Named Route

Route::get('/routename', function () {
    return "Home Page";
})->name('routename');

//----------------------8------------------------------//

//7) Route==>Controler

// Route::get('/home', [HomeController::class, 'index']);
// /home ==>	URL
// HomeController ==>	Controller
// index ==> Function inside controller

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/post/{id}', [HomeController::class, 'show']);
Route::get('/posts/{id}/edit', [HomeController::class, 'edit'])->name('posts.edit');
Route::put('/posts/{id}', [HomeController::class, 'update'])->name('posts.update');
Route::delete('/posts/{id}', [HomeController::class, 'destroy'])->name('posts.destroy');
//----------------------9------------------------------//

//9) Route → View (Shortcut)

Route::view('/about', 'about');

//URL → about.blade.php



////it is verid silliar to express.js
//Key Differences
// | Laravel            | Node / Express               |
// | ------------------ | ---------------------------- |
// | PHP framework      | JavaScript runtime           |
// | Runs on PHP server | Runs on Node runtime         |
// | MVC built-in       | You build structure yourself |
// | Blade templating   | Many template engines        |
// | Eloquent ORM       | Many database libraries      |
