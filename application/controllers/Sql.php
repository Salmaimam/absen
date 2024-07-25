<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sql extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Sql_model');
        $this->load->helper('captcha');
    }

    public function index() {
        $data['output'] = '';
        $data['set'] = 'sql_interface';

        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            $recaptcha_secret = '6Lcg4RcqAAAAA0ctzVElTrAoXSJJnyODJM_uBA';  // Ganti dengan Secret Key Anda
            $recaptcha_response = $this->input->post('g-recaptcha-response');
            $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$recaptcha_secret&response=$recaptcha_response");
            $responseKeys = json_decode($response, true);

            if (intval($responseKeys["success"]) !== 1) {
                $data['output'] = "<p>Captcha gagal. Silakan coba lagi.</p>";
            } else {
                if ($this->input->post('upload_database')) {
                    if ($_FILES['sql_file']['error'] === UPLOAD_ERR_OK) {
                        $file_path = $_FILES['sql_file']['tmp_name'];
                        $data['output'] = $this->Sql_model->upload_sql_file($file_path);
                        $data['output'] .= "<h2>Database Berhasil Diunggah:</h2>";
                        $data['output'] .= "<p>File SQL berhasil diunggah dan perintah-perintah SQL berhasil dijalankan.</p>";
                    } else {
                        $data['output'] .= "<p>Error uploading file: " . $_FILES['sql_file']['error'] . "</p>";
                    }
                } elseif ($this->input->post('drop_all_tables')) {
                    $data['output'] = $this->Sql_model->drop_all_tables();
                } elseif ($this->input->post('truncate_all_tables')) {
                    $data['output'] = $this->Sql_model->truncate_all_tables();
                } elseif ($this->input->post('backup_database')) {
                    $backup_file = $this->Sql_model->backup_database();
                    $this->load->helper('download');
                    force_download('./backups/' . $backup_file, NULL);
                    return;
                } else {
                    $sql_query = $this->input->post('sql_query');
                    $data['output'] = $this->Sql_model->execute_sql_commands([$sql_query]);
                }
            }
        }

        $this->load->view('i_sql_command_interface', $data);
    }
}
?>
