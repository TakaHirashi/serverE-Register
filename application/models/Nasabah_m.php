<?php

	class Nasabah_m extends CI_Model {
		public function daftar($data){
			return $this->db->insert('nasabah', $data);
		}
		public function listProvinsi(){
			return $this->db->get("provinsi")->result();
		}
		public function listKotaKab($id_prov){
			return $this->db->query("select * from kota_kabupaten where id_provinsi = '$id_prov'")->result();
		}
		public function listJK(){
			return $this->db->query("select * from properti_sistem where jenis_properti = 'jenis_kelamin'")->result();
		}
		public function listAgama(){
			return $this->db->query("select * from properti_sistem where jenis_properti = 'agama'")->result();
		}
		public function listStatusNikah(){
			return $this->db->query("select * from properti_sistem where jenis_properti = 'status_pernikahan'")->result();
		}
		public function listJenisPekerjaan(){
			return $this->db->get("jenis_pekerjaan")->result();
		}
		public function listKategoriPenghasilan(){
			return $this->db->get("kategori_penghasilan")->result();
		}
		public function ins_alamat($data){
			return $this->db->insert('alamat', $data);
		}
		public function ins_pekerjaan($data){
			return $this->db->insert('pekerjaan', $data);
		}
		
		public function listCalonNasabah(){
			return $this->db->query("select id_nasabah, nama, status from (akun as a inner join status as s on s.id_status = a.id_status) inner join nasabah as n on n.id_akun = a.id_akun where id_status = 'B'")->result;
		}
		
		public function listCalonNasabah($id_nasabah){
			//get nasabah, nanti dibuat function di mysql
		}
		
		public function hapusCalonNasabah($id_nasabah){
			$this->db->where('id_nasabah',$id_nasabah);
			return $this->db->delete('nasabah');
		}
	}

?>