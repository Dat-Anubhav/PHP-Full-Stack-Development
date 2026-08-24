<?php
use App\Http\Controllers\ClaimController;
use Illuminate\Support\Facades\Route;
use App\Services\GreetingService;


Route::get('/', function () {
    return view('welcome');
}); 

Route::get('/first', function (){
    return view('first');
});

//Routing with controller
Route::get('/con', [ClaimController::class, 'index']);

Route::any('/users', function () {
return 'User Created Yippeee';
});

//Route Parameters

Route::get('/users/{id}', function (string $id){
    return "The user is is $id";
});

//Route with multiple parameters
Route::get('/users/{id}/comments/{name}', function (string $id, string $name){
    return "The user is is $id and the comment is $name";
});

//Route with Dependency Injection
Route::get('/dep/{name}', function (string $name, GreetingService $service, ){
    return $service->greet($name);
});