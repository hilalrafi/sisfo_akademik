<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{
    public function index()
    {
        $data['user'] = $this->Model_user->getAll();
        $data['title'] = "Daftar User";
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/user/list', $data);
        $this->load->view('templates_admin/footer');
    }

    public function add()
    {
        $data['title'] = "Daftar User";
        $this->_rules();

        if ($this->form_validation->run()) {
            $this->Model_user->save();
            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data User Berhasil Ditambahkan!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );

            redirect('users');
        }

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/user/add');
        $this->load->view('templates_admin/footer');
    }

    public function _rules()
    {
        $this->form_validation->set_rules('username', 'username', 'required', [
            'required' => 'Username wajib diisi!'
        ]);
        $this->form_validation->set_rules('password', 'password', 'required', [
            'required' => 'Password wajib diisi!'
        ]);
        $this->form_validation->set_rules('name', 'name', 'required', [
            'required' => 'Nama wajib diisi!'
        ]);
        $this->form_validation->set_rules('role_id', 'role id', 'required', [
            'required' => 'Role wajib diisi!'
        ]);
        $this->form_validation->set_rules('is_active', 'is active', 'required', [
            'required' => 'Blokir wajib diisi!'
        ]);
    }

    public function update($id)
    {
        if (!isset($id)) redirect('users');
        $data['user'] = $this->Model_user->getById($id);
        $data['title'] = "Daftar User";

        $this->_rules();

        if ($this->form_validation->run() == false) {
            if (!$data['user']) show_404();
            $this->load->view('templates_admin/header');
            $this->load->view('templates_admin/sidebar', $data);
            $this->load->view('admin/user/update', $data);
            $this->load->view('templates_admin/footer');
        } else {
            $this->Model_user->update();
            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data User Berhasil Diupdate!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );

            redirect('users');
        }
    }

    public function delete($id)
    {
        if (!isset($id)) show_404();

        if ($this->Model_user->delete($id)) {
            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Data User Berhasil Dihapus!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );
            redirect(site_url('users'));
        }
    }

    public function profile()
    {
        $data['user'] = $this->Model_user->getAll();
        $data['title'] = "Profile User";
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/user/profile', $data);
        $this->load->view('templates_admin/footer');
    }
}
