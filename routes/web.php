<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;

Route::get('/', HomeController::class);

Route::controller(CursoController::class)->group(function(){
    Route::get('/cursos','index')->name('cursos.index');
    Route::get('cursos/create','create')->name('cursos.create');
    Route::post('cursos','store')->name('cursos.store');
    Route::get('cursos/{curso}','show')->name('cursos.show');
    // Route::get('cursos/{curso}/{categoria?}','show2');
    Route::get('cursos/{curso}/edit','edit')->name('cursos.edit');
    Route::put('cursos/{curso}','update')->name('cursos.update');
});



// Route::get('cursos/{curso}/{categoria?}', function ($curso,$categoria = null) {

//     if($categoria != null){
//         return "Bienvenido al curso $curso, de la categoria: $categoria";
//     } else {
//         return "Bienvenido al curso de: $curso";
//     }
    
// });


