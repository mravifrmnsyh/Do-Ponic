<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kotakmasuk_model extends CI_Model {

    public function get($id = null){
        $this->db->from('tb_pesan');
        if($id != null){
            $this->db->where('id_pesan', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function del($id){
		$this->db->where('id_pesan', $id);
		$this->db->delete('tb_pesan');
	}

    public function add($post){
        $params = [
            'id_user' => $this->fungsi->user_login()->id_user,
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

    public function jumlahKot(){
        $query = $this->db->get('tb_pesan');
        if($query->num_rows()>0){
            return $query->num_rows();
        } else {
            return 0;
        } 
    }
}