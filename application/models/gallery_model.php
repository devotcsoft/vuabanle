<?php 
/**
 * vuabanle.vn
 * @package     vuabanle.vn
 * @author      chinguyen.phpdev@gmail.com
 * @copyright   Copyright (c) 7/2014, OtcSoft-company
 */
class Gallery_model extends CI_Model
{
    
    // tra ra anh slide
    public function getGallery()
    {
        $sql = "SELECT galleryImage FROM tbl_gallery ";
        $query = $this->db->query($sql);
        if($query){
            return $query->row();
        }else {
            return FALSE;
        }
    }
}
