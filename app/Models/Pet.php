<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;
    
    // Habilitar la asignación masiva para los campos 'name', 'species' y 'age'
    protected $fillable = [
        'name',
        'species',
        'age',
    ];
}