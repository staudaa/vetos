<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function login()
	{
		$data['title'] = 'Login -V';
		$this->load->view('login', $data);
	}

	public function process()
	{
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->login();
		} else {
			$post = $this->input->post(null, true);
			if (isset($_POST['login'])) {
				$this->load->model('user_m');
				$query = $this->user_m->login($post);
				if ($query->num_rows() > 0) {
					$row = $query->row();
					$params = [
						'id_user' => $row->id_user,
						'username' => $row->username,
						'level' => $row->level
					];
					
					$this->session->set_userdata($params);
					echo "<script>alert('Selamat, login anda berhasil!');
					window.location='" . site_url('vote') . "';
					</script>";
					// redirect('vote');
				} else {
					echo "<script>alert('Username atau Password Salah!');
					window.location='" . site_url('auth/login') . "';
					</script>";
				}
			}
		}
	}

	public function _rules()
	{
		$this->form_validation->set_rules('username', 'username', 'required', array(
			'required' => '%s wajib diisi!',
		));
		$this->form_validation->set_rules('password', 'password', 'required', array(
			'required' => '%s wajib diisi!',
		));
	}

	public function logout()
	{
		$params = ['id_user', 'username', 'level'];
		$this->session->unset_userdata($params);
		redirect('auth/login');
	}
}
