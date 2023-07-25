<?php
class App_model extends CI_Model{
    
    function simpan($table_name,$post_data){
        $this->db->insert($table_name,$post_data);
        return $this->db->insert_id();
    }
    
    function update($table_name,$post_data,$kriteria){
        $this->db->where($kriteria);
        $myQuery = $this->db->update($table_name,$post_data);
		return $myQuery;
		
    }
    
    function hapus($table_name,$kriteria){
        $this->db->where($kriteria);
        $myQuery = $this->db->delete($table_name);
		return $myQuery;
		
    }
	function cekData($table_name,$kriteria){
		
		$this->db->select('*');
        $this->db->from($table_name);
        $this->db->where($kriteria);
		$myQuery = $this->db->get();
		
        return $myQuery;
	}
}