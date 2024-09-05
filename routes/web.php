<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
        Route::post('/auth',[UserController::class,'auth']);
        Route::post('/register',[UserController::class,'createuser']);
        Route::group(['middleware' => ['role:admin']], function() {
            Route::get('/logout',[UserController::class,'logout']);
            // Route::get('/admin', [UserController::class, 'admin']);
            Route::get('/user',[UserController::class,'admin']);
            Route::get('/user/delete/{id}',[UserController::class,'delete']);
            Route::get('/user/viewedit/{id}',[UserController::class,'viewedit']);
            Route::post('/user/edit/{id}',[UserController::class,'edit']);
           
        });
        Route::group(['middleware' => ['role:pelanggan']], function() {
            Route::get('/index',[UserController::class,'index']);
            Route::get('/logout',[UserController::class,'logout']);
            Route::get('/user/viewcreate',[UserController::class,'viewcreate']);
            Route::post('user/create',[UserController::class,'usercreate']);
            Route::post('/user/viewcreate',[UserController::class,'BuyNow']);
        });



        // Route::middleware(['auth'])->group(function () {
        // });
        
        // Route::middleware('statuslogin')->group(function(){

            // Route::middleware(['\App\Http\Middleware\adminauth::class,'])->group(function(){
                // Route::middleware(['auth', 'admin'])->group(function () {
                //     Route::get('/admin', [UserController::class, 'admin']);
                // });
                
            // });
// });




