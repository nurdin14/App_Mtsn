<?php

class M_santri extends CI_Model {

    function getSantri() {
        return $this->db->get('tb_santri');
    }

    function save($tambah) {
        $this->db->insert('tb_santri', $tambah);
    }

    function detail($where) {
        return $this->db->get_where('tb_santri', $where);
    }

    function edit($tambah, $where) {
        $this->db->update('tb_santri', $tambah, $where);
    }

    function hapus($where) {
        $this->db->delete('tb_santri', $where);
    }
}