<?php

class Admin extends CI_Controller {


	public function __construct()
	{

		 parent::__construct();
		 $this->load->model('E_passModel');
		 $this->load->model('Uoc_stdModel');
		 $this->load->model('Admin_dataModel');
		 $this->load->model('MacModel');
		 $this->load->model('DeviceModel');
		 $this->load->model('RadSKOModel');

	}

	public function index()
	{
		echo test_method('Hello World');
		$this->load->view('admin/index');
	}

	public function manage(){
		$this->load->view('admin/admin_manage');
	}

	public function adduser($user){
		$data = '';
		$this->load->view('admin/admin_manage',array("data"=>$data));
	}

	public function mac()
	{

		$data = $this->DeviceModel->SelectDevice(null);
		// $data= '';
		$this->load->view('admin/admin_mac_list',array('data'=> $data));
	}

	public function editmac($id){
		$data = $this->DeviceModel->SelectDevice($id);
		$fac_data = $this->RadSKOModel->getFacData();
		$this->load->view('admin/admin_edit_mac',array('data'=> $data,'fac_data'=>$fac_data));
	}

	public function login()
	{
		$this->load->view('admin/admin_login');
	}

	public function user()
	{
		$data = $this->DeviceModel->SelectUser();
		$this->load->view('admin/admin_user',array('data'=> $data));
	}

	function signin($user,$pass){

		$this->Admin_dataModel->Login($_POST['user'],$_POST['pass']);

	}

	public function submitdevice($person){
		if($person == 'student'){

		}elseif($person == 'professor'){

		}elseif ($person == 'staff') {
			# code...
		}elseif ($person == 'special') {
			# code...
		}




	}

}
