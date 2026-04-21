<?php

class model_kategori extends CI_Model
{
    public function data_Spesial()
    {
        return $this->db->get_where("tb_kue",array('kategori' => 'Spesial'));
    }

    public function data_Terbaru()
    {
        return $this->db->get_where("tb_kue",array('kategori' => 'Terbaru'));
    }

    public function data_Jadoel()
    {
        return $this->db->get_where("tb_kue",array('kategori' => 'Jadoel'));
    }


}