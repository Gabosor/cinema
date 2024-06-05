<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcion extends Model
{
    use HasFactory;

    public $table = 'functions';
    
    protected $fillable = [
        'movie_id',
        'room_id',
        'fecha_hora_inicio',
        'fecha_hora_fin'
    ];

}

