<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Sekolah extends CI_Controller
{
    public function index()
    {
        $data['info_sekolah'] = $this->Model_sekolah->getAll();
        $data['title'] = "Info Sekolah";
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/sekolah/show', $data);
        $this->load->view('templates_admin/footer');
    }

    public function add()
    {
        $data['title'] = "Info Sekolah";
        $this->_rules();

        if ($this->form_validation->run()) {
            $this->Model_sekolah->save();
            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Sekolah Berhasil Ditambahkan!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );

            redirect('sekolah');
        }

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/sekolah/add');
        $this->load->view('templates_admin/footer');
    }

    public function _rules()
    {
        $this->form_validation->set_rules('nama_sekolah', 'nama sekolah', 'required', [
            'required' => 'Nama Sekolah wajib diisi!'
        ]);
        $this->form_validation->set_rules('alamat_sekolah', 'alamat sekolah', 'required', [
            'required' => 'Alamat Sekolah wajib diisi!'
        ]);
        $this->form_validation->set_rules('email', 'email', 'required', [
            'required' => 'Email wajib diisi!'
        ]);
        $this->form_validation->set_rules('telepon', 'telepon', 'required|numeric|max_length[13]', [
            'required' => 'Telepon wajib diisi!',
            'numeric' => 'Telepon harus angka!',
            'max_length' => 'Angka melebihi maksimal!'
        ]);
    }

    public function update($id)
    {
        if (!isset($id)) redirect('sekolah');
        $data['info_sekolah'] = $this->Model_sekolah->getById($id);
        $data['title'] = "Info Sekolah";
        $this->_rules();

        if ($this->form_validation->run() == false) {
            if (!$data['info_sekolah']) show_404();
            $this->load->view('templates_admin/header');
            $this->load->view('templates_admin/sidebar', $data);
            $this->load->view('admin/sekolah/update', $data);
            $this->load->view('templates_admin/footer');
        } else {
            $this->Model_sekolah->update();
            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Sekolah Berhasil Diupdate!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );

            redirect('sekolah');
        }
    }

    public function delete($id)
    {
        if (!isset($id)) show_404();

        if ($this->Model_sekolah->delete($id)) {
            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Data Sekolah Berhasil Dihapus!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );
            redirect(site_url('sekolah'));
        }
    }
}
