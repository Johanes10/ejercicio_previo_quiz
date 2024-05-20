<?php

use App\Http\Controllers\DriverController;
use App\Http\Controllers\DriverTruckController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\TruckController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/packages/listar',[PackageController::class,'index'])->name('package.index');
Route::get('/packages/create',[PackageController::class,'create']);
Route::post('/packages/store',[PackageController::class,'store'])->name('packages.store');
Route::get('/package/{package}',[PackageController::class,'show'])->name('package.show');
Route::put('/package/{package}',[PackageController::class,'update'])->name('package.update');
Route::delete('/package/{package}',[PackageController::class,'destroy'])->name('package.destroy');
Route::get('/package/{package}/editar',[PackageController::class,'edit'])->name('package.edit');

Route::get('/drivers/listar',[DriverController::class,'index'])->name('driver.index');
Route::get('/drivers/create',[DriverController::class,'create']);
Route::post('/drivers/store',[DriverController::class,'store'])->name('drivers.store');
Route::get('/driver/{driver}',[DriverController::class,'show'])->name('driver.show');
Route::put('/driver/{driver}',[DriverController::class,'update'])->name('driver.update');
Route::delete('/driver/{driver}',[DriverController::class,'destroy'])->name('driver.destroy');
Route::get('/driver/{driver}/editar',[DriverController::class,'edit'])->name('driver.edit');

Route::get('/trucks/listar',[TruckController::class,'index'])->name('truck.index');
Route::get('/trucks/create',[TruckController::class,'create']);
Route::post('/trucks/store',[TruckController::class,'store'])->name('trucks.store');
Route::get('/truck/{truck}',[TruckController::class,'show'])->name('truck.show');
Route::put('/truck/{truck}',[TruckController::class,'update'])->name('truck.update');
Route::delete('/truck/{truck}',[TruckController::class,'destroy'])->name('truck.destroy');
Route::get('/truck/{truck}/editar',[TruckController::class,'edit'])->name('truck.edit');


Route::get('/drivers_trucks/listar',[DriverTruckController::class,'index'])->name('driver_truck.index');
Route::get('/drivers_trucks/create',[DriverTruckController::class,'create']);
Route::post('/drivers_trucks/store',[DriverTruckController::class,'store'])->name('drivers_trucks.store');
Route::delete('/driver_truck/{driver_truck}',[DriverTruckController::class,'destroy'])->name('driver_truck.destroy');