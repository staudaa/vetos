<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pemilih_m extends CI_Model
{
	public function get($id = null)
	{
		$this->db->from('pemilih');
		if ($id != null) {
			$this->db->where('id_pemilih', $id);
		}
		$query = $this->db->get();
		return $query;
	}

	public function add($post)
	{
		$params = [
			'username' => $post['username'],
			'nama' => $post['nama'],
			'password' => sha1($post['password']),
			'NISN' => $post['NISN'],
			'alamat' => $post['alamat'],
		];
		$this->db->insert('pemilih', $params);
	}

	public function edit($post)
	{
		$params = [
			'username' => $post['username'],
			'nama' => $post['nama'],
			'password' => sha1($post['password']),
			'NISN' => $post['NISN'],
			'alamat' => $post['alamat'],
		];
		$this->db->where('id_pemilih', $post['id']);
		$this->db->update('pemilih', $params);
	}

	public function delete($id)
	{
		$this->db->where('id_pemilih', $id);
		$this->db->delete('pemilih');
	}
}
