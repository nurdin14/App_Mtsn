<?php

class M_Pemasukan extends CI_Model {

    function getPemasukan() {
        $this->db->where('pemasukan !=', 0);
        $this->db->order_by('id_kas', 'DESC');
        $query = $this->db->get('tb_kas');
        return $query;
    }

    function save($tambah) {
        $this->db->insert('tb_kas', $tambah);
    }

    function detail($where) {
        return $this->db->get_where('tb_kas', $where);
    }

    function edit($tambah, $where) {
        $this->db->update('tb_kas', $tambah, $where);
    }

    function hapus($where) {
        $this->db->delete('tb_kas', $where);
    }
}