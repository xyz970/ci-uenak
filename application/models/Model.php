<?php

class Model extends CI_Model{

    public function update($condition,$table,$field)
    {
        $this->db->where($condition);
        $this->db->update($table,$field);
        
    }

    public function select()
    {
        return $this->db->get('orders');
    }

    public function selectName($condition, $table)
    {
       return $this->db->get_where($table,$condition);
    }

    public function insert($table,$field)
    {
        $this->db->insert($table,$field);
    }
}