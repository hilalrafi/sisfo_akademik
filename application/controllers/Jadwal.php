<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Jadwal extends CI_Controller
{
    public function index()
    {
        $data['jadwal'] = $this->Model_jadwal->getAll();
        $data['tahun_akademik'] = $this->Model_tahunakademik->getAll();
        $data['rombel'] = $this->Model_rombel->getAll();
        $data['title'] = "Jadwal Pelajaran";
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/jadwal/list', $data);
        $this->load->view('templates_admin/footer');
    }

    public function add()
    {
        $data['title'] = "Jadwal Pelajaran";
        $data['tahun_akademik'] = $this->Model_tahunakademik->getAll();
        $data['guru'] = $this->Model_guru->getAll();
        $data['rombel'] = $this->Model_rombel->getAll();
        $data['mapel'] = $this->Model_mapel->getAll();
        $this->_rules();

        if ($this->form_validation->run()) {
            $this->Model_tahunakademik->getAll();
            $this->Model_guru->getAll();
            $this->Model_rombel->getAll();
            $this->Model_mapel->getAll();
            $this->Model_jadwal->save();
            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Jadwal Pelajaran Berhasil Ditambahkan!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );

            redirect('jadwal');
        }

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/jadwal/add');
        $this->load->view('templates_admin/footer');
    }

    public function _rules()
    {
        $this->form_validation->set_rules('tahun_akademik_id', 'tahun akademik', 'required', [
            'required' => 'Tahun Akademik wajib diisi!'
        ]);
        $this->form_validation->set_rules('guru_id', 'guru', 'required', [
            'required' => 'Guru wajib diisi!'
        ]);
        $this->form_validation->set_rules('rombel_id', 'rombel id', 'required', [
            'required' => 'Rombel wajib diisi!'
        ]);
        $this->form_validation->set_rules('mapel_id', 'tempat lahir', 'required', [
            'required' => 'Mata Pelajaran wajib diisi!'
        ]);
        $this->form_validation->set_rules('hari', 'hari', 'required', [
            'required' => 'Hari wajib diisi!'
        ]);
        $this->form_validation->set_rules('jam_awal', 'jam awal', 'required', [
            'required' => 'Jam Awal wajib diisi!'
        ]);
        $this->form_validation->set_rules('jam_akhir', 'jam akhir', 'required', [
            'required' => 'Jam Akhir wajib diisi!'
        ]);
    }

    public function update($id)
    {
        if (!isset($id)) redirect('jadwal');
        $data['title'] = "Jadwal Pelajaran";
        $data['jadwal'] = $this->Model_jadwal->getById($id);
        $data['tahun_akademik'] = $this->Model_tahunakademik->getAll();
        $data['guru'] = $this->Model_guru->getAll();
        $data['rombel'] = $this->Model_rombel->getAll();
        $data['mapel'] = $this->Model_mapel->getAll();

        $this->_rules();

        if ($this->form_validation->run() == false) {
            if (!$data['jadwal']) show_404();
            $this->load->view('templates_admin/header');
            $this->load->view('templates_admin/sidebar', $data);
            $this->load->view('admin/jadwal/update', $data);
            $this->load->view('templates_admin/footer');
        } else {
            $this->Model_tahunakademik->getAll();
            $this->Model_guru->getAll();
            $this->Model_rombel->getAll();
            $this->Model_mapel->getAll();
            $this->Model_jadwal->update();
            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Jadwal Pelajaran Berhasil Diupdate!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );

            redirect('jadwal');
        }
    }

    public function delete($id)
    {
        if (!isset($id)) show_404();

        if ($this->Model_jadwal->delete($id)) {
            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Jadwal Pelajaran Berhasil Dihapus!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );
            redirect(site_url('jadwal'));
        }
    }

    public function cari()
    {
        $post = $this->input->post();
        $tahun_akademik_id = $post['tahun_akademik_id'];
        $rombel_id = $post['rombel_id'];

        $data['jadwal'] = $this->Model_jadwal->getByFilter($tahun_akademik_id, $rombel_id);
        $data['title'] = "Jadwal Pelajaran";
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/jadwal/cari', $data);
        $this->load->view('templates_admin/footer');
    }
}
