<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Vote extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		is_logged_in();
		$this->load->model('vote_m');
	}

	public function index()
	{
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$data['kandidat'] = $this->db->get('kandidat')->result_array();
		$data['row'] = $this->vote_m->getdata();

		$cek = $this->session->userdata('id_user');
		$hasil = $this->db->get_where('hasil', ['id_pemilih' => $cek]);
		$banyak = $hasil->num_rows();

		if ($banyak >= 1) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
			Anda telah memberi suara!
		  </div>');
			redirect('auth/login');
		} else {
			$data['title'] = 'Vote -V';

			$this->load->view('templates/header', $data);
			$this->load->view('vote/index');
			$this->load->view('templates/footer');
		}
	}

	// $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
	// $data['kandidat'] = $this->db->get('kandidat')->result_array();
	// $data['row'] = $this->vote_m->getdata();

	// $cek = $this->session->userdata('id_user');
	// $hasil = $this->db->get_where('hasil', ['id_pemilih' => $cek]);
	// $banyak = $hasil->num_rows();

	// if ($banyak >= 1) {
	// 	$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
	//     A simple danger alert—check it out!</div>');
	// 	redirect('auth/login');
	// } else {
	// 	$data['title'] = 'Vote -V';

	// 	$this->load->view('templates/header', $data);
	// 	$this->load->view('vote/index');
	// 	$this->load->view('templates/footer');
	// }
	// }

	public function pilih($id)
	{
		$this->form_validation->set_rules('id_kandidat', 'kandidat', 'required');
		$this->form_validation->set_rules('id_pemilih', 'pemilih', 'required');

		$data['kandidat'] = $this->db->get_where('kandidat', ['id_kandidat' => $id])->row_array();
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();


		if ($this->form_validation->run() == FALSE) {
			$data['title'] = 'Vote -V';

			$this->load->view('templates/header', $data);
			$this->load->view('vote/pilih');
			$this->load->view('templates/footer');
		} else {
			$this->vote_m->pilih();
			redirect('vote/selamat');
		}
	}

	public function selamat()
	{
		echo "<script>alert('Terimakasih telah memilih!');
        window.location='" . site_url('auth/logout') . "';
        </script>";
	}


	// public function index()
	// {
	//     $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
	//     $data['kandidat'] = $this->db->get('kandidat')->result_array();
	//     $cek = $this->session->userdata('id_user');
	//     $hasil = $this->db->get_where('hasil', ['id_pemilih' => $cek]);
	//     $banyak = $hasil->num_rows();

	//     if ($banyak >= 1) {
	//         $this->session->set_flashdata('message', '<small class="text-danger" >Anda Telat Mengisi Data</small>');
	//         redirect('login');
	//     } else {
	//         $this->load->view('template/header');
	//         $this->load->view('vote/index', $data);
	//         $this->load->view('template/footer');
	//     }
	// }

	// public function pilih($id)
	// {
	//     $this->form_validation->set_rules('id_kandidat', 'Kandidat', 'required');
	//     $this->form_validation->set_rules('id_pemilih', 'Pemilih', 'required');

	//     $data['kandidat'] = $this->kandidat->getId($id);
	//     $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();


	//     if ($this->form_validation->run() == FALSE) {
	//         $this->load->view('template/header');
	//         $this->load->view('vote/pilih', $data);
	//         $this->load->view('template/footer');
	//     } else {
	//         $this->kandidat->pilih();
	//         redirect('hasil/selamat');
	//     }
	// }
}
