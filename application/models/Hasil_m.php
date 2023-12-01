<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hasil_m extends CI_Model
{
    public function get($id = null)
    {
        $this->db->from('hasil');
        $this->db->join('kandidat', 'kandidat.id_kandidat = hasil.id_kandidat', 'id_kandidat = nama_ketos');
        $this->db->join('pemilih', 'pemilih.id_pemilih = hasil.id_pemilih', 'id_pemilih = nama');
        if ($id != null) {
            $this->db->where('id_kandidat', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    // public function detail_data($id)
    // {
    //     $query = "SELECT * FROM hasil
    //             JOIN kandidat ON kandidat.id_kandidat = hasil.id_kandidat JOIN pemilih 
    //             ON pemilih.id_pemilih = hasil.id_pemilih WHERE 'id_hasil' = $id";
    //     $this->db->query($query)->row_array();

    //     $query = $this->db->get_where('hasil', ['id_hasil' => $id])->row_array();
    //     return $query;
    // }


    //model untuk membuat count, from mengambil dari tabel, where mengambil nama colomn dan value yg ingin di count
    public function getPaslonSatu()
    {
        $this->db->where('id_kandidat', '2');
        $this->db->from('hasil');
        return $this->db->count_all_results();
    }
    public function getPaslonDua()
    {
        $this->db->where('id_kandidat', '3');
        $this->db->from('hasil');
        return $this->db->count_all_results();
    }
    public function getPaslonTiga()
    {
        $this->db->where('id_kandidat', '4');
        $this->db->from('hasil');
        return $this->db->count_all_results();
    }
}
