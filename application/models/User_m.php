<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_m extends CI_Model
{
	public function get($id = null)
	{
		$this->db->from('user');
		if ($id != null) {
			$this->db->where('id_user', $id);
		}
		$query = $this->db->get();
		return $query;
	}

	public function login($post)
	{
		$this->db->from('user');
		$this->db->where('username', $post['username']);
		$this->db->where('password', sha1($post['password']));
		return $this->db->get();
	}

	public function add($post)
	{
		$params = [
			'username' => $post['username'],
			'email' => $post['email'],
			'password' => sha1($post['password']),
			'level' => $post['level'],
		];
		$this->db->insert('user', $params);
	}

	public function edit($post)
	{
		$params = [
			'username' => $post['username'],
			'email' => $post['email'],
			'password' => sha1($post['password']),
			'level' => $post['level'],
		];
		$this->db->where('id_user', $post['id']);
		$this->db->update('user', $params);
	}

	public function delete($id)
	{
		$this->db->where('id_user', $id);
		$this->db->delete('user');
	}
}
