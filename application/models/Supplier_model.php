<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier_model extends CI_Model {

    public function get($id = null){
        $this->db->from('tb_supplier');
        if($id != null){
            $this->db->where('id_supplier', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function del($id){
		$this->db->where('id_supplier', $id);
		$this->db->delete('tb_supplier');
	}

    public function add($post){
        $params = [
            'nama' => $post['nama'],
            'alamat' => $post['alamat'],
            'telepon' => $post['telepon'],
            'deskripsi' => $post['deskripsi']
        ];
        $this->db->insert('tb_supplier', $params);
    }

    public function edit($post){
        $params = [
            'nama' => $post['nama'],
            'alamat' => $post['alamat'],
            'telepon' => $post['telepon'],
            'deskripsi' => $post['deskripsi']
        ];
		$this->db->where('id_supplier', $post['id_supplier']);
        $this->db->update('tb_supplier', $params);
    }

    public function jumlahSup(){
        $query = $this->db->get('tb_supplier');
        if($query->num_rows()>0){
            return $query->num_rows();
        } else {
            return 0;
        } 
    }

}