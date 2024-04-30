<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{

    use HasFactory;

    //poner cuales campos permitir y cuales no

    // protected $fillable = ['name','descripcion','categoria'];

    //poner que campos no permitir y cuales si
    protected $guarded = ['status'];

}
