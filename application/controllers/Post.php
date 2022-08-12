<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends MY_Controller {

    public function index()
    {
        $data['post'] = $this->db->join('account','username')->get('post')->result();
        $this->view('post/index',$data);
    }

    public function tambah()
    {
        $this->form_validation->set_rules('title', 'title', 'required');
        $this->form_validation->set_rules('conten', 'conten', 'required');
        if ($this->form_validation->run()==FALSE) {
            $this->view('post/tambah');
        } else {
            $tgl = date('Y-m-d');
            $user = $this->session->userdata('username');
            $data = [
                'title'=>$this->input->post('title'),
                'content'=>$this->input->post('conten'),
                'date'=>$tgl,
                'username'=>$user
            ];

           $this->db->insert('post',$data);
           redirect('post');
        }
    }

    public function edit($id)
    {
        $this->form_validation->set_rules('title', 'title', 'required');
        $this->form_validation->set_rules('conten', 'conten', 'required');
        if ($this->form_validation->run()==FALSE) {
            $data['post'] = $this->db->get_where('post',['idpost'=>$id])->row();
            $this->view('post/edit',$data);
        } else {
            $tgl = date('Y-m-d');
            $user = $this->session->userdata('username');
            $data = [
                'title'=>$this->input->post('title'),
                'content'=>$this->input->post('conten'),
                'date'=>$tgl,
                'username'=>$user
            ];

           $this->db->update('post',$data,['idpost'=>$id]);
           redirect('post');
        }
    }

    public function hapus($id)
    {
        $this->db->delete('post',['idpost'=>$id]);
        redirect('post');
    }

}