<?php

class M_pengurus extends CI_Model {

    function getPengurus() {
        return $this->db->get('tb_pengurus');
    }

    function save($tambah) {
        $this->db->insert('tb_pengurus', $tambah);
    }

    function detail($where) {
        return $this->db->get_where('tb_pengurus', $where);
    }

    function edit($tambah, $where) {
        $this->db->update('tb_pengurus', $tambah, $where);
    }

    function hapus($where) {
        $this->db->delete('tb_pengurus', $where);
    }
}