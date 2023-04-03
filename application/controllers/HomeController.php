<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {
    public function _construct() {
        parent ::_construct();
    }

    public function index() {
        $this->load->model('BrandModel');
        $data['brands'] = $this->BrandModel->selectBrand();
        $this->load->model('PostModel');
        $datapost['posts'] = $this->PostModel->selectPost();
        $this->load->view('home',$data);
    }

}