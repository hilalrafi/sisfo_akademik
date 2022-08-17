<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Nilai extends CI_Controller
{
    public function index()
    {
        $data['nilai'] = $this->Model_nilai->getAll();
        $data['tahun_akademik'] = $this->Model_tahunakademik->getAll();
        $data['rombel'] = $this->Model_rombel->getAll();
        $data['mapel'] = $this->Model_mapel->getAll();
        $data['title'] = "Laporan Nilai";
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/nilai/list', $data);
        $this->load->view('templates_admin/footer');
    }

    public function add()
    {
        $data['title'] = "Laporan Nilai";
        $data['tahun_akademik'] = $this->Model_tahunakademik->getAll();
        $data['siswa'] = $this->Model_siswa->getAll();
        $data['rombel'] = $this->Model_rombel->getAll();
        $data['mapel'] = $this->Model_mapel->getAll();
        $this->_rules();

        if ($this->form_validation->run()) {
            $this->Model_tahunakademik->getAll();
            $this->Model_siswa->getAll();
            $this->Model_rombel->getAll();
            $this->Model_mapel->getAll();
            $this->Model_nilai->save();
            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Input Nilai Berhasil Ditambahkan!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );

            redirect('nilai');
        }

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/nilai/add');
        $this->load->view('templates_admin/footer');
    }

    public function _rules()
    {
        $this->form_validation->set_rules('siswa_id', 'siswa', 'required', [
            'required' => 'Siswa wajib diisi!'
        ]);
        $this->form_validation->set_rules('rombel_id', 'rombel', 'required', [
            'required' => 'Rombel wajib diisi!'
        ]);
        $this->form_validation->set_rules('mapel_id', 'mapel', 'required', [
            'required' => 'Mata Pelajaran wajib diisi!'
        ]);
        $this->form_validation->set_rules('tahun_akademik_id', 'tahun akademik', 'required', [
            'required' => 'Tahun Akademik wajib diisi!'
        ]);
        $this->form_validation->set_rules('nilai_tugas', 'nilai tugas', 'required', [
            'required' => 'Nilai Tugas wajib diisi!'
        ]);
        $this->form_validation->set_rules('nilai_uts', 'nilai uts', 'required', [
            'required' => 'Nilai UTS wajib diisi!'
        ]);
        $this->form_validation->set_rules('nilai_uas', 'nilai uas', 'required', [
            'required' => 'Nilai UAS wajib diisi!'
        ]);
    }

    public function update($id)
    {
        if (!isset($id)) redirect('nilai');
        $data['title'] = "Laporan Nilai";
        $data['nilai'] = $this->Model_nilai->getById($id);
        $data['tahun_akademik'] = $this->Model_tahunakademik->getAll();
        $data['siswa'] = $this->Model_siswa->getAll();
        $data['rombel'] = $this->Model_rombel->getAll();
        $data['mapel'] = $this->Model_mapel->getAll();

        $this->_rules();

        if ($this->form_validation->run() == false) {
            if (!$data['nilai']) show_404();
            $this->load->view('templates_admin/header');
            $this->load->view('templates_admin/sidebar', $data);
            $this->load->view('admin/nilai/update', $data);
            $this->load->view('templates_admin/footer');
        } else {
            $this->Model_tahunakademik->getAll();
            $this->Model_siswa->getAll();
            $this->Model_rombel->getAll();
            $this->Model_mapel->getAll();
            $this->Model_nilai->update();
            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Input Nilai Berhasil Diupdate!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );

            redirect('nilai');
        }
    }

    public function delete($id)
    {
        if (!isset($id)) show_404();

        if ($this->Model_nilai->delete($id)) {
            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Input Nilai Berhasil Dihapus!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );
            redirect(site_url('nilai'));
        }
    }

    public function detail($id)
    {
        if (!isset($id)) redirect('nilai');

        $data['nilai'] = $this->Model_nilai->getById($id);
        $data['title'] = "Laporan Nilai";
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/nilai/detail', $data);
        $this->load->view('templates_admin/footer');
    }

    public function cari()
    {
        $post = $this->input->post();
        $tahun_akademik_id = $post['tahun_akademik_id'];
        $rombel_id = $post['rombel_id'];
        $mapel_id = $post['mapel_id'];

        $data['nilai'] = $this->Model_nilai->getValueByFilter($tahun_akademik_id, $rombel_id, $mapel_id);
        $data['title'] = "Laporan Nilai";
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/nilai/cari', $data);
        $this->load->view('templates_admin/footer');
    }
}
