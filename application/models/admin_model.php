<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Admin_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
        function get_pengumuman($num, $offset){
        $this->db->order_by('id_pengumuman', 'ASC');
        $data = $this->db->get('pengumuman', $num, $offset);
        return $data->result();    
}


}