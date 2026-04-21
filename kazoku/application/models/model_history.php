<?php
class model_history extends CI_model
{
    public function tampil_history()
    {
        return $this->db->get('tb_pemesanan');
    }
    
       public function find ($id)
    {
        $result = $this->db->where('id_kue', $id)
                           ->limit(1)
                           ->get('tb_kue');
        if($result->num_rows() > 0)
        {
            return $result->row();
        }
        else {
            return array();
        }
    }
    public function nilai($id_kue)
    {
        $result = $this->db->where('id_kue', $id_kue)->get('tb_kue');
        if($result->num_rows() > 0) {
            return $result->result();
        } else {
            return FALSE;
        }
    }

}