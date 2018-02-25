<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hasilpencarian extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('data_home');	
	}

	public function index(){
			$data['judul'] = "Hasil pencarian";	
			$data['rute'] = $this->data_home->cari();
			$data['sisa'] = $this->data_home->sisa();
			$this->load->view('hasilpencarian', $data);
		}

}
