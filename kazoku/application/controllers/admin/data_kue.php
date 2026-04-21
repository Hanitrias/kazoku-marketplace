<?php
class data_kue extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
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
        $data['kue'] = $this->model_kue->tampil_data()->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_kue', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_aksi()
    {
        $nama_kue = $this->input->post('nama_kue');
        $keterangan = $this->input->post('keterangan');
        $kategori = $this->input->post('kategori');
        $harga = $this->input->post('harga');
        $stok = $this->input->post('stok');
        $gambar = $_FILES['gambar']['name'];
        if ($gambar =''){}else{
            $config['upload_path'] = './upload/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';

            $this->load->library('upload', $config);
            if(!$this->upload->do_upload('gambar')){
                echo "Gambar Gagal Diupload!";
            }
            else {
            $gambar=$this->upload->data('file_name');
            }
        }

        $data = array(
            'nama_kue' => $nama_kue,
            'keterangan' => $keterangan,
            'kategori' => $kategori,
            'harga' => $harga,
            'stok' => $stok,
            'gambar' => $gambar
        );

        $this->model_kue->tambah_kue($data,'tb_kue');
        redirect('admin/data_kue/index');

    }

    public function edit($id)
    {
        $where = array('id_kue' => $id);
        $data['kue'] = $this->model_kue->edit_kue($where, 'tb_kue')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/edit_kue', $data);
        $this->load->view('templates_admin/footer');
    }

    public function update()
    {
        $id = $this->input->post('id_kue');
        $nama_kue = $this->input->post('nama_kue');
        $keterangan = $this->input->post('keterangan');
        $kategori= $this->input->post('kategori');
        $harga = $this->input->post('harga');
        $stok = $this->input->post('stok');

        $data = array(
            'nama_kue' => $nama_kue,
            'keterangan' => $keterangan,
            'kategori' => $kategori,
            'harga' => $harga,
            'stok' => $stok,
        
        );

        $where = array(
            'id_kue' => $id
        );

        $this->model_kue->update_kue($where, $data, 'tb_kue');
        redirect ('admin/data_kue/index');
    }

    public function hapus ($id)
    {
        $where = array('id_kue' => $id);
        $this->model_kue->hapus_kue($where, 'tb_kue');
        redirect ('admin/data_kue/index');
    }
}
