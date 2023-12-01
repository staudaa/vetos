<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hasil extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('hasil_m');
    }

    public function index()
    {
        $data['title'] = 'Hasil -V';
        $data['row'] = $this->hasil_m->get();

        //controller untuk count. mengambil data dari model sesuai function yang ada
        $data['pas1'] = $this->hasil_m->getPaslonSatu();
        $data['pas2'] = $this->hasil_m->getPaslonDua();
        $data['pas3'] = $this->hasil_m->getPaslonTiga();

        $this->load->view('templates/header', $data);
        $this->load->view('admin/hasil/hasil');
        $this->load->view('templates/footer');
    }

    // public function detail_data($id)
    // {
    //     $data['row'] = $this->hasil_m->detail_data($id);
    //     $data['title'] = 'Detail Hasil -V';

    //     $this->load->view('templates/header', $data);
    //     $this->load->view('vote/detail');
    //     $this->load->view('templates/footer');
    // }
}
