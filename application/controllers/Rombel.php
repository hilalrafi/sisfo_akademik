<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Rombel extends CI_Controller
{
    public function index()
    {
        $data['rombel'] = $this->Model_rombel->getAll();
        $data['title'] = "Rombongan Belajar";
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/rombel/list', $data);
        $this->load->view('templates_admin/footer');
    }

    public function add()
    {
        $data['title'] = "Rombongan Belajar";
        $this->_rules();

        if ($this->form_validation->run()) {
            $this->Model_rombel->save();
            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Rombel Berhasil Ditambahkan!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );

            redirect('rombel');
        }

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/rombel/add');
        $this->load->view('templates_admin/footer');
    }

    public function _rules()
    {
        $this->form_validation->set_rules('nama_rombel', 'nama rombel', 'required', [
            'required' => 'Nama Rombel wajib diisi!'
        ]);
    }

    public function update($id)
    {
        if (!isset($id)) redirect('rombel');
        $data['rombel'] = $this->Model_rombel->getById($id);
        $data['title'] = "Rombongan Belajar";

        $this->_rules();

        if ($this->form_validation->run() == false) {
            if (!$data['rombel']) show_404();
            $this->load->view('templates_admin/header');
            $this->load->view('templates_admin/sidebar', $data);
            $this->load->view('admin/rombel/update', $data);
            $this->load->view('templates_admin/footer');
        } else {
            $this->Model_rombel->update();
            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Rombel Berhasil Diupdate!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );

            redirect('rombel');
        }
    }

    public function delete($id)
    {
        if (!isset($id)) show_404();

        if ($this->Model_rombel->delete($id)) {
            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Data Rombel Berhasil Dihapus!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );
            redirect(site_url('rombel'));
        }
    }
}
