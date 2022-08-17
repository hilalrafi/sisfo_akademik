<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Mapel extends CI_Controller
{
    public function index()
    {
        $data['mapel'] = $this->Model_mapel->getAll();
        $data['title'] = "Mata Pelajaran";
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/mapel/list', $data);
        $this->load->view('templates_admin/footer');
    }

    public function add()
    {
        $data['title'] = "Mata Pelajaran";
        $this->_rules();

        if ($this->form_validation->run()) {
            $this->Model_mapel->save();
            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Mata Pelajaran Berhasil Ditambahkan!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );

            redirect('mapel');
        }

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/mapel/add');
        $this->load->view('templates_admin/footer');
    }

    public function _rules()
    {
        $this->form_validation->set_rules('kd_mapel', 'kode mapel', 'required', [
            'required' => 'Kode Mata Pelajaran wajib diisi!'
        ]);
        $this->form_validation->set_rules('nama_mapel', 'nama mapel', 'required', [
            'required' => 'Nama Mata Pelajaran wajib diisi!'
        ]);
    }

    public function update($id)
    {
        if (!isset($id)) redirect('mapel');
        $data['mapel'] = $this->Model_mapel->getById($id);
        $data['title'] = "Mata Pelajaran";

        $this->_rules();

        if ($this->form_validation->run() == false) {
            if (!$data['mapel']) show_404();
            $this->load->view('templates_admin/header');
            $this->load->view('templates_admin/sidebar', $data);
            $this->load->view('admin/mapel/update', $data);
            $this->load->view('templates_admin/footer');
        } else {
            $this->Model_mapel->update();
            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Mata Pelajaran Berhasil Diupdate!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );

            redirect('mapel');
        }
    }

    public function delete($id)
    {
        if (!isset($id)) show_404();

        if ($this->Model_mapel->delete($id)) {
            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Data Mata Pelajaran Berhasil Dihapus!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );
            redirect(site_url('mapel'));
        }
    }
}
