<?php

class M_rekapMakan extends CI_Model {

    function getRekap($bln_start = null, $bln_end = null, $keterangan = 'All')
    {
        $this->db->select('tb_santri.nama, tb_santri.kelas, tb_pembayaran.bulan, tb_pembayaran.uang_makan, tb_pembayaran.keterangan, tb_pembayaran.tgl');
        $this->db->from('tb_santri');
        $this->db->join('tb_pembayaran', 'tb_santri.nama = tb_pembayaran.nama_santri', 'RIGHT'); // Gunakan INNER jika Anda hanya ingin data yang ada di kedua tabel

        if (!empty($bln_start) && !empty($bln_end)) {
            $this->db->where('tb_pembayaran.bulan >=', $bln_start);
            $this->db->where('tb_pembayaran.bulan <=', $bln_end);
        }

        if ($keterangan !== 'All') {
            $this->db->where('tb_pembayaran.keterangan', $keterangan);
        }

        return $this->db->get();
    }


}