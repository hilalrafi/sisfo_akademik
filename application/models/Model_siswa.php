<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Model_siswa extends CI_Model
{
    private $_table = 'siswa';

    public $id_siswa;
    public $nis;
    public $nisn;
    public $nama_siswa;
    public $tempat_lahir;
    public $tgl_lahir;
    public $gender;
    public $agama;
    public $rombel_id;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ['id_siswa' => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();

        if ($post['rombel_id'] != "null") {
            $id_rombel = $post['rombel_id'];
        } else {
            $id_rombel = null;
        }

        $data = array(
            "nis" => $post['nis'],
            "nisn" => $post['nisn'],
            "nama_siswa" => $post['nama_siswa'],
            "tempat_lahir" => $post['tempat_lahir'],
            "tgl_lahir" => $post['tgl_lahir'],
            "gender" => $post['gender'],
            "agama" => $post['agama'],
            "rombel_id" => $id_rombel
        );

        return $this->db->insert($this->_table, $data);
    }

    public function update()
    {
        $post = $this->input->post();

        if ($post['rombel_id'] != "null") {
            $id_rombel = $post['rombel_id'];
        } else {
            $id_rombel = null;
        }

        $data = array(
            "nis" => $post['nis'],
            "nisn" => $post['nisn'],
            "nama_siswa" => $post['nama_siswa'],
            "tempat_lahir" => $post['tempat_lahir'],
            "tgl_lahir" => $post['tgl_lahir'],
            "gender" => $post['gender'],
            "agama" => $post['agama'],
            "rombel_id" => $id_rombel
        );

        $this->db->where('id_siswa', $post['id_siswa']);
        $this->db->update($this->_table, $data);
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array('id_siswa' => $id));
    }

    public function getByNis($nis)
    {
        return $this->db->get_where($this->_table, ['nis' => $nis])->row();
    }
}
