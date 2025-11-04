<?php

namespace App\Controllers;
use App\Models\WordpressModel;
use CodeIgniter\Controller;

class Reports extends BaseController
{
    public function index()
    {
        $wpModel = new WordpressModel();
        $data['denuncias'] = $wpModel ->orderBy('id', 'DESC')->findAll();
        return view('reports/index', $data);
    }


    
    public function create()
    {
        return view('reports/create'); 
    }


    public function home()
    {
        return view('reports/exportpdf');
    }
    public function export(){
        $data = $this->request->getVar('data');

        // reference the Dompdf namespace
        // instantiate and use the dompdf class
        $dompdf = new Dompdf();
        $dompdf->loadHtml($data);

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream();
    return redirect('/');
    }
}
