<?php

class Model extends CI_Model{

    public function update($condition,$table,$field)
    {
        $this->db->where($condition);
        $this->db->update($table,$field);
    }

    public function delete($table,$condition)
    {
        return $this->db->delete($table,$condition);
    }

    public function select($table)
    {
        return $this->db->get($table);
    }

    public function selectName($table,$condition)
    {
       return $this->db->get_where($table,$condition);
    }

    public function insert($table,$field)
    {
        $this->db->insert($table,$field);
    }
}