<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Guru extends CI_Controller
{
    public function index()
    {
        $data['guru'] = $this->Model_guru->getAll();
        $data['title'] = "Data Guru";
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/guru/list', $data);
        $this->load->view('templates_admin/footer');
    }

    public function add()
    {
        $data['title'] = "Data Guru";
        $this->_rules();

        if ($this->form_validation->run()) {
            $this->Model_guru->save();
            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Guru Berhasil Ditambahkan!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );

            redirect('guru');
        }

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/guru/add');
        $this->load->view('templates_admin/footer');
    }

    public function _rules()
    {
        $this->form_validation->set_rules('nuptk', 'nuptk', 'required', [
            'required' => 'NUPTK wajib diisi!'
        ]);
        $this->form_validation->set_rules('nama_guru', 'nama guru', 'required', [
            'required' => 'Nama Guru wajib diisi!'
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
        $this->form_validation->set_rules('jabatan', 'jabatan', 'required', [
            'required' => 'Jabatan wajib diisi!'
        ]);
        $this->form_validation->set_rules('status_pegawai', 'status pegawai', 'required', [
            'required' => 'Status Pegawai wajib diisi!'
        ]);
        $this->form_validation->set_rules('status_sertifikasi', 'status sertifikasi', 'required', [
            'required' => 'Status Sertifikasi Guru wajib diisi!'
        ]);
    }

    public function update($id)
    {
        if (!isset($id)) redirect('guru');
        $data['guru'] = $this->Model_guru->getById($id);
        $data['title'] = "Data Guru";

        $this->_rules();

        if ($this->form_validation->run() == false) {
            if (!$data['guru']) show_404();
            $this->load->view('templates_admin/header');
            $this->load->view('templates_admin/sidebar', $data);
            $this->load->view('admin/guru/update', $data);
            $this->load->view('templates_admin/footer');
        } else {
            $this->Model_guru->update();
            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Guru Berhasil Diupdate!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );

            redirect('guru');
        }
    }

    public function delete($id)
    {
        if (!isset($id)) show_404();

        if ($this->Model_guru->delete($id)) {
            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Data Guru Berhasil Dihapus!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );
            redirect(site_url('guru'));
        }
    }

    public function detail($id)
    {
        if (!isset($id)) redirect('guru');

        $data['guru'] = $this->Model_guru->getById($id);
        $data['title'] = "Data Guru";
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/guru/detail', $data);
        $this->load->view('templates_admin/footer');
    }
}
