<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Admin_model extends CI_Model{
   public function get_menu_for_level($user_level)
   {
      $this->db->from('menu');
      $this->db->like('menu_allowed','+'.$user_level.'+');
      $result = $this->db->get();
      return $result;
   }
}