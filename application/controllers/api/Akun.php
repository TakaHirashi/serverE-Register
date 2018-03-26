<?php
	require APPPATH.'/libraries/REST_Controller.php';
	use Restserver\Libraries\REST_Controller;
	class Akun extends REST_Controller {
		
		public function __construct($config='rest'){
			parent::__construct($config);
			$this->load->model("Akun_m");
			
		}
		
		
		
		public function login_post(){
			$email=$this->post('email');
			$password=$this->post('password');
			$akun=$this->Akun_m->login($email,$password);
			echo json_encode($akun);
//$this->response($akun,REST_Controller::HTTP_OK);
			}
			
		public function testing_get(){
			$result =$this->db->query("select * from akun")->result();
			echo json_encode($result);
		}
		public function daftar_post(){
			$data=array(
				'email' => $this->post('email'),
				'no_hp' => $this->post('no_hp'),
				'password' => $this->post('password'),
				'id_status' => 'A'
			);
			$result=$this->Akun_m->daftar($data);
			$this->response($result,REST_Controller::HTTP_OK);
		}
	}
?>