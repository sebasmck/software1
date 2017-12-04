<?php 
	
	class Usuario extends CI_Model{
		
		function __construct(){
			parent::__construct();
		}

		function getUser(){
			$query = $this->db->get('usuario');
			return $query->result_array();  
		}

	public function getUserById($id){
		$this->db->where('id', $id); 
		$query = $this->db->get('usuario');
			return $query->row();
	}

	}

 ?>