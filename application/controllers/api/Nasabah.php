<?php
	require APPPATH.'/libraries/REST_Controller.php';
	use Restserver\Libraries\REST_Controller;
	class Nasabah extends REST_Controller {
		
		public function __construct($config='rest'){
			parent::__construct($config);
			$this->load->model("Nasabah_m");
		}
		
		public function provinsi_get(){
			$result=$this->Nasabah_m->listProvinsi();
			$this->response($result,REST_Controller::HTTP_OK);
			}
		public function kota_kab_get(){
			$id_prov=$this->get('id_provinsi');
			$result=$this->Nasabah_m->listKotaKab($id_prov);
			$this->response($result,REST_Controller::HTTP_OK);
			}
		public function jk_get(){
			$result=$this->Nasabah_m->listJK();
			$this->response($result,REST_Controller::HTTP_OK);
			}
		public function agama_get(){
			$result=$this->Nasabah_m->listAgama();
			$this->response($result,REST_Controller::HTTP_OK);
			}
		public function status_nikah_get(){
			$result=$this->Nasabah_m->listStatusNikah();
			$this->response($result,REST_Controller::HTTP_OK);
			}
		public function jenis_pekerjaan_get(){
			$result=$this->Nasabah_m->listJenisPekerjaan();
			$this->response($result,REST_Controller::HTTP_OK);
			}
		public function kategori_penghasilan_get(){
			$result=$this->Nasabah_m->listKategoriPenghasilan();
			$this->response($result,REST_Controller::HTTP_OK);
			}
		
		public function pekerjaan_post(){
			$data=array(
				'id_nasabah' => $this->post('id_nasabah'),
				'id_jenis_pekerjaan' => $this->post('id_jenis_pekerjaan'),
				'id_kategori_penghasilan' => $this->post('id_kategori_penghasilan'),
				'no_npwp' => $this->post('no_npwp'),
				'nama_instansi' => $this->post('nama_instansi'),
				'alamat_instansi' => $this->post('alamat_instansi'),
				'kode_pos_instansi' => $this->post('kode_pos_instansi')
			);
			$result=$this->Nasabah_m->ins_pekerjaan($data);
			$this->response($result,REST_Controller::HTTP_OK);
		}
		
		public function alamat_post(){
			$data=array(
				'id_nasabah' => $this->post('id_nasabah'),
				'id_provinsi' => $this->post('id_provinsi'),
				'id_kota_kab' => $this->post('id_kota_kab'),
				'nama_jalan' => $this->post('nama_jalan'),
				'rt' => $this->post('rt'),
				'rw' => $this->post('rw'),
				'kelurahan' => $this->post('kelurahan')
				'kecamatan' => $this->post('kecamatan')
				'kode_pos' => $this->post('kode_pos')
				'status_tempat_tinggal' => $this->post('status_tempat_tinggal')
				
			);
			$result=$this->Nasabah_m->ins_alamat($data);
			$this->response($result,REST_Controller::HTTP_OK);
		}
		
		public function daftar_nasabah_post(){
			$data=array(
				'id_akun' => $this->post('id_akun'),
				'no_kartu_identitas' => $this->post('no_kartu_identitas'),
				'nama' => $this->post('nama'),
				'tanggal_lahir' => $this->post('tanggal_lahir'),
				'nama_ibu' => $this->post('nama_ibu'),
				'foto_diri' => $this->post('foto_diri'),
				'foto_kartuidentitas' => $this->post('foto_kartuidentitas'),
				'foto_npwp' => $this->post('foto_npwp'),
				'jenis_kelamin' => $this->post('jenis_kelamin')
			);
			$result=$this->Nasabah_m->daftar($data);
			$this->response($result,REST_Controller::HTTP_OK);
		}

	}
?>