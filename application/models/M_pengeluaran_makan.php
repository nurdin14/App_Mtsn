<?php

class M_pengeluaran_makan extends CI_Model {

    function getPemasukan()
    {
        $this->db->where('pengeluaran !=', 0);
        $this->db->order_by('id_kas_makan', 'DESC');
        $query = $this->db->get('tb_kas_makan');
        return $query;
    }

    function save($tambah)
    {
        $this->db->insert('tb_kas_makan', $tambah);
    }

    function detail($where)
    {
        return $this->db->get_where('tb_kas_makan', $where);
    }

    function edit($tambah, $where)
    {
        $this->db->update('tb_kas_makan', $tambah, $where);
    }

    function hapus($where)
    {
        $this->db->delete('tb_kas_makan', $where);
    }
}