<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('HomeModel');
        $this->data['post'] = $this->HomeModel->getPostHome();
        $this->data['brand'] = $this->HomeModel->getBrandHome();
    }

    public function index() {
        $this->load->view('pages/template/header',$this->data);
        $this->load->view('pages/home',$this->data);
        $this->load->view('pages/template/footer');
    }

    public function brand($id) {
     
    }
    public function post($id) {
        $this->data['post_details'] = $this->HomeModel->getPostDetails($id);
        $this->load->view('pages/template/header',$this->data);
        $this->load->view('pages/chitietbaiviet',$this->data);
        $this->load->view('pages/template/footer');
    }
}