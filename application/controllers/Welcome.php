<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {
	
	public function __construct()
	{
		parent::__construct();
	$this->load->library('session');
		
	}
	
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('formlog');
	}

	public function hal()
	{
	$this->load->view('hallog');
	}

	public function ceklog()
	{
		$user = array(
			array("username" => "andi", "password" => 1234),
			array("username" => "budi", "password" => 4321),
			array("username" => "charlie", "password" => 3821),
		  );

		  
		  $this->session->set_userdata('data',$user);

		  
		  $username = $this->input->post('user');
		  $pass = $this->input->post('pas');		
		for ($i=0; $i < count($user) ; $i++) { 
			if ($user[$i]['username']==$username && $user[$i]['password']==$pass ) {
				
				redirect('welcome/hal','refresh');
				
			}
		}
				
			redirect('welcome/index','refresh');
			
		
	}

	public function edit()
	{
		$data1 = $this->input->get('user');
		$data2 = $this->input->get('pas');

		$data = array(
			array('user' => $data1 , 'pass' => $data2)
		);

		
		$this->session->set_userdata('baru',$data);
		

		
		$this->load->view('hallog');
		
		

	}

	public function logout()
	{
		$this->session->sess_destroy();
		$this->load->view('formlog');

	}
}
