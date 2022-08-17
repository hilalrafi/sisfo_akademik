<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Model_nilai extends CI_Model
{
    private $_table = "nilai";

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ['id_nilai' => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();

        if ($post['siswa_id'] != "null") {
            $siswa_id = $post['siswa_id'];
        } else {
            $siswa_id = null;
        }

        if ($post['rombel_id'] != "null") {
            $rombel_id = $post['rombel_id'];
        } else {
            $rombel_id = null;
        }

        if ($post['mapel_id'] != "null") {
            $mapel_id = $post['mapel_id'];
        } else {
            $mapel_id = null;
        }

        if ($post['tahun_akademik_id'] != "null") {
            $tahun_akademik_id = $post['tahun_akademik_id'];
        } else {
            $tahun_akademik_id = null;
        }

        $data = array(
            "siswa_id" => $siswa_id,
            "rombel_id" => $rombel_id,
            "mapel_id" => $mapel_id,
            "tahun_akademik_id" => $tahun_akademik_id,
            "nilai_tugas" => $post['nilai_tugas'],
            "nilai_uts" => $post['nilai_uts'],
            "nilai_uas" => $post['nilai_uas'],
            "nilai_akhir" => $post['nilai_akhir']
        );

        return $this->db->insert($this->_table, $data);
    }

    public function update()
    {
        $post = $this->input->post();

        if ($post['siswa_id'] != "null") {
            $siswa_id = $post['siswa_id'];
        } else {
            $siswa_id = null;
        }

        if ($post['rombel_id'] != "null") {
            $rombel_id = $post['rombel_id'];
        } else {
            $rombel_id = null;
        }

        if ($post['mapel_id'] != "null") {
            $mapel_id = $post['mapel_id'];
        } else {
            $mapel_id = null;
        }

        if ($post['tahun_akademik_id'] != "null") {
            $tahun_akademik_id = $post['tahun_akademik_id'];
        } else {
            $tahun_akademik_id = null;
        }

        $data = array(
            "siswa_id" => $siswa_id,
            "rombel_id" => $rombel_id,
            "mapel_id" => $mapel_id,
            "tahun_akademik_id" => $tahun_akademik_id,
            "nilai_tugas" => $post['nilai_tugas'],
            "nilai_uts" => $post['nilai_uts'],
            "nilai_uas" => $post['nilai_uas'],
            "nilai_akhir" => $post['nilai_akhir']
        );

        $this->db->where('id_nilai', $post['id_nilai']);
        $this->db->update($this->_table, $data);
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array('id_nilai' => $id));
    }

    public function getValueByFilter($tahun_akademik_id, $rombel_id, $mapel_id)
    {
        return $this->db->get_where($this->_table, ['tahun_akademik_id' => $tahun_akademik_id, 'rombel_id' => $rombel_id, 'mapel_id' => $mapel_id])->result();
    }

    public function getReportByFilter($tahun_akademik_id, $rombel_id)
    {
        return $this->db->group_by('siswa_id')->get_where($this->_table, ['tahun_akademik_id' => $tahun_akademik_id, 'rombel_id' => $rombel_id])->result();
    }

    public function getReportSiswa($siswa_id, $tahun_akademik_id)
    {
        return $this->db->get_where($this->_table, ['siswa_id' => $siswa_id, 'tahun_akademik_id' => $tahun_akademik_id])->result();
    }
}
