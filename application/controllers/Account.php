<?php

class Account extends CI_Controller
{

    public function index()
    {
        $data['account'] = $this->db->get('tb_user')->result_array();

        $this->load->view('templates/header');
        $this->load->view('account/v_tampil', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        $this->load->view('templates/header');
        $this->load->view('account/v_add');
        $this->load->view('templates/footer');

        if (isset($_POST['simpan'])) {
            $tambah = [
                'id' => $this->input->post('id'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
                'role' => $this->input->post('role'),
            ];
            $this->db->insert('tb_user', $tambah);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <strong> Data Berhasil Ditambahkan.
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>');
            redirect('account/index');
        }
    }

    public function edit($id)
    {
        $where = ['id' => $id];
        $data['account'] = $this->db->get_where('tb_user',$where)->row_array();

        $this->load->view('templates/header');
        $this->load->view('account/v_edit', $data);
        $this->load->view('templates/footer');

        if (isset($_POST['simpan'])) {
            $tambah = [
                'id' => $this->input->post('id'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
                'role' => $this->input->post('role'),
            ];
            $this->db->update('tb_user',$tambah, $where);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <strong> Data Berhasil Diubah.
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>');
            redirect('account/index');
        }
    }

    public function hapus($id)
    {
        $where = ['id' => $id];
        $this->db->delete('tb_user',$where);

        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <strong> Data Berhasil Dihapus.
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                            </div>');
        redirect('account/index');
    }
}
