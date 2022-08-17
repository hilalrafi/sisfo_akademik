<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Model_guru extends CI_Model
{
    private $_table = 'guru';

    public $id_guru;
    public $nuptk;
    public $nama_guru;
    public $tempat_lahir;
    public $tgl_lahir;
    public $gender;
    public $agama;
    public $jabatan;
    public $status_pegawai;
    public $status_sertifikasi;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ['id_guru' => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $data = array(
            "nuptk" => $post['nuptk'],
            "nama_guru" => $post['nama_guru'],
            "tempat_lahir" => $post['tempat_lahir'],
            "tgl_lahir" => $post['tgl_lahir'],
            "gender" => $post['gender'],
            "agama" => $post['agama'],
            "jabatan" => $post['jabatan'],
            "status_pegawai" => $post['status_pegawai'],
            "status_sertifikasi" => $post['status_sertifikasi']
        );

        return $this->db->insert($this->_table, $data);
    }

    public function update()
    {
        $post = $this->input->post();
        $data = array(
            "nuptk" => $post['nuptk'],
            "nama_guru" => $post['nama_guru'],
            "tempat_lahir" => $post['tempat_lahir'],
            "tgl_lahir" => $post['tgl_lahir'],
            "gender" => $post['gender'],
            "agama" => $post['agama'],
            "jabatan" => $post['jabatan'],
            "status_pegawai" => $post['status_pegawai'],
            "status_sertifikasi" => $post['status_sertifikasi']
        );

        $this->db->where('id_guru', $post['id_guru']);
        $this->db->update($this->_table, $data);
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array('id_guru' => $id));
    }
}
