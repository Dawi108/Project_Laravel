<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\StudentController;
use App\Http\Controllers\Auth\EducationController;
use App\Http\Controllers\Auth\FacultyController;
use App\Http\Controllers\Auth\PublicationController;
use App\Http\Controllers\Auth\BookController;
use App\Http\Controllers\Auth\FQuestionController;
use App\Http\Controllers\Auth\AdministratorController;
use App\Http\Controllers\Auth\DeoController;

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

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');


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
    return view('auth.education');
})->name('education');

Route::get('/education/create', [EducationController::class, 'create'])->name('education.create');
Route::post('/education/store', [EducationController::class, 'store'])->name('education.store');

Route::get('/faculty', function () {
    return view('auth.faculty');
})->name('faculty');

Route::get('faculty/create', [FacultyController::class, 'create'])->name('faculty.create');
Route::post('faculty/store', [FacultyController::class, 'store'])->name('faculty.store');

Route::get('/fquestion', function () {
    return view('auth.fquestion');
})->name('fquestion');
Route::get('fquestion/create', [FQuestionController::class, 'create'])->name('fquestion.create');
Route::post('/fquestion/store', [FQuestionController::class, 'store'])->name('fquestion.store');

Route::middleware(['auth'])->group(function () {
Route::get('/students', [StudentController::class, 'index'])->name('students.index');
});
Route::patch('/students/{id}/approve', [StudentController::class, 'approve'])->name('students.approve');


Route::get('/book', function () {
    return view('auth.book');
})->name('book');

Route::get('/books/create', [BookController::class, 'create'])->name('books.create');
Route::post('/books/store', [BookController::class, 'store'])->name('books.store');


Route::get('/publication', function () {
    return view('auth.publication');
})->name('publication');
Route::get('/publications/create', [PublicationController::class, 'create'])->name('publications.create');
Route::post('/publications/store', [PublicationController::class, 'store'])->name('publications.store');


Route::get('/sprofile/{rollno}', [StudentController::class, 'show'])->name('sprofile.show');

// Add a route in your routes file
Route::get('/questions/{id}/download', [FQuestionController::class, 'download'])->name('questions.download');


Route::get('/administrator', function () {
    return view('auth.administrator');
})->name('administrator');
Route::get('/administrator/create', [AdministratorController::class, 'create'])->name('administrator.create');
Route::post('/administrator/store', [AdministratorController::class, 'store'])->name('administrator.store');


Route::get('/deo', function () {
    return view('auth.deo');
})->name('deo');
Route::get('/deo/create', [DeoController::class, 'create'])->name('deo.create');
Route::post('/deo/store', [DeoController::class, 'store'])->name('deo.store');
