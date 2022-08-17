<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Tahun_akademik extends CI_Controller
{
    public function index()
    {
        $data['tahun_akademik'] = $this->Model_tahunakademik->getAll();
        $data['title'] = "Tahun Akademik";
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/tahun_akademik/list', $data);
        $this->load->view('templates_admin/footer');
    }

    public function add()
    {
        $data['title'] = "Tahun Akademik";
        $this->_rules();

        if ($this->form_validation->run()) {
            $this->Model_tahunakademik->save();
            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Tahun Akademik Berhasil Ditambahkan!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );

            redirect('tahun_akademik');
        }

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/tahun_akademik/add');
        $this->load->view('templates_admin/footer');
    }

    public function _rules()
    {
        $this->form_validation->set_rules('tahun_akademik', 'tahun akademik', 'required', [
            'required' => 'Tahun Akademik wajib diisi!'
        ]);
        $this->form_validation->set_rules('semester', 'semester', 'required', [
            'required' => 'Semester wajib diisi!'
        ]);
        $this->form_validation->set_rules('status', 'status', 'required', [
            'required' => 'Status wajib diisi!'
        ]);
    }

    public function update($id)
    {
        if (!isset($id)) redirect('tahun_akademik');
        $data['tahun_akademik'] = $this->Model_tahunakademik->getById($id);
        $data['title'] = "Tahun Akademik";

        $this->_rules();

        if ($this->form_validation->run() == false) {
            if (!$data['tahun_akademik']) show_404();
            $this->load->view('templates_admin/header');
            $this->load->view('templates_admin/sidebar', $data);
            $this->load->view('admin/tahun_akademik/update', $data);
            $this->load->view('templates_admin/footer');
        } else {
            $this->Model_tahunakademik->update();
            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Tahun Akademik Berhasil Diupdate!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );

            redirect('tahun_akademik');
        }
    }

    public function delete($id)
    {
        if (!isset($id)) show_404();

        if ($this->Model_tahunakademik->delete($id)) {
            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Data Tahun Akademik Berhasil Dihapus!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );
            redirect(site_url('tahun_akademik'));
        }
    }
}
