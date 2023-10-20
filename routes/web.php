<?php

use App\Http\Controllers\dashboardController;
use App\Http\Controllers\projectController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
* route defaultnya di ubah ke /admin aja
Route::get('/', function(){
    return redirect('admin');
});
*/
Route::redirect('/', '/dashboard');

Route::get('/test', function () {
    $data = 'Zhafi rabbani Amalia';

    // cara ke-2 ngirim data bareng view
    return view('test')
    ->with('nama', $data)
    ->with('alamat', 'Depok');
});

// Route::get('/admin', function(){
//     return view('admin/dashboard'); // atau bisa view('admin.admin)
// });

Route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard');
// Middlewarenya di bkin group
Route::middleware('auth')->group(function(){
        Route::get('project', [projectController::class, 'index'])->name('project.index');
        Route::get('project/create', [projectController::class, 'create'])->name('project.create'); 
        Route::post('project/create', [projectController::class, 'store'])->name('project.store'); // jadi nnti manggil di laen gk perlu {{url ('...')}} tapi langsung route('project.store')
        Route::get('project/{id}', [projectController::class, 'show'])->name('project.show'); // disini klo tulisannya id maka di controllernya juga $id di parameter methodnya
        Route::get('project/{id}/edit', [projectController::class, 'edit'])->name('project.edit');
        Route::put('project/{id}', [projectController::class, 'update'])->name('project.update');
        Route::delete('project/{id}', [projectController::class, 'destroy'])->name('project.destroy');
    
});

Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');