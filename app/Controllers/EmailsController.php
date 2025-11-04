<?php
namespace App\Controllers;
use App\Models\CatsModel;

class EmailsController extends BaseController {
    public function receive_emails() {
        // Get the JSON-encoded data from the request body
        $post_data = json_decode(file_get_contents("php://input"), true);

        // Check if the data is not empty
        if (!empty($post_data)) {
            // Insert the data into the ci_emails table
            $this->db->insert('ci_emails', $post_data);

            // Send success response
            echo json_encode(['status' => 'success']);
        } else {
            // Handle the case where no data was sent
            echo json_encode(['status' => 'error', 'message' => 'No data received']);
        }
    }


    public function view_emails() {
        $emails = $this->db->get('ci_emails')->result_array();
        $this->load->view('emails_view', ['emails' => $emails]);
    }

    public function test() {
        return view('dashboard');
       
}
}

