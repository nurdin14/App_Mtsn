<?php

class M_rekap_kas_makan extends CI_Model {

    function getRekap($tgl_start = null, $tgl_end = null) {
        $this->db->from('tb_kas_makan');

        if (!empty($tgl_start) && !empty($tgl_end)) {
            $this->db->where('tgl >=', $tgl_start);
            $this->db->where('tgl <=', $tgl_end);
        }
        
        return $this->db->get();
    }

}