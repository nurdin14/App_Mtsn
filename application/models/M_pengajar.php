<?php

class M_pengajar extends CI_Model {

    function getPengajar() {
        return $this->db->get('tb_pengajar');
    }

    function save($tambah) {
        $this->db->insert('tb_pengajar', $tambah);
    }

    function detail($where) {
        return $this->db->get_where('tb_pengajar', $where);
    }

    function edit($tambah, $where) {
        $this->db->update('tb_pengajar', $tambah, $where);
    }

    function hapus($where) {
        $this->db->delete('tb_pengajar', $where);
    }
}