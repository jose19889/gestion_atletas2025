<?php

namespace App\Models;

use CodeIgniter\Model;

class TeamsModel extends Model
{
    protected $table = 'Teams'; // O 'teams' si así llamaste a tu tabla
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'nombre_club',
        'siglas',
        'ciudad',
        'pais',
        'telefono',
        'correo',
        'anio_fundacion',
        'presidente',
        'entrenador',
        'estadio',
        'created_at',
        'updated_at'
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}
