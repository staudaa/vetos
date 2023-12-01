<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kandidat extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		is_logged_in();
		$this->load->model('kandidat_m');
	}

	public function index()
	{
		$data['title'] = 'Kandidat -V';
		$data['row'] = $this->kandidat_m->get();

		$this->load->view('templates/header', $data);
		$this->load->view('admin/kandidat/kandidat');
		$this->load->view('templates/footer');
	}

	public function add()
	{
		$kandidat = new stdClass();
		$kandidat->id_kandidat = null;
		$kandidat->nama_ketos = null;
		$kandidat->nama_waketos = null;
		$kandidat->image = null;
		$kandidat->visi = null;
		$kandidat->misi = null;
		$data = array(
			'page' => 'Add',
			'row' => $kandidat,
		);
		$data['title'] = 'Create kandidat -V';

		$this->load->view('templates/header', $data);
		$this->load->view('admin/kandidat/kandidat_form');
		$this->load->view('templates/footer');
	}

	public function edit($id)
	{
		$query = $this->kandidat_m->get($id);
		if ($query->num_rows() > 0) {
			$kandidat = $query->row();
			$data = array(
				'page' => 'Edit',
				'row' => $kandidat
			);
			$data['title'] = 'Edit kandidat -V';

			$this->load->view('templates/header', $data);
			$this->load->view('admin/kandidat/kandidat_form');
			$this->load->view('templates/footer');
		}
	}

	public function process()
	{
		$post = $this->input->post(null, TRUE);
		if (isset($_POST['Add'])) {
			$this->kandidat_m->add($post);
		} else if (isset($_POST['Edit'])) {
			$this->kandidat_m->edit($post);
		}
		if ($this->db->affected_rows() > 0) {
			echo "<script>alert('Data berhasil disimpan');</script>";
		}
		echo "<script>window.location='" . site_url('kandidat') . "';</script>";
	}

	public function detail_data($id)
	{
		$data['row'] = $this->kandidat_m->detail_data($id);
		$data['title'] = 'Detail Kandidat -V';

		$this->load->view('templates/header', $data);
		$this->load->view('vote/detail');
		$this->load->view('templates/footer');
	}

	public function delete($id)
	{
		$this->kandidat_m->delete($id);
		echo "<script>alert('Data berhasil dihapus!');
		window.location='" . site_url('kandidat') . "';
		</script>";
	}
}
