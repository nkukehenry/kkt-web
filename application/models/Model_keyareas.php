<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_keyareas extends CI_Model 
{
    
    public function get_keyareas()
    {
        $query = $this->db->query("SELECT * from tbl_keyareas WHERE lang_id=? ORDER BY id DESC", [$_SESSION['sess_lang_id']]);
        return $query->result_array();
    }
   
    
}