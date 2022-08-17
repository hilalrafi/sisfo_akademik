<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Model_mapel extends CI_Model
{
    private $_table = "mapel";

    public $id_mapel;
    public $kd_mapel;
    public $nama_mapel;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ['id_mapel' => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $data = array(
            "kd_mapel" => $post['kd_mapel'],
            "nama_mapel" => $post['nama_mapel']
        );

        return $this->db->insert($this->_table, $data);
    }

    public function update()
    {
        $post = $this->input->post();
        $data = array(
            "kd_mapel" => $post['kd_mapel'],
            "nama_mapel" => $post['nama_mapel']
        );

        $this->db->where('id_mapel', $post['id_mapel']);
        $this->db->update($this->_table, $data);
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array('id_mapel' => $id));
    }
}
