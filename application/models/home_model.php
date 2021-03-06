<?php
/**
 * File Model
 */
class Home_model extends CI_Model{

    function __construct(){
        parent::__construct();
    }

    function get_links_pt(){
        $query=$this->db->get_where('lembaga_pendidikan',array('tingkat'=>'universitas'));
        if($query->num_rows()>0){
            return $query->result();
        }else{
            return FALSE;
        }
    }

    function insert_santri($data){
        
        $this->db->insert('santri_baru',$data);
    }
    function get_links_sch(){
        $query=$this->db->get_where('lembaga_pendidikan',array('tingkat'=>'sekolah'));
        if($query->num_rows()>0){
            return $query->result();
        }else{
            return FALSE;
        }
    }
	function get_links_pondok(){
        $query=$this->db->get_where('lembaga_pendidikan',array('tingkat'=>'pondok'));
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
    function c_kategori($num){
        $this->db->order_by('id_kategori', 'ASC');
        $data = $this->db->get('kategori', $num);
        return $data->result();    
    }
        function get_by_idkat($iid){
        $this->db->where('id_kategori',$iid);
        $query=$this->db->get('kategori');
        return $query->result();
    }
    public function get_child($id)
    {
       $data = array();
       $this->db->from('kabupaten');
       $this->db->where('induk',$id);
       $result = $this->db->get();
       foreach($result->result() as $row)
       {
          $data[$row->id] = $row->nama;
       }
       return $data;
    }
function select_pengumuman(){
        $konten=$this->db->query("SELECT * from pengumuman");
        if($konten->num_rows()>0){
            foreach ($konten ->result() as $row) {
                $data[]=$row;
            }
            return $data;
            }
        }
function getPropinsiList(){
        $result = array();
        $this->db->select('*');
        $this->db->from('propinsi');
        $this->db->order_by('propinsi','ASC');
        $array_keys_values = $this->db->get();
        foreach ($array_keys_values->result() as $row)
        {
            $result[0]= '-Pilih Propinsi-';
            $result[$row->id_propinsi]= $row->propinsi;
        }
 
        return $result;
    }
 
function getKabList(){
        $id_propinsi = $this->input->post('id_propinsi');
        $result = array();
        $this->db->select('*');
        $this->db->from('kabupaten');
        $this->db->where('id_propinsi',$id_propinsi);
        $this->db->order_by('kabupaten','ASC');
        $array_keys_values = $this->db->get();
        foreach ($array_keys_values->result() as $row)
        {
            $result[0]= '-Pilih Kabupaten-';
            $result[$row->id_kabupaten]= $row->kabupaten;
        }
 
        return $result;
    }
function getKecList(){
        $id_kabupaten = $this->input->post('id_kabupaten');
        $result = array();
        $this->db->select('*');
        $this->db->from('kecamatan');
        $this->db->where('id_kabupaten',$id_kabupaten);
        $this->db->order_by('kecamatan','ASC');
        $array_keys_values = $this->db->get();
        foreach ($array_keys_values->result() as $row)
        {
            $result[0]= '-Pilih Kecamatan-';
            $result[$row->id_kecamatan]= $row->kecamatan;
        }
 
        return $result;
    }

}