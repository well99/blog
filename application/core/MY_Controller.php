<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class MY_Controller extends CI_Controller
{
    public function view($content, $data = NULL)
    {
        $layout['header'] = $this->load->view('layout/header','',TRUE);
        $layout['sidebar'] = $this->load->view('layout/sidebar','',TRUE);
        $layout['navbar'] = $this->load->view('layout/navbar','',TRUE);
        $layout['content']= $this->load->view($content,$data,TRUE);
        $layout['logout'] = $this->load->view('layout/logout','',TRUE);
        $layout['js'] = $this->load->view('layout/js','',TRUE);
        $this->load->view('layout/main', $layout);
    }
}