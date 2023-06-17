<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coche extends Model
{
    use HasFactory;

    // Es una protección manual. Campos de la BBDD en los que se permite la asignación masiva.
    protected $fillable = ['marca', 'modelo', 'kms', 'precio', 'matriculado'];
}
