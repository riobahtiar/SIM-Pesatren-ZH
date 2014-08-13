<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
/**
 * Auth library
 *
 * @author  Anggy Trisnawan
 */
class Auth{
   var $CI = NULL;
   function __construct()
   {
      // get CI's object
      $this->CI =& get_instance();
   }
   // untuk validasi login
   function do_login($email,$password)
   {
      // cek di database, ada ga?
      $this->CI->db->from('user');
      $this->CI->db->where('email',$email);
            //$this->CI->db->where('password=MD5("'.$password.'")','',false);
      $this->CI->db->where('password',$password);
      $result = $this->CI->db->get();
      if($result->num_rows() == 0)
      {
         // Email dan password tsb tidak ada
         return false;
      }
      else 
      {
         // ada, maka ambil informasi dari database
         $userdata = $result->row();
         $session_data = array(
            'id_user'   => $userdata->id_user,
            'nama_lengkap'      => $userdata->nama_lengkap,
            'level'     => $userdata->level
         );
         // buat session
         $this->CI->session->set_userdata($session_data);
         return true;
      }
   }
   // untuk mengecek apakah user sudah login/belum
   function is_logged_in()
   {
      if($this->CI->session->userdata('id_user') == '')
      {
         return false;
      }
      return true;
   }
   // untuk validasi di setiap halaman yang mengharuskan authentikasi
   function restrict()
   {
      if($this->is_logged_in() == false)
      {
         redirect('admin/login');
      }
   }
}