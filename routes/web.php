<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CustomerController::class, 'customers'])->name('home');

Route::prefix('customers')->group(function () {
    Route::get('/info/{customerId}', [CustomerController::class, 'customer'])->name('customers.info');

    Route::get('/add', [CustomerController::class, 'addCustomer'])->name('customers.add');
    Route::post('/add', [CustomerController::class, 'addCustomerPost'])->name('customers.add.post');

    Route::get('/update/{customerId}', [CustomerController::class, 'updateCustomer'])->name('customers.update');
    Route::post('/update/{customerId}', [CustomerController::class, 'updateCustomerPost'])->name('customers.update.post');

    Route::delete('/delete/{customerId}', [CustomerController::class, 'deleteCustomer'])->name('customers.delete');
});

Route::prefix('orders')->group(function () {
    Route::get('/', [OrderController::class, 'orders'])->name('orders.index');
    Route::get('/info/{orderId}', [OrderController::class, 'order'])->name('orders.order');

    Route::get('/add', [OrderController::class, 'addOrder'])->name('orders.add');
    Route::post('/add', [OrderController::class, 'addOrderPost'])->name('orders.add.post');

    Route::get('/update/{orderId}', [OrderController::class, 'updateOrder'])->name('orders.update');
    Route::post('/update/{orderId}', [OrderController::class, 'updateOrderPost'])->name('orders.update.post');

    Route::delete('/delete/{orderId}', [OrderController::class, 'deleteOrder'])->name('orders.delete');
});
