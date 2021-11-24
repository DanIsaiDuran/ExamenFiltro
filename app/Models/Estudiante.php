<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Materia;

class Estudiante extends Model
{
    use HasFactory;


    //Relación muchos a muchos
    public function materias()
    {
        return $this->belongsToMany(Materia::class);
    }
}
