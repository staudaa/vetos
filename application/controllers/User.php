<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		is_logged_in();
		$this->load->model('user_m');
	}

	public function index()
	{
		$data['title'] = 'Pengguna -V';
		$data['row'] = $this->user_m->get();

		$this->load->view('templates/header', $data);
		$this->load->view('admin/user/user');
		$this->load->view('templates/footer');
	}

	public function add()
	{
		$user = new stdClass();
		$user->id_user = null;
		$user->username = null;
		$user->email = null;
		$user->password = null;
		$user->level = null;
		$data = array(
			'page' => 'Add',
			'row' => $user,
		);
		$data['title'] = 'Create User -V';

		$this->load->view('templates/header', $data);
		$this->load->view('admin/user/user_form');
		$this->load->view('templates/footer');
	}

	public function edit($id)
	{
		$query = $this->user_m->get($id);
		if ($query->num_rows() > 0) {
			$user = $query->row();
			$data = array(
				'page' => 'Edit',
				'row' => $user
			);
			$data['title'] = 'Edit User -V';

			$this->load->view('templates/header', $data);
			$this->load->view('admin/user/user_form');
			$this->load->view('templates/footer');
		}
	}

	public function process()
	{
		$post = $this->input->post(null, TRUE);
		if (isset($_POST['Add'])) {
			$this->user_m->add($post);
		} else if (isset($_POST['Edit'])) {
			$this->user_m->edit($post);
		}
		if ($this->db->affected_rows() > 0) {
			echo "<script>alert('Data berhasil disimpan');</script>";
		}
		echo "<script>window.location='" . site_url('user') . "';</script>";
	}

	public function delete($id)
	{
		$this->user_m->delete($id);
		redirect('user');
		// echo "<script>alert('Data berhasil dihapus!');
		// window.location='" . site_url('user') . "';
		// </script>";
	}
}
