<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!isset($this->session->userdata['username'])) {
            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Anda belum login!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );
            redirect('auth');
        }
    }

    public function index()
    {
        $data = $this->Model_user->ambil_data($this->session->userdata['username']);
        $data = array(
            'username' => $data->username,
            'role_id' => $data->role_id,
            'title' => 'Dashboard'
        );

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/dashboard', $data);
        $this->load->view('templates_admin/footer');
    }
}
