<?php

class M_Pemasukan_saving extends CI_Model {

    function getPemasukan() {
        $this->db->where('pemasukan !=', 0);
        $this->db->order_by('id_saving', 'DESC');
        $query = $this->db->get('tb_dana_saving');
        return $query;
    }

    function save($tambah) {
        $this->db->insert('tb_dana_saving', $tambah);
    }

    function detail($where) {
        return $this->db->get_where('tb_dana_saving', $where);
    }

    function edit($tambah, $where) {
        $this->db->update('tb_dana_saving', $tambah, $where);
    }

    function hapus($where) {
        $this->db->delete('tb_dana_saving', $where);
    }
}