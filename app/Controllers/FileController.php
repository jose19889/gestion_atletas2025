<?php

namespace App\Controllers;

use App\Models\FileModel;
use CodeIgniter\Controller;

class FileController extends Controller
{

	public function get_form(){

return view('files/upload');

	}

    public function upload()
    {
        helper(['form', 'url']);
        $model = new FileModel();

        // Ensure directory exists
        $uploadPath = WRITEPATH . 'uploads/files/';
        if (!is_dir($uploadPath)) {
            mkdir($uploadPath, 0777, true);
        }

        if ($this->request->getMethod() === 'post') {
            $file = $this->request->getFile('file');

            if ($file->isValid() && !$file->hasMoved()) {
                // Move file to directory
                $fileName = $file->getRandomName();
                $file->move($uploadPath, $fileName);

                // Store file info in the database
                $data = [
                    'file_name' => $file->getClientName(),
                    'file' => $fileName
                ];
                $model->insert($data);

                return redirect()->back()->with('message', 'File uploaded successfully!');
            }

            return redirect()->back()->with('error', 'Please select a valid file');
        }

        return view('files/upload');
    }

    public function upload_evidence(){

        helper(['form', 'url']);
        $model = new FileModel();

    }


}
