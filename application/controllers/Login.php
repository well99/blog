<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index()
    {
        $this->load->view('login');
    }

    public function cek_login()
    {
        $user = $this->input->post('username');
        $pass = $this->input->post('password');

        $data = $this->db->get_where('account',['username'=>$user, 'password'=>$pass])->row();
        if ($data) {
            $user_log = [
                'username'=>$data->username,
                'nama'=>$data->name,
                'role'=>$data->role
            ];
            $this->session->set_userdata($user_log);
            redirect('beranda');
        } else {
            redirect('login');
        }
    }

    public function logout()
    {
        $log = ['username','nama','role'];
        $this->session->unset_userdata($log);
        $this->session->sess_destroy();
        redirect('login');
    }
}