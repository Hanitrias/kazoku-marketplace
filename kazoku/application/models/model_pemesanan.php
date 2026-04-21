<?php
class model_pemesanan extends CI_model
{
public function pesan($data, $table)
    {
        $this->db->insert($table, $data);
    }

}