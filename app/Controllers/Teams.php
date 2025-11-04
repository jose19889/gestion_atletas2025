<?php

namespace App\Controllers;
use App\Models\LoginModel;
use App\Models\PlayerModel;
use CodeIgniter\Controller;
use App\Models\UserModel;
use App\Models\TeamsModel;
use App\Models\MembresiaModel;

class Teams extends BaseController
{

   public function index()
{
    $clubModel = new TeamsModel();

    // Verifica si hay usuario cargado
    if (!$this->currentUser) {
        return redirect()->to('/login')->with('error', 'Debe iniciar sesión.');
    }

    if (in_array($this->currentUser['role_id'], ['1', '3', '4'])) {
    $data['teams'] = $clubModel->findAll();
} elseif (!empty($this->currentUser['club_id'])) {
        $data['teams'] = $clubModel->where('id', $this->currentUser['club_id'])->findAll();
    } else {
        // Usuario sin club asignado (pero no admin)
        $data['teams'] = [];
    }

    return view('teams/index', $data);
}


   public function single()
{
    $session = session();
    $user = $session->get('user');

    // Obtener el club_id del usuario logueado
    $club_id = $user['club_id'] ?? null;

    if (!$club_id) {
        return redirect()->to('/'); // O mostrar error si no tiene club asignado
    }

    $playerModel = new PlayerModel();
    $clubModel = new TeamsModel();

    // Obtener datos del club
    $club = $clubModel->find($club_id);

    // Obtener jugadores de ese club
    $players = $playerModel->where('club_id', $club_id)->findAll();

    $data = [
        'club' => $club,
        'players' => $players
    ];

    return view('teams/single', $data);
}
   public function create()
    {
        
        return view('teams/create');
    }

 
public function insert()
{
    helper(['form']);
    $data = [];

    if ($this->request->getMethod() == 'post') {
        $validation = \Config\Services::validation();

        $rules = [
            'nombre_club'    => ['label' => 'Nombre del Club', 'rules' => 'required|min_length[3]'],
            'siglas'         => ['label' => 'Siglas', 'rules' => 'permit_empty'],
            'ciudad'         => ['label' => 'Ciudad', 'rules' => 'permit_empty'],
            'pais'           => ['label' => 'País', 'rules' => 'permit_empty'],
            'telefono'       => ['label' => 'Teléfono', 'rules' => 'permit_empty'],
            'correo'         => ['label' => 'Correo', 'rules' => 'permit_empty|valid_email'],
            'anio_fundacion' => ['label' => 'Año Fundación', 'rules' => 'permit_empty|integer|greater_than[1800]'],
            'presidente'     => ['label' => 'Presidente', 'rules' => 'permit_empty'],
            'entrenador'     => ['label' => 'Entrenador', 'rules' => 'permit_empty'],
            'estadio'        => ['label' => 'Estadio', 'rules' => 'permit_empty'],
        ];

        // Solo validar membresía si el rol lo permite
        if (in_array(session()->get('role_id'), [1, 3])) {
            $rules['tipo']             = ['label' => 'Tipo de Membresía', 'rules' => 'required'];
            $rules['fecha_inicio']     = ['label' => 'Fecha de Inicio', 'rules' => 'required|valid_date'];
            $rules['fecha_expiracion'] = ['label' => 'Fecha de Expiración', 'rules' => 'required|valid_date'];
        }

        if ($this->validate($rules)) {
            $teamsModel = new \App\Models\TeamsModel();

            $clubData = [
                'nombre_club'    => $this->request->getVar('nombre_club'),
                'siglas'         => $this->request->getVar('siglas'),
                'ciudad'         => $this->request->getVar('ciudad'),
                'pais'           => $this->request->getVar('pais'),
                'telefono'       => $this->request->getVar('telefono'),
                'correo'         => $this->request->getVar('correo'),
                'anio_fundacion' => $this->request->getVar('anio_fundacion'),
                'presidente'     => $this->request->getVar('presidente'),
                'entrenador'     => $this->request->getVar('entrenador'),
                'estadio'        => $this->request->getVar('estadio')
            ];

            $teamsModel->save($clubData);
            $clubId = $teamsModel->getInsertID();

            // Insertar membresía si es Federación o Admin
            if (in_array(session()->get('role_id'), [1, 3])) {
                $membresiaModel = new \App\Models\MembresiaModel();
                $membresiaModel->save([
                    'club_id'          => $clubId,
                    'tipo'             => $this->request->getVar('tipo'),
                    'fecha_inicio'     => $this->request->getVar('fecha_inicio'),
                    'fecha_expiracion' => $this->request->getVar('fecha_expiracion'),
                    'estado'           => 'Activa',
                    'gestionado_por'   => session()->get('user_id')
                ]);
            }

            session()->setFlashdata('success', '<p class="text-success">Club creado con éxito.</p>');
            return redirect()->to(site_url('/team-list'));
        } else {
            session()->setFlashdata('danger', '<p class="text-danger">Por favor corrige los errores del formulario.</p>');
            $data['validation'] = $validation->getErrors();
            return redirect()->back()->withInput()->with('validation', $validation);
        }
    }

    return redirect()->back()->with('error', 'Método no permitido.');
}



     public function edit(){
         return view('teams/edit');
    }

     public function generate_list(){
         return view('teams/generate_list');
    }

}