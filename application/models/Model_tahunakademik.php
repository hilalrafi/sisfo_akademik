<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Model_tahunakademik extends CI_Model
{
    private $_table = 'tahun_akademik';

    public $id;
    public $tahun_akademik;
    public $semester;
    public $status;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ['id' => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $data = array(
            "tahun_akademik" => $post['tahun_akademik'],
            "semester" => $post['semester'],
            "status" => $post['status']
        );

        return $this->db->insert($this->_table, $data);
    }

    public function update()
    {
        $post = $this->input->post();
        $data = array(
            "tahun_akademik" => $post['tahun_akademik'],
            "semester" => $post['semester'],
            "status" => $post['status']
        );

        $this->db->where('id', $post['id']);
        $this->db->update($this->_table, $data);
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array('id' => $id));
    }
}
