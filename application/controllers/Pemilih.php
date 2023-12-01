<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pemilih extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		is_logged_in();
		$this->load->model('pemilih_m');
	}

	public function index()
	{
		$data['title'] = 'Pemilih -V';
		$data['row'] = $this->pemilih_m->get();

		$this->load->view('templates/header', $data);
		$this->load->view('admin/pemilih/pemilih');
		$this->load->view('templates/footer');
	}

	public function add()
	{
		$pemilih = new stdClass();
		$pemilih->id_pemilih = null;
		$pemilih->username = null;
		$pemilih->nama = null;
		$pemilih->password = null;
		$pemilih->NISN = null;
		$pemilih->alamat = null;
		$data = array(
			'page' => 'Add',
			'row' => $pemilih,
		);
		$data['title'] = 'Create pemilih -V';

		$this->load->view('templates/header', $data);
		$this->load->view('admin/pemilih/pemilih_form');
		$this->load->view('templates/footer');
	}

	public function edit($id)
	{
		$query = $this->pemilih_m->get($id);
		if ($query->num_rows() > 0) {
			$pemilih = $query->row();
			$data = array(
				'page' => 'Edit',
				'row' => $pemilih
			);
			$data['title'] = 'Edit pemilih -V';

			$this->load->view('templates/header', $data);
			$this->load->view('admin/pemilih/pemilih_form');
			$this->load->view('templates/footer');
		}
	}

	public function process()
	{
		$post = $this->input->post(null, TRUE);
		if (isset($_POST['Add'])) {
			$this->pemilih_m->add($post);
		} else if (isset($_POST['Edit'])) {
			$this->pemilih_m->edit($post);
		}
		if ($this->db->affected_rows() > 0) {
			echo "<script>alert('Data berhasil disimpan');</script>";
		}
		echo "<script>window.location='" . site_url('pemilih') . "';</script>";
	}

	public function delete($id)
	{
		$this->pemilih_m->delete($id);
		echo "<script>alert('Data berhasil dihapus!');
		window.location='" . site_url('pemilih') . "';
		</script>";
	}
}
