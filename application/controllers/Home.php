<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('vodici_queries');
        $this->load->model('queries');

    }

    public function index()
    {
        $data['posts'] = $this->queries->getZakaznici();
        $data['vodici1'] = $this->vodici_queries->getVodici();
        $this->load->view('template/header');
        $this->load->view('template/navigation');
        $this->load->view('welcome_message',$data);
        $this->load->view('template/footer');
    }


    public function  create() {
        $this->load->view('template/header');
        $this->load->view('template/navigation');
        $this->load->view('home_vytvor');
        $this->load->view('template/footer');
    }

    public function  createVodic() {
        $this->load->view('template/header');
        $this->load->view('template/navigation');
        $this->load->view('vytvor_vodic');
        $this->load->view('template/footer');
    }

    public function update_zakaznici($id){
        $this->load->model('queries');
        $post = $this->queries->getSingleZakaznici($id);
        $this->load->view('template/header');
        $this->load->view('template/navigation');
        $this->load->view('update_zakaznici',['post'=>$post]);
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
                $this->session->set_flashdata('msg_zakaznici','Dáta sa úspešne uložili');
            }
            else {
                $this->session->set_flashdata('msg_zakaznici','Dáta sa neuložili úspešne, niekde je chyba!');
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

    public function ulozit_vodic() {
        $this->form_validation->set_rules('meno', 'Meno', 'required');
        $this->form_validation->set_rules('priezvisko', 'Priezvisko', 'required');
        $this->form_validation->set_rules('tel_kontakt', 'Tel_kontakt', 'required');
        $this->form_validation->set_rules('cena', 'Cena', 'required');

        if ($this->form_validation->run())
        {
            $data = $this->input->post();
            unset($data['submit_vodic']);
            $this->load->model('vodici_queries');
            if($this->vodici_queries->addVodic($data)){
                $this->session->set_flashdata('msg_vodici','Dáta sa úspešne uložili');
            }
            else {
                $this->session->set_flashdata('msg_vodici','Dáta sa neuložili úspešne, niekde je chyba!');
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

    public function zmenit($id){
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
            if($this->queries->updatePost($data,$id)){
                $this->session->set_flashdata('msg','Dáta sa úspešne aktualizovali');
            }
            else {
                $this->session->set_flashdata('msg','Dáta sa neaktualizovali úspešne, niekde je chyba!');
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

    public function view_zakaznici($id){
        $this->load->model('queries');
        $post = $this->queries->getSingleZakaznici($id);
        $this->load->view('template/header');
        $this->load->view('template/navigation');
        $this->load->view('view_zakaznici',['post'=>$post]);
        $this->load->view('template/footer');
    }

    public function delete_zakaznici($id){
        $this->load->model('queries');
        if ($this->queries->delete_Zakaznik($id)){
            $this->session->set_flashdata('msg','Zákazník bol úspečne vymazaný');
        }
        else {
            $this->session->set_flashdata('msg','Vymazanie zákazníka neprebehlo úspešne, niekde je chyba!');
        }
        return redirect('home');

    }
}