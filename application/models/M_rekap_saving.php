<?php

class M_rekap_saving extends CI_Model {

    function getRekap($tgl_start = null, $tgl_end = null) {
        $this->db->from('tb_dana_saving');

        if (!empty($tgl_start) && !empty($tgl_end)) {
            $this->db->where('tgl >=', $tgl_start);
            $this->db->where('tgl <=', $tgl_end);
        }
        
        return $this->db->get();
    }

}