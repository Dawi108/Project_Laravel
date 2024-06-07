<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\StudentController;
use App\Http\Controllers\Auth\EducationController;
use App\Http\Controllers\Auth\FacultyController;
use App\Http\Controllers\Auth\PublicationController;
use App\Http\Controllers\Auth\BookController;



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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::get('/student', function () {
    return view('auth.student');
})->name('student');

Route::get('/student/create', [StudentController::class, 'create'])->name('student.create');
Route::post('/student/store', [StudentController::class, 'store'])->name('student.store');


Route::get('/education', function () {
    return view('auth.education-qualification');
})->name('education');

Route::get('/education/create', [StudentController::class, 'create'])->name('education.create');
Route::post('/education/store', [EducationController::class, 'store'])->name('education.store');


Route::get('/faculty', function () {
    return view('auth.faculty');
})->name('faculty');

Route::get('faculty/create', [FacultyController::class, 'create'])->name('faculty.create');
Route::post('faculty/store', [FacultyController::class, 'store'])->name('faculty.store');


Route::get('/books', function () {
    return view('auth.books');
})->name('books');

Route::get('/books/create', [BookController::class, 'create'])->name('books.create');
Route::post('/books/store', [BookController::class, 'store'])->name('books.store');


Route::get('/publications', function () {
    return view('auth.publications');
})->name('publications');

Route::get('/publications/create', [PublicationController::class, 'create'])->name('publications.create');
Route::post('/publications/store', [PublicationController::class, 'store'])->name('publications.store');





