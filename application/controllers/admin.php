<?php
class Admin extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('data_crud');
    	$this->load->helper('url');

		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}

	}

	function index(){
		$this->load->view('v_admin');
	}

	function rute(){
		$data['rute'] = $this->data_crud->tampil_datarute()->result();
		$this->load->view('v_rute',$data);
	}

	function rute_data(){
		$data['rute_data'] = $this->data_crud->tampil_datarute()->result();
		$this->load->view('v_rute_data',$data);
	}

	function hapus_rute($id){
		$where = array('id' => $id );
		$this->data_crud->hapus_data($where, 'rute');
		redirect('admin/rute_data');
	}

	function proses_tambah(){
  		$depart = $this->input->post('depart');
  		$rute_from = $this->input->post('rutefrom');
  		$rute_to = $this->input->post('ruteto');
  		$price = $this->input->post('price');


  		$data = array(
   		'depart_at' => $depart,
   		'rute_from' => $rute_from,
   		'rute_to' => $rute_to,
   		'price' => $price
   		);
  		$this->data_crud->input_datarute($data,'rute');
  		redirect('admin/rute');
 	}

	public function edit_rute($id)
	{
		$where = array('id' => $id );
		$data['rute']=$this->data_crud->edit_rute($where, 'rute')->result();
		$this->load->view('edit_rute', $data);
	}

	public function update_rute()
	{
		$id = $this->input->post('id');
		$depart_at = $this->input->post('depart_at');
		$rute_from = $this->input->post('rute_from');
		$rute_to = $this->input->post('rute_to');
		$price = $this->input->post('price');
		$transportationid = $this->input->post('transportationid');

		$data = array(
			'depart_at' => $depart_at,
			'rute_from' => $rute_from,
			'rute_to' => $rute_to,
			'price' => $price,
			'transportationid' => $transportationid
		);

		$where = array(
			'id' => $id
		);

		$this->data_crud->update_data($where,$data,'rute');
		redirect('admin/rute_data');
	}
}
?>
