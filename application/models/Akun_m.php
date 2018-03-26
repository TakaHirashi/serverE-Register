<?php

	class Akun_m extends CI_Model {
		public function login($email, $password){
			return $this->db->query("select * from akun where email='$email' and password='$password'")->result();
		}
		
		public function daftar($data){
			return $this->db->insert('akun', $data);
		}
	}

?>