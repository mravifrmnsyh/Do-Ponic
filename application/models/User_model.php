<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public function login($post){
        $this->db->select('*');
        $this->db->from('tb_pengguna');
        $this->db->where('username', $post['username']);
        $this->db->where('password', $post['password']);
        $query = $this->db->get();
        return $query;
    }

    public function regist($post){
        $this->db->select('*');
        $this->db->from('tb_pengguna');
        $this->db->where('username', $post['username']);
        $query = $this->db->get();
        return $query;
        
    }

    public function get($id = null){
        $this->db->from('tb_pengguna');
        if($id != null){
            $this->db->where('id_user', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post){
        $params = array(
            'nama' => $post['nama'],
            'username' => $post['username'],
            'password' => $post['password'],
            'alamat' => $post['alamat'],
            'level' => $post['level'],
            'foto'  => $post['foto']
        );
        $this->db->insert('tb_pengguna', $params);
    }

    public function del($id){
		$this->db->where('id_user', $id);
		$this->db->delete('tb_pengguna');
	}

    public function edit($post){
        $params['nama'] = $post['nama'];
        $params['username'] = $post['username'];
        if(!empty($post['password'])){
            $params['password'] = $post['password'];
        }
        $params['alamat'] = $post['alamat'] != "" ? $post['alamat'] : null;
        $params['level'] = $post['level'];
        if($post['foto'] != null){
            $params['foto'] = $post['foto'];
        }
		$this->db->where('id_user', $post['id_user']);
        $this->db->update('tb_pengguna', $params);
    }

    public function jumlahUser(){
        $query = $this->db->get('tb_pengguna');
        if($query->num_rows()>0){
            return $query->num_rows();
        } else {
            return 0;
        } 
    }
}