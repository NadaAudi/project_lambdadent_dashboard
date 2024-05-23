<?php

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
// Route::get('/', function () {
//     return view('dashboard');
// });

// Route::get('/new', function () {
//     return view('new');
// });

// Route::get('/', function () {
//     return view('main-lab');
// });
// Route::get('/d', function () {
//     return view('dashboard');
// });

// Route::get('/', function () {
//     return view('admin.Cases.NewCases');
// });
Route::get('/', function () {
    return view('main-lab');
});
Route::get('/Cases', function () {
    return view('Cases.index');
})->name('Cases');

// add
Route::get('/Cases/add', function () {
    return view('Cases.add');
})->name('Cases-add');

// edit
Route::get('/Cases/edit', function () {
    return view('Cases.edit');
})->name('Cases-edit');

// delete
Route::get('/exit-permissions/delete', function () {
    return view('Cases.index');
})->name('Cases-delete');

// Route::get('/', function () {
//     return view('admin/Cases/case-details-status');
// });
// Route::get('/adverts', function () {
//     return view('adverts.index');
// })->name('adverts');