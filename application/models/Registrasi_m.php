<?php
	class Registrasi_m extends CI_Model {
		public function verifikasi($data){
			return $this->db->insert('registrasi',$data);
		}
		
		public function approve($id_nasabah, $data){
			$this->db->where('id_nasabah',$id_nasabah);
			return $this->db->update('registrasi',$data);
		}
	}

?>