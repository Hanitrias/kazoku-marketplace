<?php
    class model_rating extends CI_model
    {
        public function index()
        {
            date_default_timezone_set('Asia/Jakarta');
            $id_review = $this->input->post('id_review');
            $username = $this->input->post('username');
            $rating = $this->input->post('rating');
            $review = $this->input->post('review');
            
            $rating = array(
                'id_review' => $id_review,
                'username' => $username,
                'rating' => $rating,
                'review' => $review,
                'tanggal' => date('Y-m-d H:i:s', mktime( date('H'), date('i'), date('s'), date('m'), date('d') + 1, date('Y'))),
            );

            $this->db->insert('tb_rating', $rating);
            $id_review = $this->db->insert_id();
            
        }
        public function tampil_rating()
        {
            $result = $this->db->get('tb_rating');
            if( $result->num_rows() > 0 ) {
                return $result->result();
            }else{
                return FALSE;
            }
        }

        public function hapus_rating($where,$table)
        {
            $this->db->where($where);
            $this->db->delete($table);
        }

        
}
