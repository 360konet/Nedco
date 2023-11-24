<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\IssueController;
use App\Http\Controllers\ActivityLogController;
use App\Http\Controllers\TechnicianController;

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

//srgHcqt0eFM1_TnKnciFUxSyG8KYWNcOCelluASP(twilo recovery code)
//+16787103347 (twilo number)

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);
// Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
// Route::get('email/verify/{id}/{hash}', 'Auth\VerificationController@verify')->name('verification.verify');
// Route::post('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');

Route::middleware(['auth', 'verified'])->group(function () {
Route::middleware('checkUserRole')->group(function(){

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//complains
Route::get('/newcomplains', [HomeController::class, 'newcomplains']);
Route::get('/addcomplain', [HomeController::class, 'addcomplain']);
Route::post('/addnewcomplain', [HomeController::class, 'addnewcomplain']);
Route::get('/edit-status-{id}', [HomeController::class, 'editstatus']);
Route::put('/editcomplain-{id}', [HomeController::class, 'editcomplain']);

Route::get('delete-complain-{id}', [HomeController::class, 'deletecomplain']);

Route::get('/processingcomplains', [HomeController::class, 'processingcomplains']);
Route::get('/fixedcomplains', [HomeController::class, 'fixedcomplains']);
Route::get('/unfixablecomplains', [HomeController::class, 'unfixablecomplains']);


//users
Route::get('/users', [UsersController::class, 'users']);
Route::get('/delete-user-{id}', [UsersController::class, 'deleteuser']);

//Departments
Route::get('/departments', [DepartmentController::class, 'departments']);
Route::get('/adddepartment', [DepartmentController::class, 'adddepartment']);
Route::post('/addnewdepartment', [DepartmentController::class, 'addnewdepartment']);
Route::get('/delete-department/{id}', [DepartmentController::class, 'deletedepartment']);

//Technicians
Route::get('/technicians', [TechnicianController::class, 'technicians']);
Route::get('/addtechnician', [TechnicianController::class, 'addtechnician']);
Route::post('/addnewtechnician', [TechnicianController::class, 'addnewtechnician']);
Route::get('/delete-technician-{id}', [TechnicianController::class, 'deletetechnician']);

});

Route::get('/issue', [IssueController::class, 'issue']);
Route::post('/addnewissue', [IssueController::class, 'addissue']);

Route::post('/perform-xyz-action', 'UsersController@performXYZAction');
});