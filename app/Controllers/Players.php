<?php

namespace App\Controllers;
use App\Models\LoginModel;
use CodeIgniter\Controller;
use App\Models\UserModel;
use App\Models\PlayerModel;
use App\Models\TeamsModel;
class Players extends BaseController
{
public function index()
{


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

    return view('players/index', [
        'players' => $players,
        'club_id' => $club_id,
        'role_id' => $role_id
    ]);
}


  public  function create(){


   $clubsModel = new TeamsModel(); // El modelo de clubs
    $data['clubs'] = $clubsModel->findAll(); // Pasamos todos los clubs al formulario
    
        return view('players/create',$data);
    }


public function insert()
{
    helper(['form']);
    $data = [];

    if ($this->request->getMethod() == 'post') {
        $validation = \Config\Services::validation();

        $rules = [
            'nombre'       => ['label' => 'nombre', 'rules' => 'required|min_length[2]'],
            'apellidos'    => ['label' => 'apellidos', 'rules' => 'required|min_length[2]'],
            'posicion'     => ['label' => 'posicion', 'rules' => 'required|min_length[2]'],
            'numero'       => ['label' => 'numero', 'rules' => 'required|min_length[6]'],
            'edad'         => ['label' => 'edad', 'rules' => 'required|min_length[2]'],
            'ciudad'       => ['label' => 'ciudad', 'rules' => 'required|min_length[4]'],
            'email'        => ['label' => 'email', 'rules' => 'required|valid_email'],
            'club_id'      => ['label' => 'club_id', 'rules' => 'required|is_natural_no_zero'],
            'pais'         => ['label' => 'pais', 'rules' => 'required|min_length[2]'],
        ];

        // Solo validar campo estado_licencia si el rol lo permite (opcional)
        if (in_array(session()->get('role_id'), [1, 3])) {
            $rules['estado_licencia'] = ['label' => 'Estado de licencia', 'rules' => 'permit_empty|in_list[Activa,Inactiva,En espera]'];
        }

        if ($this->validate($rules)) {
            $playerModel = new \App\Models\PlayerModel();

            $playerData = [
                'nombre'         => $this->request->getVar('nombre'),
                'apellidos'      => $this->request->getVar('apellidos'),
                'posicion'           => $this->request->getVar('posicion'),
                'numero'       => $this->request->getVar('numero'),
                'email'          => $this->request->getVar('email'),
                 'ciudad'          => $this->request->getVar('ciudad'),
                  'edad'          => $this->request->getVar('edad'),
                   'pais'          => $this->request->getVar('pais'),
                'club_id'        => $this->request->getVar('club_id'),
                'estado_licencia'=> 'En espera' // valor por defecto
            ];

            // Si el rol tiene privilegios, puede sobrescribir el estado
            if (in_array(session()->get('role_id'), [1, 3]) && $this->request->getVar('estado_licencia')) {
                $playerData['estado_licencia'] = $this->request->getVar('estado_licencia');
            }

            $playerModel->save($playerData);

            session()->setFlashdata('success', '<p class="text-success">Jugador  creado con éxito.</p>');
            return redirect()->to(site_url('/player-list'));
        } else {
             
            $session = session();
                $session->setFlashData("danger", '<p class="text-danger" >Disculpa, los datos no se insertaron ,Prueba de neuvo !</p>');
               
                $data["validation"] = $validation->getErrors();
                var_dump($validation);
              //return $this->response->redirect(site_url('/player-create')); 
        }
    }

   
}


public function edit_license($id)
{
    $playerModel = new \App\Models\PlayerModel();
    $player = $playerModel->find($id);

    if (!$player) {
        return redirect()->back()->with('error', 'Jugador no encontrado.');
    }

    $data = [
        'player' => $player
    ];

    return view('players/edit', $data);
}

public function actualizarLicencia($id)
{
    $playerModel = new \App\Models\PlayerModel();

    $estado = $this->request->getPost('estado_licencia');
    $fecha_exp = $this->request->getPost('fecha_expiracion');

    $playerModel->update($id, [
        'estado_licencia' => $estado,
        'fecha_expiracion' => $fecha_exp
    ]);

    return redirect()->to('/players')->with('success', 'Licencia actualizada correctamente.');
}

      public  function generate_card(){
        return view('players/card_generate');
    }





}