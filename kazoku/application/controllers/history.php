<?php

class history extends CI_Controller{
    public function history()
        {
            $data['kue'] = $this->model_history->tampil_history()->result();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('history',$data);
            $this->load->view('templates/footer');
        }

    public function nilai($id_kue)
        {
            $data['kue'] = $this->model_history->nilai($id_kue);
            $bintang5= $this->db->query("SELECT rating FROM tb_rating where rating='5'")->num_rows();
            $bintang4= $this->db->query("SELECT rating FROM tb_rating where rating='4'")->num_rows();
            $bintang3= $this->db->query("SELECT rating FROM tb_rating where rating='3'")->num_rows();
            $bintang2= $this->db->query("SELECT rating FROM tb_rating where rating='2'")->num_rows();
            $bintang1= $this->db->query("SELECT rating FROM tb_rating where rating='1'")->num_rows();
            $data['rata']= $this->db->query("SELECT avg(rating) as rating FROM tb_rating")->row()->rating;

            $data['jml5']=$bintang5;
            $data['jml4']=$bintang4;
            $data['jml3']=$bintang3;
            $data['jml2']=$bintang2;
            $data['jml1']=$bintang1;

            $total=$bintang1+$bintang2+$bintang3+$bintang4+$bintang5;

            $data['persen5']=$bintang5/$total*100;
            $data['persen4']=$bintang4/$total*100;
            $data['persen3']=$bintang3/$total*100;
            $data['persen2']=$bintang2/$total*100;
            $data['persen1']=$bintang1/$total*100;
            $data['total']=$total;



            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('nilai', $data);
            $this->load->view('templates/footer');
        }

    public function rating()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('rating');
        $this->load->view('templates/footer');
    }
      
}