<?php

namespace App\Models;

use CodeIgniter\Model;

class MembresiaModel extends Model
{
    protected $table      = 'membresias';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'club_id',
        'tipo',
        'fecha_inicio',
        'fecha_expiracion',
        'estado',
        'gestionado_por'
    ];

    protected $useTimestamps = true; // Usa created_at y updated_at si tu tabla los tiene

    protected $validationRules = [
        'club_id'          => 'required|is_natural_no_zero',
        'tipo'             => 'required|string|max_length[100]',
        'fecha_inicio'     => 'required|valid_date',
        'fecha_expiracion' => 'required|valid_date',
        'estado'           => 'required|in_list[Activa,Expirada,Cancelada]',
        'gestionado_por'   => 'required|is_natural_no_zero'
    ];

    protected $validationMessages = [
        'club_id' => [
            'required' => 'El club es obligatorio.',
        ],
        'tipo' => [
            'required' => 'El tipo de membresía es obligatorio.'
        ],
        'fecha_inicio' => [
            'valid_date' => 'Debe ingresar una fecha de inicio válida.'
        ],
        'fecha_expiracion' => [
            'valid_date' => 'Debe ingresar una fecha de expiración válida.'
        ],
        'estado' => [
            'in_list' => 'Estado inválido. Debe ser Activa, Expirada o Cancelada.'
        ]
    ];
}
