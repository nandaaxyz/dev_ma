<?php
class Select_model extends CI_Model{
    
	function getAllData($table){
		return $this->db->get($table);
	}
	
	function getData($table_name,$kriteria){
		$this->db->select('*');
		$this->db->from($table_name);
		$this->db->where($kriteria);
		$myQuery = $this->db->get();
		return $myQuery;
	}
	
	function getDirectQuery($table_name,$select_query,$kriteria){
		$this->db->select($select_query);
		$this->db->from($table_name);
		$this->db->where($kriteria);
		$myQuery = $this->db->get();
		return $myQuery;
	}
	
	function getDataDesc($table_name,$kriteria,$field_desc){
		$this->db->select('*');
		$this->db->from($table_name);
		$this->db->where($kriteria);
		$this->db->order_by($field_desc,"desc");
		$myQuery = $this->db->get();
		return $myQuery;
	}
	
	function getDataDescTelat($table_name,$kriteria,$field_desc){
		$this->db->select('*');
		$this->db->from($table_name);
		$this->db->where($kriteria);
		$this->db->where('TglHarusKembali < TglKembali');
		$this->db->order_by($field_desc,"desc");
		$myQuery = $this->db->get();
		return $myQuery;
	}
	
	public function get2TableFilter($table1, $table2, $foreign_key,$kriteria)
    {
		//select dari 2 table dengan filter kriteria -Nanda Ananta
		/*contoh 
			$filters=array('unitkerja.IdUnitKerja'=>$this->session->userdata('KodeOrg'));
			$this->data['dt_fasilitas']=$this->select_model->get2TableFilter("fasilitas","unitkerja","IdUnitKerja",$filters);
		*/
		$this->db->select('*');
		$this->db->from($table1); 
		$this->db->join($table2, $table2 . '.' . $foreign_key . '=' . $table1 . '.' . $foreign_key, 'inner');
		$this->db->where($kriteria);
		$myQuery = $this->db->get(); 
		return $myQuery;
    }
	
	
	public function get2Table($table1, $table2, $foreign_key)
    {
		//select dari 2 table -Nanda Ananta
		/*contoh
			$this->data['dt_fasilitas']=$this->select_model->get2Table("fasilitas","unitkerja","IdUnitKerja");
		*/
		$this->db->select('*');
		$this->db->from($table1); 
		$this->db->join($table2, $table2 . '.' . $foreign_key . '=' . $table1 . '.' . $foreign_key, 'inner');    
		$myQuery = $this->db->get(); 
		return $myQuery;
    }
	
	public function get3TableFilter($table1, $table2, $table3, $foreign_key1, $foreign_key2, $kriteria)
    {
		//select dari 2 table dengan filter kriteria -Nanda Ananta
		/*contoh 
			$filters=array('unitkerja.IdUnitKerja'=>$this->session->userdata('KodeOrg'));
			$this->data['dt_fasilitas']=$this->select_model->get2TableFilter("fasilitas","unitkerja","IdUnitKerja",$filters);
		*/
		$this->db->select('*');
		$this->db->from($table1); 
		$this->db->join($table2, $table2 . '.' . $foreign_key1 . '=' . $table1 . '.' . $foreign_key1, 'inner');
		$this->db->join($table3, $table3 . '.' . $foreign_key2 . '=' . $table2 . '.' . $foreign_key2, 'inner');
		$this->db->where($kriteria);
		$myQuery = $this->db->get(); 
		return $myQuery;
    }
	
	public function get4TableFilter($table1, $table2, $table3, $table4, $foreign_key1, $foreign_key2, $foreign_key3, $kriteria)
    {
		//select dari 2 table dengan filter kriteria -Nanda Ananta
		/*contoh 
			$filters=array('unitkerja.IdUnitKerja'=>$this->session->userdata('KodeOrg'));
			$this->data['dt_fasilitas']=$this->select_model->get2TableFilter("fasilitas","unitkerja","IdUnitKerja",$filters);
		*/
		$this->db->select('*');
		$this->db->from($table1); 
		$this->db->join($table2, $table2 . '.' . $foreign_key1 . '=' . $table1 . '.' . $foreign_key1, 'inner');
		$this->db->join($table3, $table3 . '.' . $foreign_key2 . '=' . $table2 . '.' . $foreign_key2, 'inner');
		$this->db->join($table4, $table4 . '.' . $foreign_key3 . '=' . $table3 . '.' . $foreign_key3, 'inner');
		$this->db->where($kriteria);
		$myQuery = $this->db->get(); 
		return $myQuery;
    }
	
	public function get4TableFilterUser($table1, $table2, $table3, $table4, $foreign_key1, $foreign_key2, $foreign_key3, $kriteria)
    {
		$this->db->select('*');
		$this->db->from($table1); 
		$this->db->join($table2, $table2 . '.' . $foreign_key1 . '=' . $table1 . '.' . $foreign_key1, 'inner');
		$this->db->join($table3, $table3 . '.' . $foreign_key2 . '=' . $table2 . '.' . $foreign_key2, 'left');
		$this->db->join($table4, $table4 . '.' . $foreign_key3 . '=' . $table3 . '.' . $foreign_key3, 'left');
		$this->db->where($kriteria);
		$myQuery = $this->db->get(); 
		return $myQuery;
    }
	
	public function get5TableFilterUser($table1, $table2, $table3, $table4, $table5, $foreign_key1, $foreign_key2, $foreign_key3, $foreign_key4, $kriteria)
    {
		$this->db->select('*');
		$this->db->from($table1); 
		$this->db->join($table2, $table2 . '.' . $foreign_key1 . '=' . $table1 . '.' . $foreign_key1, 'inner');
		$this->db->join($table3, $table3 . '.' . $foreign_key2 . '=' . $table2 . '.' . $foreign_key2, 'inner');
		$this->db->join($table4, $table4 . '.' . $foreign_key3 . '=' . $table3 . '.' . $foreign_key3, 'left');
		$this->db->join($table5, $table5 . '.' . $foreign_key4 . '=' . $table4 . '.' . $foreign_key4, 'left');
		$this->db->where($kriteria);
		$myQuery = $this->db->get(); 
		return $myQuery;
    }
	
	
	
	function getMaxData($table_name,$fields_to_max){
		$this->db->select_max($fields_to_max, 'fields_to_max');
		$myQuery = $this->db->get($table_name);
		#echo $this->db->last_query();
		return $myQuery;
	}
	
	function getNotIn(){
		$sql = "Select KdPO, TglPO from po where KdPO not in(Select KdPO from retur)";
		$myQuery = $this->db->query($sql);
		return $myQuery;
	}
	
	function getDetil($kodepor){
		$sql = "select d.IdFasilitas, f.NmFasilitas, d.JmlPinjam, d.TglMulaiPinjam, d.JamMulaiPinjam, d.TglSelesaiPinjam, d.JamSelesaiPinjam from permohonan p
		inner join detilpermohonan d on d.IdPermohonan = p.IdPermohonan
		inner join fasilitas f on f.IdFasilitas = d.IdFasilitas
		where p.IdPermohonan = ?";
		$myQuery = $this->db->query($sql, $kodepor); 
		return $myQuery;
	}
	
	function getStok($KdFasilitas){
		$sql = "select f.KdFasilitas, f.NmFasilitas,  f.Stok - SUM(dp.jmlPermohonan) + SUM(dt.jmlAmbil)
		from fasilitas f, detilpermohonan dp, permohonan p, tembusan t, detiltembusan dt
		where f.KdFasilitas = dp.KdFasilitas AND dp.NoPermohonan = p.NoPermohonan
		AND p.NoPermohonan = t.NoPermohonan AND t.NoTembusan = dt.NoTembusan
		AND p.StatusDKKA = 1
		ORDER BY f.KdFasilitas
		";
		$myQuery = $this->db->query($sql, $kodepor); 
		return $myQuery;
	}
	
	function getDataPesan_bynopo($nopo){
		$this->db->select('po.*,pelanggan.*');
		$this->db->from('po');
		$this->db->join('pelanggan','pelanggan.id_customer=po.id_customer');
		$this->db->where('no_po',$nopo);
		$myQuery = $this->db->get();
		return $myQuery;
	}
	
	function getDataDetailPesan_bynopo($nopo){
		$this->db->select('detail_po.*,barang.*');
		$this->db->from('detail_popo');
		$this->db->join('barang','detail_po.kode_brg=barang.kode_brg');
		$this->db->where('detail_po.no_po',$nopo);
		$myQuery = $this->db->get();
		return $myQuery;
	}
	
	
}