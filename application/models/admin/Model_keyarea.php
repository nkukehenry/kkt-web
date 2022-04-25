<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Model_keyarea extends CI_Model 
{

	function get_auto_increment_id()
    {
        $sql = "SHOW TABLE STATUS LIKE 'tbl_keyareas'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function get_auto_increment_id1()
    {
        $sql = "SHOW TABLE STATUS LIKE 'tbl_keyareas'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
	
    function show() {
        $sql = "SELECT * 
				FROM tbl_keyareas t1
                ORDER BY t1.id ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

   


    function add($data) {
        $this->db->insert('tbl_keyareas',$data);
        return $this->db->insert_id();
    }

    function update($id,$data) {
        $this->db->where('id',$id);
        $this->db->update('tbl_keyareas',$data);
    }

    function delete($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('tbl_keyareas');
    }


    function getData($id)
    {
        $sql = 'SELECT * FROM tbl_keyareas WHERE id=?';
        $query = $this->db->query($sql,array($id));
        return $query->first_row('array');
    }

    function keyarea_check($id)
    {
        $sql = 'SELECT * FROM tbl_keyareas WHERE id=?';
        $query = $this->db->query($sql,array($id));
        return $query->first_row('array');
    }

   
    
}