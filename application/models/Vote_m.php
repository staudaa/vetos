<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Vote_m extends CI_Model
{
    public function getdata()
    {
        return $this->db->get('kandidat')->result_array();
    }

    public function getId($id)
    {
        $query = "SELECT * FROM hasil
                JOIN kandidat ON kandidat.id_kandidat = hasil.id_kandidat JOIN pemilih 
                ON pemilih.id_pemilih = hasil.id_pemilih WHERE 'id_hasil' = $id";
        $this->db->query($query)->row_array();
    }

    public function pilih()
    {
        $data = [
            'id_kandidat' => $this->input->post('id_kandidat'),
            'id_pemilih' => $this->input->post('id_pemilih'),
        ];
        $this->db->insert('hasil', $data);
    }
}
