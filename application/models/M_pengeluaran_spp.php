<?php

class M_pengeluaran_spp extends CI_Model {

    function getPemasukan()
    {
        $this->db->where('pengeluaran !=', 0);
        $this->db->order_by('id_kas_spp', 'DESC');
        $query = $this->db->get('tb_kas_spp');
        return $query;
    }

    function save($tambah)
    {
        $this->db->insert('tb_kas_spp', $tambah);
    }

    function detail($where)
    {
        return $this->db->get_where('tb_kas_spp', $where);
    }

    function edit($tambah, $where)
    {
        $this->db->update('tb_kas_spp', $tambah, $where);
    }

    function hapus($where)
    {
        $this->db->delete('tb_kas_spp', $where);
    }
}