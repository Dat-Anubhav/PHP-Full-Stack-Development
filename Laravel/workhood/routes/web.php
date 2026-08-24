<?php
use App\Http\Controllers\ClaimController;
use Illuminate\Support\Facades\Route;


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



