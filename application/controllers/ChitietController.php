<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ChitietController extends CI_Controller {
    public function _construct() {
        parent ::_construct();
    }

    public function index() {
        $this->load->model('PostModel');
        $data['post'] = $this->PostModel->selectPost();
        $this->load->view('chitietbaiviet',$data);
    }
}