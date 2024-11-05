<?php

class M_pembayaran extends CI_Model {

    function getPembayaran() {
        return $this->db->get('tb_pembayaran');
    }

    function save($tambah) {
        $this->db->insert('tb_pembayaran', $tambah);
    }

    function detail($where) {
        return $this->db->get_where('tb_pembayaran', $where);
    }

    function edit($tambah, $where) {
        $this->db->update('tb_pembayaran', $tambah, $where);
    }

    function hapus($where) {
        $this->db->delete('tb_pembayaran', $where);
    }

    public function searchPembayaran($nama_santri = '', $bulan = '', $keterangan = '', $tahun = '')
    {
        $this->db->select('*');
        $this->db->from('tb_pembayaran');

        if (!empty($nama_santri)) {
            $this->db->like('nama_santri', $nama_santri);
        }

        if (!empty($bulan) && $bulan != 'All') {
            $this->db->where('MONTH(bulan)', $bulan); 
        }

        if (!empty($tahun) && $tahun != 'All') {
            $this->db->where('YEAR(bulan)', $tahun);
        }

        if ($keterangan !== 'All' && !empty($keterangan)) {
            $this->db->where('keterangan', $keterangan);
        }

        return $this->db->get();
    }

}