<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Model_sekolah extends CI_Model
{
    private $_table = 'info_sekolah';

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ['id_sekolah' => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $data = array(
            "nama_sekolah" => $post['nama_sekolah'],
            "alamat_sekolah" => $post['alamat_sekolah'],
            "email" => $post['email'],
            "telepon" => $post['telepon']
        );

        return $this->db->insert($this->_table, $data);
    }

    public function update()
    {
        $post = $this->input->post();
        $data = array(
            "nama_sekolah" => $post['nama_sekolah'],
            "alamat_sekolah" => $post['alamat_sekolah'],
            "email" => $post['email'],
            "telepon" => $post['telepon']
        );

        $this->db->where('id_sekolah', $post['id_sekolah']);
        $this->db->update($this->_table, $data);
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array('id_sekolah' => $id));
    }
}
