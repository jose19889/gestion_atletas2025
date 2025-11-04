<?php

namespace App\Controllers;
use CodeIgniter\Database\ConnectionInterface;
use App\Models\EmailsModel;
use App\Models\StatusModel;
use App\Models\RoleModel;

class Home extends BaseController
{
    public function index(): string{


 $wpModel = new EmailsModel();

    // Get the statistics for tipo_denuncia
    $statistics = $wpModel->getDenunciaStatistics();

    // Prepare the data for the chart
    $labels = [];
    $data = [];

    foreach ($statistics as $stat) {
        $labels[] = $stat['tipo_denuncia'];
        $data[] = $stat['count'];
    }

    // Pass the labels and data to the view
    $data['labels'] = json_encode($labels); // Convert to JSON for use in JS
    $data['data'] = json_encode($data);     // Convert to JSON for use in JS

 if (!session()->has('id')){
     return view('welcome_message',$data);
 }

       
    }
}
