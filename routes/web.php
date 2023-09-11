<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ProfileController;
use App\Models\Patient;
use Illuminate\Support\Facades\Auth;
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
Route::middleware('auth','Patient')->group(function () {

    Route::resource('patients', PatientController::class)->only('create','delete','edit','store');
    // Route::put('/patients/{id}',[]
    // })
    // Route::put('/patients/{id}',[ PatientController::class ,'update'])->name('patient.update');

    // Route::get('/test', function () {
    //     return view('patient.index');});

});

Route::get('/patients',[PatientController::class,'index'])->middleware('auth')->name('patients.index');
Route::get('/patients/{id}',[PatientController::class,'show'])->middleware('auth')->name('patients.show');
Route::get('/consult-patients/{id}',[DoctorController::class,'showPaient'])->middleware('auth')->name('doctors.consult');




Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/ourdoctors', function () {
    return view('ourdoctors');
});
Route::get('/dashboard', [DashboardController::class,'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';



Route::post('/comments',[CommentController::class,'store'])->name('comments.store');

// Route::get('/test2', function () {
//     return view('comments')->name('comments');
// });

Route::middleware('auth','Doctor')->group(function () {
// Route::get('/test3', function () {
//     return view('doctor.index');});
Route::resource('doctors',DoctorController::class);

});

//admin route
Route::middleware('auth','Admin')->group(function () {
Route::get('/doctoradd',[ AdminController::class ,'addDoctor'])->name('create.doctor');
Route::post('/doctoradd',[ AdminController::class ,'storeDoctor'])->name('store.doctor');
Route::get('/test1', function () {return view('admin.index');});
});

