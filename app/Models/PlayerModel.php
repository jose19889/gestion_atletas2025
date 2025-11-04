<?php
namespace App\Models;

use CodeIgniter\Model;

class PlayerModel extends Model
{
    protected $table = 'players';
    protected $primaryKey = 'id';

     protected $allowedFields = [
        'nombre', 'apellidos', 'edad', 'posicion', 'numero',
        'club_id', 'ciudad', 'pais', 'fecha_emision', 'vence',
         'estado_licencia', 'email'
    ];
    protected $useTimestamps = true;

    // ✅ Obtener todos los jugadores con datos del club
    public function getWithClub()
    {
        return $this->select('players.*, teams.nombre_club as club_nombre, teams.anio_fundacion, teams.ciudad as club_ciudad')
                    ->join('teams', 'teams.id = players.club_id')
                    ->findAll();
    }

    // ✅ Obtener jugador por ID con datos de club
    public function getPlayerWithClub($id)
    {
        return $this->select('players.*, teams.nombre_club as club_nombre')
                    ->join('teams', 'teams.id = players.club_id')
                    ->where('players.id', $id)
                    ->first();
    }


}
