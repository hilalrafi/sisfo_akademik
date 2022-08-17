<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{
    public function index()
    {
        $data['siswa'] = $this->Model_siswa->getAll();
        $data['title'] = "Data Siswa";
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/siswa/list', $data);
        $this->load->view('templates_admin/footer');
    }

    public function add()
    {
        $data['title'] = "Data Siswa";
        $data['rombel'] = $this->Model_rombel->getAll();
        $this->_rules();

        if ($this->form_validation->run()) {
            $this->Model_rombel->getAll();
            $this->Model_siswa->save();
            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Siswa Berhasil Ditambahkan!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );

            redirect('siswa');
        }

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/siswa/add');
        $this->load->view('templates_admin/footer');
    }

    public function _rules()
    {
        $this->form_validation->set_rules('nis', 'nis', 'required', [
            'required' => 'NIS wajib diisi!'
        ]);
        $this->form_validation->set_rules('nisn', 'nisn', 'required', [
            'required' => 'NISN wajib diisi!'
        ]);
        $this->form_validation->set_rules('nama_siswa', 'nama siswa', 'required', [
            'required' => 'Nama Siswa wajib diisi!'
        ]);
        $this->form_validation->set_rules('tempat_lahir', 'tempat lahir', 'required', [
            'required' => 'Tempat Lahir wajib diisi!'
        ]);
        $this->form_validation->set_rules('tgl_lahir', 'tgl lahir', 'required', [
            'required' => 'Tanggal Lahir wajib diisi!'
        ]);
        $this->form_validation->set_rules('gender', 'gender', 'required', [
            'required' => 'Gender wajib diisi!'
        ]);
        $this->form_validation->set_rules('agama', 'agama', 'required', [
            'required' => 'Agama wajib diisi!'
        ]);
        $this->form_validation->set_rules('rombel_id', 'rombel id', 'required', [
            'required' => 'Rombel wajib diisi!'
        ]);
    }

    public function update($id)
    {
        if (!isset($id)) redirect('siswa');
        $data['siswa'] = $this->Model_siswa->getById($id);
        $data['rombel'] = $this->Model_rombel->getAll();
        $data['title'] = "Data Siswa";

        $this->_rules();

        if ($this->form_validation->run() == false) {
            if (!$data['siswa']) show_404();
            $this->load->view('templates_admin/header');
            $this->load->view('templates_admin/sidebar', $data);
            $this->load->view('admin/siswa/update', $data);
            $this->load->view('templates_admin/footer');
        } else {
            $this->Model_rombel->getAll();
            $this->Model_siswa->update();
            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Siswa Berhasil Diupdate!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );

            redirect('siswa');
        }
    }

    public function delete($id)
    {
        if (!isset($id)) show_404();

        if ($this->Model_siswa->delete($id)) {
            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Data Siswa Berhasil Dihapus!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );
            redirect(site_url('siswa'));
        }
    }

    public function detail($id)
    {
        if (!isset($id)) redirect('siswa');

        $data['siswa'] = $this->Model_siswa->getById($id);
        $data['title'] = "Data Siswa";
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/siswa/detail', $data);
        $this->load->view('templates_admin/footer');
    }
}
