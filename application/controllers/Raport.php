<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Raport extends CI_Controller
{
    public function index()
    {
        $data['tahun_akademik'] = $this->Model_tahunakademik->getAll();
        $data['rombel'] = $this->Model_rombel->getAll();
        $data['mapel'] = $this->Model_mapel->getAll();
        $data['title'] = "Cetak Raport";
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/raport/list', $data);
        $this->load->view('templates_admin/footer');
    }

    public function cari()
    {
        $post = $this->input->post();
        $tahun_akademik_id = $post['tahun_akademik_id'];
        $rombel_id = $post['rombel_id'];

        $data['nilai'] = $this->Model_nilai->getReportByFilter($tahun_akademik_id, $rombel_id);
        $data['title'] = "Cetak Raport";
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/raport/cari', $data);
        $this->load->view('templates_admin/footer');
    }

    public function cetak($id_siswa, $id_tahun_akademik)
    {
        $report_siswa = $this->Model_nilai->getReportSiswa($id_siswa, $id_tahun_akademik);
        $siswa = $this->Model_siswa->getById($id_siswa);
        $data['report_siswa'] = $report_siswa;
        $data['siswa'] = $siswa;
        $data['rombel'] = $this->Model_rombel->getById($siswa->rombel_id);
        $data['tahun_akademik'] = $this->Model_tahunakademik->getById($id_tahun_akademik);

        $this->load->view('admin/raport/cetak', $data);
    }
}
