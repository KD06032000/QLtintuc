<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {
    public function _construct() {
        parent ::_construct();
    }

    public function index() {
        $this->load->view('template/header');
		$this->load->view('login/index');
		$this->load->view('template/footer');
    }

    public function login() {
		$this->form_validation->set_rules('email','Email',['required'=>'you must provide a %s']);
		$this->form_validation->set_rules('password','Password',['required'=>'you must provide a %s']);

		if(($this->form_validation->run()) == true) {
			$this->load->model('LoginModel');
			$email = $this->input->post('email');
			$password = md5($this->input->post('password'));
			$result = $this->LoginModel->checkLogin($email,$password);
			if(count($result)>0) {
				$session_array = [
					'id' => $result[0]->id,
					'username' => $result[0]->username,
					'email' => $result[0]->email
					
				];
				$this->session->set_userdata('LoggedIn',$session_array);
				$this->session->set_flashdata('success', 'Login successfully');
				redirect(base_url('index.php/home'));
			}
			else {
				$this->session->set_flashdata('error', 'Wrong Email or Password please login again');
				redirect(base_url('index.php/login'));
			}
		} else {
			
			$this->index();
		}
	}
}