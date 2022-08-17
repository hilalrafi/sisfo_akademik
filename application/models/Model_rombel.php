<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Model_rombel extends CI_Model
{
    private $_table = 'rombel';

    public $id_rombel;
    public $nama_rombel;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ['id_rombel' => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $data = array(
            "nama_rombel" => $post['nama_rombel'],
        );

        return $this->db->insert($this->_table, $data);
    }

    public function update()
    {
        $post = $this->input->post();
        $data = array(
            "nama_rombel" => $post['nama_rombel'],
        );

        $this->db->where('id_rombel', $post['id']);
        $this->db->update($this->_table, $data);
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array('id_rombel' => $id));
    }
}
