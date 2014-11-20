<?php
	class Price_model extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			
		}
		function getAllSearch($arraySearch = array() , $start, $limit)
		{
			$this->db->select('SQL_CALC_FOUND_ROWS   j . * ' , false);
			$this->db->from('tbl_cod j');
			if($arraySearch['keysearch'] != "" ){
				if($arraySearch['keysearch'] && $arraySearch['keysearch'] != "" ){
					$this->db->like('name',$arraySearch['keysearch']);
				}
			}
			else {
				$this->db->where('parentID', 0);
			}
			$this->db->limit($limit, $start);
			$query = $this->db->get();
			$sql= $this->db->last_query();
			$this->db->select("FOUND_ROWS() as total_record");
			$rRes = $this->db->get();
			$total_records = $rRes->row_array();
			$total_record = $total_records['total_record'];
			return array(
					'total_record' => $total_record,
					'price' => $query->result_array(),
					'sql' => $sql,
			);
		}
		public function getAllPrice()
		{
			$sql = "SELECT id, parentID, name ,value FROM tbl_cod ORDER BY name ASC ";
			$query = $this->db->query($sql);
			if($query){
				return $query->result_array();
			}else {
				return false;
			}
		}
		function getprice_lv2()
		{
			$this->db->cache_on();
			$sql = mysql_query("SELECT * FROM tbl_cod  ORDER BY stt ASC ");
			while ($row_details = mysql_fetch_array($sql)) {
				$array = array(
						'id' => $row_details['id'],
						'name' =>  $row_details['name'],
						'parent' => $row_details['parentID']
				);
				$rowass[] = $array;
			}
			return $rowass;
		}
		public function getprice_lv1()
		{
			$sql = "SELECT id, name FROM tbl_cod ";
			$query = $this->db->query($sql);
			if($query){
				return $query->result_array();
			}else {
				return false;
			}
		}
        
        
        // get toan bo cod = 0
        public function getAllCOD0()
        {
            $sql = "SELECT * FROM tbl_cod WHERE parentID = 0   ORDER BY stt ASC";
            $query = $this->db->query($sql);
            if($query){
                return $query->result_array();
            }else {
                return false;
            }
        }
      
       public function getAllid($id) {
        $query = $this->db->query("SELECT name, value FROM tbl_cod WHERE parentID = $id ");
        if ($query->num_rows > 0) {
            return $query->result_array();
        }
    }
        
        
        
	}
?>