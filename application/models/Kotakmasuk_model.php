<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kotakmasuk_model extends CI_Model {

    public function get($nama = null){
        $this->db->from('tb_pesan');
        if($nama != null){
            $this->db->where('nama', $nama);
        }
        $query = $this->db->get();
        return $query;
    }

    public function del($nama){
		$this->db->where('nama', $nama);
		$this->db->delete('tb_pesan');
	}

    public function add($post){
        $params = [
            'nama' => $post['nama'],
            'email' => $post['email'],
            'subjek' => $post['subjek'],
            'pesan' => $post['pesan'],
        ];
        $this->db->insert('tb_pesan', $params);
    }

    public function find($nama){
        $result = $this->db->where('nama', $nama)
                           ->limit(1)
                           ->get('tb_pesan');
        if($result->num_rows() > 0){
            return $result->row();
        }else{
            return array();
        }
    }

    public function detail_brg($nama)
    {
        $result = $this->db->where('nama', $nama)->get('tb_pesan');
        if($result->num_rows() > 0){
            return $result->result();
        }else{
            return false;
        }
    }
}