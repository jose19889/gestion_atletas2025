<?php namespace App\Controllers;

use App\Models\FileModel;
use CodeIgniter\Controller;
use CodeIgniter\Database\ConnectionInterface;
use App\Models\EmailsModel;
use App\Models\StatusModel;
use App\Models\RoleModel;

use Dompdf\Dompdf;
use Dompdf\Options;
class DataTransferController extends BaseController {

    private $wpDb;

    public function __construct() {
         // Load the helper here
        helper('hasRole'); // Replace 'your_helper_name' with the actual name of the helper
        // Connect to WordPress database
        $this->wpDb = \Config\Database::connect('wordpress');
    }


    public function transferData() {
        helper(['form', 'url']);
    
        // Retrieve data from WordPress database
        $query = $this->wpDb->query("SELECT * FROM wp_db7_forms");
        $results = $query->getResult();
    
        if (!empty($results)) {
            $ciDb = \Config\Database::connect();
            $sourceDir = '/xampp/htdocs/apps/portal-anticorupcion/wp-content/uploads/cfdb7_uploads/';
            $destinationDir = FCPATH . 'uploads/files/'; // Public/uploads/files
    
            if (!is_dir($destinationDir)) {
                mkdir($destinationDir, 0777, true);
            }
    
            foreach ($results as $result) {
                $existing = $ciDb->table('denuncias')->where('id', $result->form_id)->get()->getRow();
                if ($existing) continue;
    
                $dataArray = unserialize($result->form_value);
                $ficheroFilePath = $dataArray['fichero_simplecfdb7_file'] ?? null;
                $multilineFilePath = $dataArray['multilinefile-87cfdb7_file'] ?? null;
    
                // Skip if no files are attached
                if (empty($ficheroFilePath) && empty($multilineFilePath)) {
                    echo "Skipped record with ID {$result->form_id}: No files attached.\n";
                    continue;
                }
    
                $ficheroDbPath = null;
                $multilineDbPath = null;
                $fileCopyFailed = false;
    
                // Copy fichero_simplecfdb7_file
                if ($ficheroFilePath) {
                    $sourcePath = $sourceDir . $ficheroFilePath;
                    $destinationPath = $destinationDir . $ficheroFilePath;
                    if (file_exists($sourcePath)) {
                        if (copy($sourcePath, $destinationPath)) {
                            $ficheroDbPath = 'uploads/files/' . $ficheroFilePath;
                            echo "File copied: $ficheroFilePath\n";
                        } else {
                            echo "ERROR: Failed to copy file: $ficheroFilePath\n";
                            $fileCopyFailed = true;
                        }
                    } else {
                        echo "ERROR: File not found: $ficheroFilePath\n";
                        $fileCopyFailed = true;
                    }
                }
    
                // Copy multilinefile_87cfdb7_file
                if ($multilineFilePath) {
                    $sourcePath = $sourceDir . $multilineFilePath;
                    $destinationPath = $destinationDir . $multilineFilePath;
                    if (file_exists($sourcePath)) {
                        if (copy($sourcePath, $destinationPath)) {
                            $multilineDbPath = 'uploads/files/' . $multilineFilePath;
                            echo "File copied: $multilineFilePath\n";
                        } else {
                            echo "ERROR: Failed to copy file: $multilineFilePath\n";
                            $fileCopyFailed = true;
                        }
                    } else {
                        echo "ERROR: File not found: $multilineFilePath\n";
                        $fileCopyFailed = true;
                    }
                }
    
                // Skip insertion if any attached file failed
                if ($fileCopyFailed) {
                    echo "Record with ID {$result->form_id} skipped due to file copy error.\n";
                    continue;
                }
    
                // Insert into database
                $dataToInsert = [
                    'id' => $result->form_id,
                    'nombre' => $dataArray['your-name'] ?? null,
                    'apellidos' => $dataArray['apellidos'] ?? null,
                    'menu_documentos' => $dataArray['menu-documentos'][0] ?? null,
                    'menu_contacto' => $dataArray['menu-contacto'][0] ?? null,
                    'correo_electronico' => $dataArray['other'] ?? null,
                    'numero' => $dataArray['numero'] ?? null,
                    'menu_instituciones' => $dataArray['menu-instituciones'][0] ?? null,
                    'assigned_role_id' => 1,
                    'id_estado' => 1,
                    'direccion_seccion' => $dataArray['direccion_seccion'] ?? null,
                    'your_subject' => $dataArray['your-subject'] ?? null,
                    'ciudades' => $dataArray['ciudades'][0] ?? null,
                    'tipo_denuncia' => $dataArray['TIPO-DENUCNIA'][0] ?? null,
                    'mensaje' => $dataArray['Mensaje'] ?? null,
                    'fichero_simplecfdb7_file' => $ficheroDbPath,
                    'multilinefile_87cfdb7_file' => $multilineDbPath
                ];
    
                $ciDb->table('denuncias')->insert($dataToInsert);
                echo "Record inserted: ID {$result->form_id}\n";
            }
        }
    
        return "Data transferred successfully.";
    }
    



public function reports()
{
    helper('role'); // Assuming you have a helper to get the user's role

    $wpModel = new EmailsModel();
    $db = \Config\Database::connect();

    // Fetch unique values for filters
    $tipoDenuncias = $wpModel->select('tipo_denuncia')->distinct()->findAll();
    $instituciones = $wpModel->select('menu_instituciones')->distinct()->findAll();
    $estados = $db->table('statuses')->select('id, name')->get()->getResultArray();

    // Get filter values from request or set defaults
    $tipo_denuncia = $this->request->getVar('tipo_denuncia') ?? '';
    $institucion = $this->request->getVar('institucion') ?? '';
    $estado = $this->request->getVar('estado') ?? '';

    // Get the current user's role
    $userRole = session()->get('role_id'); // Assuming role_id is stored in session

    // Initialize query
    $query = $wpModel;

    // Apply filters conditionally
    if (!empty($tipo_denuncia)) {
        $query = $query->where('tipo_denuncia', $tipo_denuncia);
    }
    if (!empty($institucion)) {
        $query = $query->where('menu_instituciones', $institucion);
    }
    if (!empty($estado)) {
        $query = $query->where('estado', $estado);
    }

    // Fetch denuncias based on user role
    if ($userRole == 1) { // Admin role
        // Admin sees all denuncias, with the applied filters
        $data['emails'] = $wpModel->GetemailData($tipo_denuncia, $institucion, $estado);
    } else {
        // Non-admin users can only see denuncias assigned to their role
        $data['emails'] = $wpModel->GetemailData($tipo_denuncia, $institucion, $estado, $userRole);
    }

    // Pass filter values and options to the view
    $data['tipo_denuncia'] = $tipoDenuncias;
    $data['menu_instituciones'] = $instituciones;
    $data['estado'] = $estados;

    return view('reports/index', $data);
}




// assign reports
 public function assign($id = null){
    $emailsModel = new EmailsModel();
    $statusModel = new StatusModel();
    $RoleModel= new RoleModel();
    $data['email_obj'] = $emailsModel->where('id', $id)->first();
    $data['estados'] =   $statusModel ->getstatus();
     $data['roles'] =   $RoleModel ->orderBy('id', 'DESC')->findAll();
    return view('reports/assign', $data);
   
}


public function assigned() {
    helper('role'); // Assuming you have a helper to get the user's role

    $wpModel = new EmailsModel();
    $db = \Config\Database::connect();

    // Fetch unique values for filters
    $tipoDenuncias = $wpModel->select('tipo_denuncia')->distinct()->findAll();
    $instituciones = $wpModel->select('menu_instituciones')->distinct()->findAll();
    $estados = $db->table('statuses')->select('id, name')->get()->getResultArray();

    // Get filter values for the request or set defaults
    $tipo_denuncia = $this->request->getVar('tipo_denuncia') ?? '';
    $institucion = $this->request->getVar('institucion') ?? '';
    $estado = $this->request->getVar('estado') ?? '';

    // Get the current user's role
    $userRole = session()->get('role_id'); // Assuming role_id is stored in session

    // Fetch denuncias based on user role
    // No need to add `assigned_role_id != 1` here as it's already handled in the model
    $data['emails'] = $wpModel->Get_assigned($tipo_denuncia, $institucion, $estado, $userRole);

    // Pass filter values and options to the view
    $data['tipo_denuncia'] = $tipoDenuncias;
    $data['menu_instituciones'] = $instituciones;
    $data['estado'] = $estados;

    return view('reports/assigned', $data);
}

public function edit($id = null)
{
    // Load models
    $emailsModel = new EmailsModel();
    $statusModel = new StatusModel();
    $filesModel = new FileModel();

    // Get the denuncia record based on the ID
    $data['email_obj'] = $emailsModel->where('id', $id)->first();

    // Initialize file variables
    $data['files'] = [];

    // Debug: Check if the denuncia record is retrieved correctly
    if (!$data['email_obj']) {
        die("Error: No denuncia record found with ID: $id");
    }

    // Fetch files associated with this denuncia
    $data['files'] = $filesModel->where('denuncia_id', $id)->findAll();

    // Other data fetching...
    $data['estados'] = $statusModel->getstatus();
    $data['total_denuncias'] = $emailsModel->countAllResults();
    $data['falsas'] = $emailsModel->where('id_estado', '2')->countAllResults();
    $data['en_proceso'] = $emailsModel->where('id_estado', '3')->countAllResults();
    $data['finalizado'] = $emailsModel->where('id_estado', '4')->countAllResults();

    // Pass data to the view
    return view('reports/edit', $data);
}



// update denucia
public function update()
{
    helper(['form', 'url']);

    // Connect to the database
    $db = \Config\Database::connect();
    $filesModel = new FileModel(); // Load the FileModel

    // Collect data from the request
    $data = [
        'comentario' => $this->request->getVar('comentario'),
        'id_estado' => $this->request->getVar('id_estado'),
    ];

    // Check if ID is provided
    $id = $this->request->getVar('id');
    if (empty($id)) {
        return redirect()->back()->with('error', 'ID is required to update the record.');
    }

    // Handle file upload
    if ($file = $this->request->getFile('evidence')) {
        if ($file->isValid() && !$file->hasMoved()) {
            // Fetch old files associated with this denuncia
            $oldFiles = $filesModel->where('denuncia_id', $id)->findAll();

            // Delete old files from the server and database
            foreach ($oldFiles as $oldFile) {
                // Delete the file from the server
                if (file_exists($oldFile['file_path'])) {
                    unlink($oldFile['file_path']); // Delete the file
                }

                // Delete the file record from the database
                $filesModel->delete($oldFile['id']);
            }

            // Upload the new file
            $newName = $file->getRandomName(); // Generate a unique filename
            $file->move('./uploads/evidences/', $newName); // Move file to folder

            // Insert new file record into the 'files' table
            $fileData = [
                'denuncia_id' => $id, // Associate the file with the denuncia
                'file_name'   => $newName,
                'file_path'   => 'uploads/evidences/' . $newName
            ];
            $db->table('files')->insert($fileData);
        } else {
            return redirect()->back()->with('error', 'File upload failed: ' . $file->getErrorString());
        }
    }

    // Update the 'denuncias' table
    $db->table('denuncias')->where('id', $id)->update($data);

    // Redirect with success message
    return redirect()->back()->with('success', '<p class="text-danger">Denuncia updated successfully.</p>');
}

//asign update
public function assig_save()
{
    $ciDb = \Config\Database::connect();

    $id = $this->request->getPost('id');
    $assignedRoleId = $this->request->getPost('assigned_role_id');

    // Update the denuncia with the new assigned role ID
    $ciDb->table('denuncias')->where('id', $id)->update(['assigned_role_id' => $assignedRoleId]);

      $session = session();
    $session->setFlashdata('success', '<p class="text-success">Denuncia asignada con exito!<p/>');

      return $this->response->redirect(site_url('/reports'));
}


//stats view
public function statistics()
{
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


    $data['total_denuncias']= $wpModel->countAllResults();
    $data['falsas']= $wpModel->where('id_estado', '2')->countAllResults();
     $data['en_proceso']= $wpModel->where('id_estado', '3')->countAllResults();
      $data['finalizado']= $wpModel->where('id_estado', '4')->countAllResults();

    return view('reports/statistics', $data);
}


public function exportpdf($id)
{
    $emailsModel = new EmailsModel();
    $denuncia = $emailsModel->find($id);
    //$data['email_obj'] = $emailsModel->where('id', $id)->first();

    if (!$denuncia) {
        throw new \CodeIgniter\Exceptions\PageNotFoundException("Denuncia no encontrada.");
    }

    // Ruta al archivo adjunto
    $filePath = WRITEPATH . 'uploads/files/' . $denuncia['fichero_simplecfdb7_file'];

    // Generar contenido HTML para el PDF
    $html = view('reports/pdf_template', ['denuncia' => $denuncia]);

    // Crear PDF con Dompdf
    $options = new Options();
    $options->set('isRemoteEnabled', true);
    $dompdf = new Dompdf($options);
    $dompdf->loadHtml($html);
    $dompdf->setPaper('A4', 'portrait');
    $dompdf->render();

    // Adjuntar PDF original si querés incluirlo dentro como segunda página (opcional)
    // O podés dejarlo como un link dentro del PDF principal

    // Descargar el archivo
    $dompdf->stream("denuncia_{$id}.pdf", ["Attachment" => true]);
}

    

}
