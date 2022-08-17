<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Model_user extends CI_Model
{
    private $_table = 'user';

    public function ambil_data($id)
    {
        $this->db->where('username', $id);
        return $this->db->get($this->_table)->row();
    }

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
            "username" => $post['username'],
            "password" => password_hash($post['password'], PASSWORD_DEFAULT),
            "name" => $post['name'],
            "role_id" => 2,
            "is_active" => 1
        );

        return $this->db->insert($this->_table, $data);
    }

    public function update()
    {
        $post = $this->input->post();
        $data = array(
            "username" => $post['username'],
            "password" => password_hash($post['password'], PASSWORD_DEFAULT),
            "name" => $post['name'],
            "role_id" => $post['role_id'],
            "is_active" => $post['is_active']
        );

        $this->db->where('id', $post['id']);
        $this->db->update($this->_table, $data);
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array('id' => $id));
    }
}
