<?php

use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\BloodGroup;
use App\Http\Controllers\Backend\Dashboard;
use App\Http\Controllers\Backend\DataTable;
use App\Http\Controllers\Backend\HospitalInfo;
use App\Http\Controllers\Backend\HospitalList;
use App\Http\Controllers\Backend\ListTable;
use App\Http\Controllers\Backend\Recepient;
use App\Http\Controllers\Backend\RequestReceived;
use App\Http\Controllers\FrontendHomeController;
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



 Route::get('/',[FrontendHomeController::class,'home'])->name('home');








Route::group(['prefix'=>'admin'],function(){


Route::get('/login',[UserController::class,'loginForm'])->name('admin.login');
Route::post('/login-form-post',[UserController::class,'loginPost'])->name('admin.login.post');


Route::group(['middleware'=>'auth'],function(){

    Route::get('/logout',[UserController::class,'logout'])->name('admin.logout');

    Route::get('/users',[UserController::class,'list'])->name('users.list');
    Route::get('/users/create',[UserController::class,'createForm'])->name('users.create');
    Route::post('/users/store',[UserController::class,'store'])->name('users.store');

Route::get('/',[Dashboard::class,'dashboard'])->name('dashboard');
Route::get('/donorlist/listtable',[ListTable::class,'listtable'])->name('donorlist.listtable');

Route::get('/bloodgroup/blood',[BloodGroup::class]);
Route::get('/bloodgroup/addblood',[BloodGroup::class,'addblood'])->name('addblood');
Route::get('/bloodgroup/manageblood',[BloodGroup::class,'manageBlood'])->name('bloodgroup.manageblood');
Route::get('/manageblood/create',[BloodGroup::class,'createForm'])->name('manageblood.create');
Route::post('/manageblood/store',[BloodGroup::class,'store'])->name('manageblood.store');

Route::get('/request/receivedform',[RequestReceived::class,'requestReceived'])->name('request.receivedform');
Route::get('/request/form',[RequestReceived::class,'form'])->name('request.form');
Route::post('/request/store',[RequestReceived::class,'store'])->name('request.store');

Route::get('/recepient/recepientform',[Recepient::class,'form']);
Route::get('/recepient/recepientdatatable',[DataTable::class,'data'])->name('recepient.recepientdatatable');

Route::get('/donorlist/form',[ListTable::class,'createForm'])->name('donorlist.form');
Route::post('/donorlist/store',[ListTable::class,'store'])->name('donorlist.store');

Route::get('/recepient/create',[DataTable::class,'createForm'])->name('recepient.create');
Route::post('/recepient/store',[DataTable::class,'store'])->name('recepient.store');

// Route::get('/hospital',[HospitalList::class,'hospital'])->name('hospital');
// Route::get('/hospital/form',[HospitalList::class,'createForm'])->name('hospital.form');
// Route::get('/hospital/store',[HospitalList::class,'store'])->name('hospital.store');
Route::get('/hospital',[HospitalInfo::class,'hospital'])->name('hospital');
Route::get('/hospital/form',[HospitalInfo::class,'createForm'])->name('hospital.form');
Route::post('/hospital/store',[HospitalInfo::class,'store'])->name('hospital.store');
});
});
