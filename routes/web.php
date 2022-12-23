<?php

use App\Http\Controllers\CreateController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


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

// books
Route::get("/detail/{id}", [HomeController::class, "detail"])->name("detail");
Route::any("/", [HomeController::class, "index"])->name("home");
Route::get("/authors/add", [HomeController::class, "createBook"])->name("add");
Route::get("/delete/{id}", [HomeController::class, "destroy"])->name("destroy");

Route::post("/updateAuthorCategori/{id}", [CreateController::class, "updateAuCate"])->name("updateAuCate");
Route::post("/updateBook/{id}", [CreateController::class, "updateBook"])->name("updateBook");
Route::post("/addBook", [CreateController::class, "store"])->name("create");
Route::post("/addAuthorCategori", [CreateController::class, "authorCategori"])->name("adds");
Route::get("/updateAuthorCategori/{id}", [HomeController::class, "update"])->name("update");
