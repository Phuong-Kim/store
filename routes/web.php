<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\staffController;
use App\Http\Controllers\usersController;
use App\Http\Controllers\goodsController;

//phần này của nhân viên (staff)
Route::get('/staff', [staffController::class, 'index'])->name('staff.index');
Route::get('/staff/insert', [staffController::class, 'insert'])->name('staff.insert');
Route::post('/staff/save', [staffController::class, 'save'])->name('staff.save');
Route::delete('/staff/{id}', [staffcontroller::class, 'destroy'])->name('staff.destroy');
//nút edit:  Hiển thị form chỉnh sửa
Route::get('/staff/{id}/edit', [staffcontroller::class, 'edit'])->name('staff.edit');
//nút edit: Cập nhật dữ liệu sau khi chỉnh sửa
Route::put('/staff/{id}', [staffcontroller::class, 'update'])->name('staff.update');

//phần này của người dùng (users)
Route::get('/users', [usersController::class, 'index'])->name('users.index');
Route::get('/users/insert', [usersController::class, 'insert'])->name('users.insert');
Route::post('/users/save', [usersController::class, 'save'])->name('users.save');

//phần này của hàng hóa (goods)
Route::get('/goods', [goodsController::class, 'index'])->name('goods.index');
Route::get('/goods/insert', [goodsController::class, 'insert'])->name('goods.insert');
Route::post('/goods/save', [goodsController::class, 'save'])->name('goods.save');
Route::delete('/goods/{id}', [goodscontroller::class, 'destroy'])->name('goods.destroy');
//nút edit:  Hiển thị form chỉnh sửa
Route::get('/goods/{id}/edit', [goodscontroller::class, 'edit'])->name('goods.edit');
//nút edit: Cập nhật dữ liệu sau khi chỉnh sửa
Route::put('/goods/{id}', [goodscontroller::class, 'update'])->name('goods.update');
