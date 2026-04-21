<?php
    class rating extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('model_rating');
            if($this->session->userdata('role_id') != '1')
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
          
        public function index()
        {
            $data['rating'] = $this->model_rating->tampil_rating();
            $this->load->view('templates_admin/header');
            $this->load->view('templates_admin/sidebar');
            $this->load->view('admin/rating', $data);
            $this->load->view('templates_admin/footer');
        }
        
        public function hapus ($id_review)
        {
            $where = array('id_review' => $id_review);
            $this->model_rating->hapus_rating($where, 'tb_rating');
            redirect ('admin/rating/index');
        }
    }
