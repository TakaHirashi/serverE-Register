<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CustomerService extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model("Nasabah_m");
		$this->load->helper(array('form','url'));
		$this->load->model("Registrasi_m");
		
	public function index(){
		$result['nasabah']=$this->Nasabah_m->listCalonNasabah()->result_array();
		$this->load->view('ListCalonNasabah_v',$result);
	}
	
	public function infoNasabah($id_nasabah='0'){
		$nasabah=$this->Nasabah_m->listCalonNasabah($id_nasabah)->result();
		$this->load->view('InfoCalonNasabah_v',$nasabah);
	}
	
	//fungsi verifikasi 
}
