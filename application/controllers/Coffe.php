<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Coffe extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Pesen Kopi ♥';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/coffe_header', $data);
        $this->load->view('coffe/index');
        $this->load->view('templates/coffe_footer');
    }
    public function menu()
    {
        $data['title'] = 'Pesen Kopi ♥';
        $this->load->view('templates/coffe_header', $data);
        $this->load->view('coffe/menu');
        $this->load->view('templates/coffe_footer');
    }
    public function about()
    {
        $data['title'] = 'Pesen Kopi ♥';
        $this->load->view('templates/coffe_header', $data);
        $this->load->view('coffe/about');
        $this->load->view('templates/coffe_footer');
    }
    public function contact()
    {
        $data['title'] = 'Pesen Kopi ♥';
        $this->load->view('templates/coffe_header', $data);
        $this->load->view('coffe/contact');
        $this->load->view('templates/coffe_footer');
    }
}
