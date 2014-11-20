<?php
/**
 * @author chinguyen.phpdev@gmail.com
 * @author Otcsoft.com - 2014
 */
class Config_model extends CI_Model
{
	/**
	 * Lay du lieu cua config
	 */
	public function getConfig()
	{
		$query = $this->db->get('config');
		if($query) {
			return $query->row();
		}else {
			return false;
		}
	} 
    
    public function getConfigHome()
    {
        $sql = "SELECT owner_fax, site_title, site_keyword, site_describe, FROM tbl_config ";
        $query = $this->db->query($sql);
        if($query){
            return $query->row();
        }else {
            return false;
        }
    } 
	
	
}
