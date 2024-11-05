<?php

class M_slip extends CI_Model {

    function getSantri() {
        return $this->db->get('tb_santri');
    }
    
    function getSlip($where)
    {
        $id_santri = isset($where['id_santri']) ? $where['id_santri'] : null;

        $this->db->select('tb_santri.id_santri, tb_santri.nama, tb_santri.kelas, tb_santri.status, tb_pembayaran.bulan, tb_pembayaran.spp, tb_pembayaran.uang_makan, tb_pembayaran.keterangan');
        $this->db->from('tb_santri');
        $this->db->join('tb_pembayaran', 'tb_santri.nama = tb_pembayaran.nama_santri', 'left');

        if ($id_santri !== null) {
            $this->db->where('tb_santri.id_santri', $id_santri);
        }
        $this->db->where('tb_pembayaran.bulan IS NOT NULL', null, false);

        return $this->db->get();
    }




    function detail($where) {
        return $this->db->get_where('tb_santri', $where);
    }
}