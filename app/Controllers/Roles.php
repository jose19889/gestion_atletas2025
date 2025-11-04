<?php
namespace App\Controllers;
use App\Models\RoleModel;
use CodeIgniter\Controller;


class Roles extends BaseController
{

    public function __construc(){
        $this->load->database();
        $db  = \Config\Database::connect();
        $builder = $db->table('roles');
      }
      

    public function index(): string{
        $RoleModel = new RoleModel();
       $data['roles'] = $RoleModel->orderBy('id', 'DESC')->findAll();
   
        return view('roles/index', $data);
    }

    public function create(): string{
        
        $RoleModel = new RoleModel();
        return view('roles/create');
    }

    public function insert(){
       $data = [];
        helper(['form']);
        if ($this->request->getMethod() == "post") {
            $validation =  \Config\Services::validation();
    
            $rules = [
                "role_name" => [
                    "label" => "First Name", 
                    "rules" => "required|min_length[3]|max_length[20]"
                ],
                "description" => [
                    "label" => "Last Name", 
                    "rules" => "required|min_length[3]|max_length[20]"
                ],
         
            ];
            if ($this->validate($rules)) {
    
                $role = new RoleModel();
                $roledata = [
                    "role_name" => $this->request->getVar("role_name"),
                    "description" => $this->request->getVar("description"),
                  
                ];
                $role->save($roledata);
                var_dump($roledata);
                $session = session();
                 echo $session->setFlashdata('success', '<p class="text-success">Roles creado con exito!<p/>');
                return $this->response->redirect(site_url('/roles-list'));

            } else {
                $session = session();
                $session->setFlashData("danger", '<p class="text-danger"> Cuidado los datos no se insertaron  </p>');
                return $this->response->redirect(site_url('/roles-create'));

            }
        }
       

    }

    // show single user
    public function edit($id = null){
        $roleModel = new RoleModel();
        $data['role_obj'] = $roleModel->where('id', $id)->first();
        return view('roles/edit', $data);
    }


     // update user data

    

  public function update(){
       

    helper(['form', 'url']);
    //$user_id= $model->find($id);
    
    $data = [
            'role_name' => $this->request->getVar('role_name'),
            'description' => $this->request->getVar('description'),
            
        ];

        //print_r($data); // Add this line to debug

  
    $session = session();
    $model = new RoleModel();
    $id = $this->request->getVar('id') ;

    $model ->update($id, $data);
    echo $session->setFlashdata('success', '<p class="text-success">Roles actualizados con exito!<p/>');
    return $this->response->redirect(site_url('/roles-list'));

    //var_dump($id);
    
}

    public function delete($id = null){
        $roleModel = new RoleModel();
        $data['role'] = $roleModel->where('id', $id)->delete($id);
        $session = \Config\Services::session();
        echo $session->setFlashdata('danger', '<p class="small">Cuidado el registro fue borrado !</>');
        return $this->response->redirect(site_url('/roles-list'));
    }    



    
}
