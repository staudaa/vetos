<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kandidat_m extends CI_Model
{
	public function get($id = null)
	{
		$this->db->from('kandidat');
		if ($id != null) {
			$this->db->where('id_kandidat', $id);
		}
		$query = $this->db->get();
		return $query;
	}

	public function add($post)
	{
		$params = [
			'nama_ketos' => $post['nama_ketos'],
			'nama_waketos' => $post['nama_waketos'],
			'image' => $post['image'],
			'visi' => $post['visi'],
			'misi' => $post['misi'],
		];
		$this->db->insert('kandidat', $params);
	}

	public function edit($post)
	{
		$params = [
			'nama_ketos' => $post['nama_ketos'],
			'nama_waketos' => $post['nama_waketos'],
			'image' => $post['image'],
			'visi' => $post['visi'],
			'misi' => $post['misi'],
		];
		$this->db->where('id_kandidat', $post['id']);
		$this->db->update('kandidat', $params);
	}

	public function detail_data($id)
	{
		$query = $this->db->get_where('kandidat', ['id_kandidat' => $id])->row_array();
		return $query;
	}


	public function delete($id)
	{
		$this->db->where('id_kandidat', $id);
		$this->db->delete('kandidat');
	}
}
