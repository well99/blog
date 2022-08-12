<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akun extends MY_Controller {

    public function index()
    {
        $data['akun'] = $this->db->get('account')->result();
        $this->view('akun/index',$data);
    }

    public function tambah()
    {
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('role', 'role', 'required');
        if ($this->form_validation->run()==FALSE) {
            $this->view('akun/tambah');
        } else {
            $data = [
                'username'=>$this->input->post('username'),
                'password'=>$this->input->post('password'),
                'name'=>$this->input->post('nama'),
                'role'=>$this->input->post('role')
            ];

           $this->db->insert('account',$data);
           redirect('akun');
        }
    }

    public function edit($id)
    {
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('role', 'role', 'required');
        if ($this->form_validation->run()==FALSE) {
            $data['akun'] = $this->db->get_where('account',['username'=>$id])->row();
            $this->view('akun/edit',$data);
        } else {
            $data = [
                'username'=>$this->input->post('username'),
                'password'=>$this->input->post('password'),
                'name'=>$this->input->post('nama'),
                'role'=>$this->input->post('role')
            ];

           $this->db->update('account',$data,['username'=>$id]);
           redirect('akun');
        }
    }

    public function hapus($id)
    {
        $this->db->delete('account',['username'=>$id]);
        redirect('akun');
    }
}