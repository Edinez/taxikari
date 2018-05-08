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
        $this->load->view('template/header');
        $this->load->view('template/navigation');
        $this->load->view('home_vytvor');
        $this->load->view('template/footer');
    }

    public function ulozit() {
        $this->form_validation->set_rules('meno', 'Meno', 'required');
        $this->form_validation->set_rules('priezvisko', 'Priezvisko', 'required');
        $this->form_validation->set_rules('tel_kontakt', 'Tel_kontakt', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('mesto', 'Mesto', 'required');

        if ($this->form_validation->run())
        {
            $data = $this->input->post();
            unset($data['submit']);
            $this->load->model('queries');
            if($this->queries->addPost($data)){
                $this->session->set_flashdata('msg','Dáta sa úspešne uložili');
            }
            else {
                $this->session->set_flashdata('msg','Dáta sa nauložili úspešne, niekde je chyba!');
            }
            return redirect('home');
        }
        else
        {
            $this->load->view('template/header');
            $this->load->view('template/navigation');
            $this->load->view('home_vytvor');
            $this->load->view('template/footer');
        }
    }
}