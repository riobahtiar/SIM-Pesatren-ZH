<?php
/**
 * File Model
 */
class Home_m extends CI_Model{

    function __construct(){
        parent::__construct();
    }

    function get_links_pt(){
        $query=$this->db->get('kampus');
        if($query->num_rows()>0){
            return $query->result();
        }else{
            return FALSE;
        }
    }
    function get_links_sch(){
        $query=$this->db->get('sekolah');
        if($query->num_rows()>0){
            return $query->result();
        }else{
            return FALSE;
        }
    }
    function get_pengumuman(){
        $query=$this->db->get('pengumuman',3);
        if($query->num_rows()>0){
            return $query->result();
        }else{
            return FALSE;
        }
    }

    function get_by_id($id){
        $this->db->where('nim',$id);
        $query=$this->db->get('mahasiswa');
        return $query->result();
    }
    function c_pengumuman($num, $offset){
        $this->db->order_by('id_pengumuman', 'ASC');
        $data = $this->db->get('pengumuman', $num, $offset);
        return $data->result();    
    }

}