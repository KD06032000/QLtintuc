<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardController extends CI_Controller {
	public function _construct() {
		parent::_construct();
		
	}

	public function index()
	{
		$this->load->view('admin_template/header');
        $this->load->view('admin_template/navbar');
		$this->load->view('dashboard/index');
		$this->load->view('admin_template/footer');
	}
    public function logout() {
        // $this->session->sess_destroy();
        $this->session->unset_userdata('LoggedIn');
        $this->session->set_flashdata('message', 'Logout Successfully');
        redirect(base_url('index.php/login'));
    }
}
?>