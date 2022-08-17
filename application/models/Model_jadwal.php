<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Model_jadwal extends CI_Model
{
    private $_table = "jadwal";

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ['id_jadwal' => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();

        if ($post['tahun_akademik_id'] != "null") {
            $tahun_akademik_id = $post['tahun_akademik_id'];
        } else {
            $tahun_akademik_id = null;
        }

        if ($post['guru_id'] != "null") {
            $guru_id = $post['guru_id'];
        } else {
            $guru_id = null;
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

        $data = array(
            "tahun_akademik_id" => $tahun_akademik_id,
            "guru_id" => $guru_id,
            "rombel_id" => $rombel_id,
            "mapel_id" => $mapel_id,
            "hari" => $post['hari'],
            "jam_awal" => $post['jam_awal'],
            "jam_akhir" => $post['jam_akhir']
        );

        return $this->db->insert($this->_table, $data);
    }

    public function update()
    {
        $post = $this->input->post();

        if ($post['tahun_akademik_id'] != "null") {
            $tahun_akademik_id = $post['tahun_akademik_id'];
        } else {
            $tahun_akademik_id = null;
        }

        if ($post['guru_id'] != "null") {
            $guru_id = $post['guru_id'];
        } else {
            $guru_id = null;
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

        $data = array(
            "tahun_akademik_id" => $tahun_akademik_id,
            "guru_id" => $guru_id,
            "rombel_id" => $rombel_id,
            "mapel_id" => $mapel_id,
            "hari" => $post['hari'],
            "jam_awal" => $post['jam_awal'],
            "jam_akhir" => $post['jam_akhir']
        );

        $this->db->where('id_jadwal', $post['id']);
        $this->db->update($this->_table, $data);
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array('id_jadwal' => $id));
    }

    public function getByFilter($tahun_akademik_id, $rombel_id)
    {
        return $this->db->get_where($this->_table, ['tahun_akademik_id' => $tahun_akademik_id, 'rombel_id' => $rombel_id])->result();
    }
}
