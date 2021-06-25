<?php

class Kategori extends CI_Controller{
    public function electronic(){
        $data['electronic'] = $this->model_kategori->data_electronic()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('electronic', $data);
        $this->load->view('templates/footer');
    }

    public function men_clothes(){
        $data['men_clothes'] = $this->model_kategori->data_men_clothes()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('men_clothes', $data);
        $this->load->view('templates/footer');
    }

    public function women_clothes(){
        $data['women_clothes'] = $this->model_kategori->data_women_clothes()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('women_clothes', $data);
        $this->load->view('templates/footer');
    }

    public function children_clothes(){
        $data['children_clothes'] = $this->model_kategori->data_children_clothes()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('children_clothes', $data);
        $this->load->view('templates/footer');
    }

    public function sport_equipments(){
        $data['sport_equipments'] = $this->model_kategori->data_sport_equipments()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('sport_equipments', $data);
        $this->load->view('templates/footer');
    }
}
?>