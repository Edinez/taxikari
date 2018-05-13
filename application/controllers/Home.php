<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('vodici_queries');
        $this->load->model('queries');
        $this->load->model('vozidlo_queries');
        $this->load->model('smena_queries');
    }

    public function index()
    {
        $data['posts'] = $this->queries->getZakaznici();
        $data['vodici1'] = $this->vodici_queries->getVodici();
        $data['vozidlo1'] = $this->vozidlo_queries->getVozidlo();
        $data['smena2'] = $this->smena_queries->getSmenyVsetky2();
        $this->load->view('template/header');
        $this->load->view('template/navigation');
        $this->load->view('welcome_message',$data);
        $this->load->view('template/footer');
    }


    public function  create_zakaznik() {
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

    public function  createVozidlo() {
        $this->load->view('template/header');
        $this->load->view('template/navigation');
        $this->load->view('vytvor_vozidlo');
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

    public function update_vodici($id){
        $this->load->model('vodici_queries');
        $post_vodici_update = $this->vodici_queries->getSingleVodici($id);
        $this->load->view('template/header');
        $this->load->view('template/navigation');
        $this->load->view('update_vodici',['post_vodici_update'=>$post_vodici_update]);
        $this->load->view('template/footer');
    }

    public function ulozit_zakaznik() {
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
            $this->load->view('vytvor_vodic');
            $this->load->view('template/footer');
        }
    }

    public function ulozit_vozidlo() {
        $this->form_validation->set_rules('znacka', 'Znacka', 'required');
        $this->form_validation->set_rules('model', 'Model', 'required');
        $this->form_validation->set_rules('rok', 'Rok', 'required');

        if ($this->form_validation->run())
        {
            $data = $this->input->post();
            unset($data['submit_vozidlo']);
            $this->load->model('vozidlo_queries');
            if($this->vozidlo_queries->addVozidlo($data)){
                $this->session->set_flashdata('msg_vozidlo','Dáta sa úspešne uložili');
            }
            else {
                $this->session->set_flashdata('msg_vozidlo','Dáta sa neuložili úspešne, niekde je chyba!');
            }
            return redirect('home');
        }
        else
        {
            $this->load->view('template/header');
            $this->load->view('template/navigation');
            $this->load->view('vytvor_vozidlo');
            $this->load->view('template/footer');
        }
    }

    public function zmenit_zakaznik($id){
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

    public function zmenit_vodic($id){
        $this->form_validation->set_rules('meno', 'Meno', 'required');
        $this->form_validation->set_rules('priezvisko', 'Priezvisko', 'required');
        $this->form_validation->set_rules('tel_kontakt', 'Tel_kontakt', 'required');
        $this->form_validation->set_rules('cena', 'Cena', 'required');

        if ($this->form_validation->run())
        {
            $data = $this->input->post();
            unset($data['submit_update_vodic']);
            $this->load->model('vodici_queries');
            if($this->vodici_queries->updateVodic($data,$id)){
                $this->session->set_flashdata('msg_vodici','Dáta sa úspešne aktualizovali');
            }
            else {
                $this->session->set_flashdata('msg_vodici','Dáta sa neaktualizovali úspešne, niekde je chyba!');
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

    public function view_vodici($id){
        $this->load->model('vodici_queries');
        $post = $this->vodici_queries->getSingleVodici($id);
        $this->load->view('template/header');
        $this->load->view('template/navigation');
        $this->load->view('view_vodici',['post_vodic'=>$post]);
        $this->load->view('template/footer');
    }

    public function view_vozidlo($id){
        $this->load->model('vozidlo_queries');
        $post_vozidlo = $this->vozidlo_queries->getSingleVozidlo($id);
        $this->load->view('template/header');
        $this->load->view('template/navigation');
        $this->load->view('view_vozidlo',['post_vozidlo'=>$post_vozidlo]);
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

    public function delete_vodici($id){
        $this->load->model('vodici_queries');
        if ($this->vodici_queries->delete_Vodic($id)) {
            $this->session->set_flashdata('msg','Vodič bol úspečne odstránený');
        }else {
            $this->session->set_flashdata('msg','Vymazanie vodiča neprebehlo úspešne, niekde je chyba!');
        }
        return redirect('home');
    }

    public function delete_vozidlo($id){
        $this->load->model('vozidlo_queries');
        if ($this->vozidlo_queries->delete_Vozidlo($id)) {
            $this->session->set_flashdata('msg_vozidlo','Auto bolo úspečne vymazané');
        }else {
            $this->session->set_flashdata('msg_vozidlo','Vymazanie vozidla z autoparku neprebehlo úspešne, niekde je chyba!');
        }
        return redirect('home');
    }
}