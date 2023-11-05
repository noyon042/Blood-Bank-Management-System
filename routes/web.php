<?php

use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\BloodGroup;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\DataTable;
use App\Http\Controllers\ListTable;
use App\Http\Controllers\Recepient;
use App\Http\Controllers\RequestReceived;
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

Route::get('/admin/login',[UserController::class,'loginForm'])->name('admin.login');
Route::post('/login-form-post',[UserController::class,'loginPost'])->name('admin.login.post');


Route::group(['middleware'=>'auth'],function(){

    Route::get('/admin/logout',[UserController::class,'logout'])->name('admin.logout');

Route::get('/',[Dashboard::class,'dashboard'])->name('dashboard');
Route::get('/donorlist/listtable',[ListTable::class,'listtable'])->name('donorlist.listtable');

Route::get('/bloodgroup/blood',[BloodGroup::class]);
Route::get('/bloodgroup/addblood',[BloodGroup::class,'addblood']);
Route::get('/bloodgroup/manageblood',[BloodGroup::class,'manageBlood'])->name('bloodgroup.manageblood');
Route::get('/manageblood/create',[BloodGroup::class,'createForm'])->name('manageblood.create');
Route::post('/manageblood/store',[BloodGroup::class,'store'])->name('manageblood.store');

Route::get('/request/receivedform',[RequestReceived::class,'requestReceived']);
Route::get('/request/form',[RequestReceived::class,'form'])->name('request.form');
Route::get('/request/store',[RequestReceived::class,'store'])->name('request.store');

Route::get('/recepient/recepientform',[Recepient::class,'form']);
Route::get('/recepient/recepientdatatable',[DataTable::class,'data'])->name('recepient.recepientdatatable');

Route::get('/donorlist/form',[ListTable::class,'createForm'])->name('donorlist.form');
Route::post('/donorlist/store',[ListTable::class,'store'])->name('donorlist.store');

Route::get('/recepient/create',[DataTable::class,'createForm'])->name('recepient.create');
Route::post('/recepient/store',[DataTable::class,'store'])->name('recepient.store');
});
