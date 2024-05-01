<?php

use App\Http\Controllers\ContactanosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;

Route::get('/', HomeController::class)->name('home');

//Forma de definir las rutas en primera instancia
// Route::controller(CursoController::class)->group(function(){
//     Route::get('/cursos','index')->name('cursos.index');
//     Route::get('cursos/create','create')->name('cursos.create');
//     Route::post('cursos','store')->name('cursos.store');
//     Route::get('cursos/{curso}','show')->name('cursos.show');
//     // Route::get('cursos/{curso}/{categoria?}','show2');
//     Route::get('cursos/{curso}/edit','edit')->name('cursos.edit');
//     //laravel reco el metodo put para actualizar un registro
//     Route::put('cursos/{curso}','update')->name('cursos.update');
//     // laravel recomienda usar delete para borrar registros de la db
//     Route::delete('cursos/{curso}','destroy')->name('cursos.destroy');
// });

//Segunda mejor forma

//se puede hacer esto para cambiar el nombre principal de la ruta
// Route::resource('asignaturas', CursoController::class)->parameters(['asignaturas'=>'curso'])->names('cursos');
Route::resource('cursos', CursoController::class);

Route::view('nosotros','nosotros')->name('nosotros');

// Route::get('contactanos', function(){
//     Mail::to('victor@codersfree.com')->send(new ContactanosMailable);

//     return "Mensaje enviado";
// })->name('contactanos');


// Route::get('cursos/{curso}/{categoria?}', function ($curso,$categoria = null) {

//     if($categoria != null){
//         return "Bienvenido al curso $curso, de la categoria: $categoria";
//     } else {
//         return "Bienvenido al curso de: $curso";
//     }
    
// });

//Rutas del contacto,envio de correos
Route::get('contactanos',[ContactanosController::class, 'index'])->name('contactanos.index');

Route::post('contactanos',[ContactanosController::class, 'store'])->name('contactanos.store');


