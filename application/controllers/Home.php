<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
    public function index()
    {
        $this->load->model('queries');
        $posts = $this->queries->getZakaznici();

        $this->load->view('template/header');
        $this->load->view('template/navigation');
        $this->load->view('welcome_message',['posts'=>$posts]);
        $this->load->view('template/footer');
    }


    public function  create() {
        echo 'Create';
    }
}