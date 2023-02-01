<?php

use App\Http\Controllers\InvoicesController;
use Illuminate\Support\Facades\Route;

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

Route::group(['middleware' => ['auth','verified']],function(){
    Route::resource('products',\App\Http\Controllers\ProductsController::class);
    Route::resource('invoices',\App\Http\Controllers\InvoicesController::class);
    Route::resource('sections',\App\Http\Controllers\SectionsController::class);
    Route::resource('Archive',\App\Http\Controllers\InvoicesArchiveController::class);
    Route::POST('/Status_Update/{id}',[\App\Http\Controllers\InvoicesController::class,'Status_Update'])->name('Status_Update');
    Route::get('/Status_show/{id}',[\App\Http\Controllers\InvoicesController::class,'show'])->name('Status_show');
    Route::get('Invoice_Paid',[\App\Http\Controllers\InvoicesController::class,'Invoice_Paid']);
    Route::get('Invoice_UnPaid',[\App\Http\Controllers\InvoicesController::class,'Invoice_unPaid']);
    Route::get('Invoice_Partial',[\App\Http\Controllers\InvoicesController::class,'Invoice_Partial']);
    Route::get('Invoice_Archive',[\App\Http\Controllers\InvoicesArchiveController::class,'index']);
    Route::get('Print_invoice/{id}',[\App\Http\Controllers\InvoicesController::class,'printInvoice']);
    Route::get('/section/{id}', [\App\Http\Controllers\InvoicesController::class , 'getproducts']);
    Route::get('/InvoicesDetails/{id}', [\App\Http\Controllers\InvoiceDetailsController::class , 'edit']);
    Route::get('View_file/{invoice_number}/{file_name}', [\App\Http\Controllers\InvoiceDetailsController::class , 'open_file']);
    Route::get('export/invoices/', [InvoicesController::class, 'export']);
    Route::get('reports');
    Route::get('invoices_report',[\App\Http\Controllers\invoices_report::class,'index']);
    Route::post('Search_invoices',[\App\Http\Controllers\invoices_report::class,'search']);
    Route::get('customers_report',[\App\Http\Controllers\customers_report::class,'index']);
    Route::post('Search_customers',[\App\Http\Controllers\customers_report::class,'search']);

});
Route::get('/',[\App\Http\Controllers\HomeController::class,'index'])->middleware(['auth', 'verified'])->name('index');
Route::get('/index',[\App\Http\Controllers\HomeController::class,'index'])->middleware(['auth', 'verified'])->name('index');

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles',\App\Http\Controllers\RoleController::class);
    Route::resource('users',\App\Http\Controllers\UserController::class);
});

require __DIR__.'/auth.php';

