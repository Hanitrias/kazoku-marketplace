<?php

class kategori extends CI_Controller
{
    public function Spesial()
    {
        $data['Spesial'] = $this->model_kategori->data_Spesial()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('Spesial',$data);
        $this->load->view('templates/footer');
    }

    public function Terbaru()
    {
        $data['Terbaru'] = $this->model_kategori->data_Terbaru()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('Terbaru',$data);
        $this->load->view('templates/footer');
    }

    public function Jadoel()
    {
        $data['Jadoel'] = $this->model_kategori->data_Jadoel()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('Jadoel',$data);
        $this->load->view('templates/footer');
    }

    

}