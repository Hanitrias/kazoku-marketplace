<?php

class dashboard extends CI_Controller
{
 
    public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('role_id') != '2')
        {
            $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Anda Belum Login ! 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('auth/login');
        }
    }

    public function tambah_keranjang($id)
    {
        $kue = $this->model_kue->find($id);
        $qty = $_POST["$id"];
        // print_r($qty);die;
        $data = array(
            'id' => $kue->id_kue,
            'qty' => $qty,
            'price' => $kue->harga,
            'name' => $kue->nama_kue,
        );
        $this->cart->insert($data);
        redirect('welcome');
    }

    public function tambahin()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('keranjang');
        $this->load->view('templates/footer');
    }

    public function detail_keranjang()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('keranjang');
        $this->load->view('templates/footer');
    }

    public function hapus_keranjang()
    {
        $this->cart->destroy();
        redirect('welcome');
    }

    public function pembayaran()
    {
       

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pembayaran');
        $this->load->view('templates/footer');
    }

    public function proses_pemesanan()
    {
        
        $is_processed = $this->model_invoice->index();
        if($is_processed){
            $this->cart->destroy();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('proses_pemesanan');
            $this->load->view('templates/footer'); 
        }else {
            echo "Maaf, Pesanan Anda Gagal Diproses!!";
        }
    }

    public function detail($id_kue)
        {
            // $data['kue'] = $this->model_history->nilai($id_kue);
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

            $data['kue'] = $this->model_kue->detail_kue($id_kue);
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('detail_kue',$data);
            $this->load->view('templates/footer');
        }
         
}
