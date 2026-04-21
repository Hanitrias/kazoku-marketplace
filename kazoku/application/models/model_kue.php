<?php
class model_kue extends CI_model
{
    public function tampil_data()
    {
        return $this->db->get('tb_kue');
    }

    public function tambah_kue($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function edit_kue($where,$table)
    {
        return $this->db->get_where($table,$where);
    }

    public function update_kue($where,$data,$table)
    {
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    public function hapus_kue($where,$table)
    {
        $this->db->where($where);
        $this->db->delete($table);
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

    public function detail_kue($id_kue)
    {
        $result = $this->db->where('id_kue', $id_kue)->get('tb_kue');
        if($result->num_rows() > 0) {
            return $result->result();
        } else {
            return FALSE;
        }
    }
}
