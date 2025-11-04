<?php
namespace App\Controllers;
use CodeIgniter\Database\ConnectionInterface;
use App\Models\EmailsModel;
use App\Models\StatusModel;
use App\Models\RoleModel;
use App\Models\PlayerModel;

class Dashboard extends BaseController
{
    public function index(): string
    {
        $wpModel = new EmailsModel();

        // Get the statistics for tipo_denuncia
        $statistics = $wpModel->getDenunciaStatistics();

        // Prepare the data for the chart
        $labels = [];
        $dataCounts = [];

        foreach ($statistics as $stat) {
            $labels[] = $stat['tipo_denuncia'];
            $dataCounts[] = $stat['count'];
        }

        // Datos para la vista
      

        // 👇 Aquí recuperamos el rol desde la sesión y lo pasamos a la vista
        $session = session();
        $user = $session->get('user');

        $data['roleId'] = $user['role_id'] ?? null;
        $data['roleName'] = $user['role_name'] ?? '';
        $data['userId'] = $user['id'] ?? null;
        $data['username'] = $user['username'] ?? '';


         $session = session();
    $user = $session->get('user');

    $club_id = $user['club_id'] ?? null;
    $role_id = $user['role_id'] ?? null;

    $jugadorModel = new PlayerModel();

    if ($role_id == 1 || $role_id == 3 || $role_id == 4 )  {
        // Admin y federación ven todos los jugadores con club
        $players = $jugadorModel->getWithClub();
    } else {
        // Otros roles: solo jugadores de su club
        $players = $jugadorModel->select('players.*, teams.nombre_club as club_nombre')
                                ->join('teams', 'teams.id = players.club_id')
                                ->where('players.club_id', $club_id)
                                ->orderBy('players.id', 'DESC')
                                ->findAll();
    }

    return view('dashboard', [
        'players' => $players,
        'club_id' => $club_id,
        'role_id' => $role_id
    ]);

       // return view('dashboard', $data);
    }
}
