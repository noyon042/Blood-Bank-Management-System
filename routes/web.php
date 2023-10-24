<?php

use App\Http\Controllers\BloodGroup;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\DataTable;
use App\Http\Controllers\ListTable;
use App\Http\Controllers\Recepient;
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

Route::get('/',[Dashboard::class,'dashboard']);
Route::get('/donorlist/listtable',[ListTable::class,'listtable'])->name('donorlist.listtable');
Route::get('/bloodgroup/blood',[BloodGroup::class,'blood']);
Route::get('/recepient/recepientform',[Recepient::class,'form']);
Route::get('/recepient/recepientdatatable',[DataTable::class,'data']);
Route::get('/donorlist/form',[ListTable::class,'createForm']);
Route::post('/donorlist/store',[ListTable::class,'store'])->name('donorlist.store');
Route::get('/recepient/create',[DataTable::class,'createForm'])->name('recepient.create');
Route::post('/recepient/store',[DataTable::class,'store'])->name('recepient.store');

