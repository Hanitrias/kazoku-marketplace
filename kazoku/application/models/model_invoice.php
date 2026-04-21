<?php
    class model_invoice extends CI_model
    {
        public function index()
        {
            // print_r($_FILES);
            // die;
            date_default_timezone_set('Asia/Jakarta');
            $nama = $this->input->post('nama');
            $alamat = $this->input->post('alamat');
            $bukti = $_FILES['bukti'];
            
            if ($bukti =''){}else{
                $config['upload_path'] = './upload/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
    
                $this->load->library('upload', $config);
                if(!$this->upload->do_upload('bukti')){
                    echo "Gambar Gagal Diupload!"; die();
                }
                else {
                    $bukti=$this->upload->data('file_name');
                }
            }

            $invoice = array(
                'nama' => $nama,
                'alamat' => $alamat,
                'tgl_pesan' => date('Y-m-d H:i:s'),
                'batas_pembayaran' => date('Y-m-d H:i:s', mktime( date('H'), date('i'), date('s'), date('m'), date('d') + 1, date('Y'))),
                
            );
            
            $this->db->insert('tb_invoice', $invoice);
            $id_invoice = $this->db->insert_id();

            foreach ($this->cart->contents() as $item){
                $data = array (
                    'id_invoice' => $id_invoice,
                    'id_kue' => $item['id'],
                    'nama_kue' => $item['name'],
                    'jumlah' => $item['qty'],
                    'harga' => $item['price'],
                    'bukti' => $bukti
                );
                $this->db->insert('tb_pemesanan', $data);
            }

            return TRUE;
        }
        public function tampil_data()
        {
            $result = $this->db->get('tb_invoice');
            if( $result->num_rows() > 0 ) {
                return $result->result();
            }else{
                return FALSE;
            }
        }

        public function ambil_id_invoice($id_invoice)
        {
            $result = $this->db->where('id_invoice', $id_invoice)->limit(1)->get('tb_invoice');
            if($result->num_rows() > 0){
                return $result->row();
            } else {
                return FALSE;
            }
        }

        public function ambil_id_pemesanan($id_invoice)
        {
            $result = $this->db->where('id_invoice', $id_invoice)->get('tb_pemesanan');
            if($result->num_rows() > 0){
                return $result->result();
            } else {
                return FALSE;
            }
        }
    }
