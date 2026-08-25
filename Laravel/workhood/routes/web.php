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
})->name('anu');// naming the route so that u can use it easily ({{ route('anu', ['id' => 12]) }}) in any code even if the path changes the code doesn't break.


//Route with multiple parameters
Route::get('/users/{id}/comments/{name}', function (string $id, string $name){
    return "The user is is $id and the comment is $name";
});


//Route with Dependency Injection
Route::get('/dep/{name}', function (string $name, GreetingService $service, ){
    return $service->greet($name);
});


//Route with optional parameters
Route::get('/so/{name?}', function (string $name='hagemaru'){
    return "The user name is $name";
});


//redirect to different route
Route::get('/ko/{name}', function (string $name){
    return redirect()->route('anu', ['id'=>123]);
    // return "The user name is $name";
});


// //Group Routing
// //   -first simple routing
// Route::get('/dashboard/post', function (){
//     return "Here is your Dashboard";
// });

// Route::get('/dashboard/pic', function (){
//     return "hERE IS YOUR PIC";
// });

//  --Group by prefix
Route::prefix('dashboard')->group(function(){
    Route::get('/post', function (){
        return "Here is YOUR DASHBOARD";
    });

    Route::get('/pic', function (){
        return "Here IS YOUR PIC";
    });

});



//Middleware grouping Routing

Route::middleware(['auth'])->group(function (){
    Route::get('/po', function (){
        return "Hello brother";
    });

    Route::get('/lo', function (){
        return "Hello brother";
    });
});// will not work because login not defined


//grouping through controller
Route::controller(ClaimController::class)->group(function (){
    Route::get('/in','index');
    Route::get('/sin','sindex');
});

//