<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users_model extends CI_Model {

function __construct()

{

parent::__construct();

$this->load->database();

}

public function get_all_users()
{

$query = $this->db->order_by("id", "desc")->get('Register');

return $query->result();

}

}

?>