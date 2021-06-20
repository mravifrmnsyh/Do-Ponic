<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel_model extends CI_Model {

    public function get($id = null){
        $this->db->from('tb_artikel');
        if($id != null){
            $this->db->where('id_artikel', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function artikelDesc(){
        $this->db->order_by('id_artikel', 'DESC');
        $query = $this->db->get('tb_artikel');
        return $query;
    }

    public function del($id){
		$this->db->where('id_artikel', $id);
		$this->db->delete('tb_artikel');
	}

    public function add($post){
        $params = [
            'date' => $post['date'],
            'judul' => $post['judul'],
            'tag' => $post['tag'],
            'deskripsi' => $post['deskripsi'],
            'gambar' => $post['gambar']
        ];
        $this->db->insert('tb_artikel', $params);
    }

    public function edit($post){
        $params = [
            'judul' => $post['judul'],
            'deskripsi' => $post['deskripsi'],
        ];
        if($post['gambar'] != null){
            $params['gambar'] = $post['gambar'];
        }
		$this->db->where('id_artikel', $post['id_artikel']);
        $this->db->update('tb_artikel', $params);
    }

    public function find($id){
        $result = $this->db->where('id_artikel', $id)
                           ->limit(1)
                           ->get('tb_artikel');
        if($result->num_rows() > 0){
            return $result->row();
        }else{
            return array();
        }
    }

    public function detail($id)
    {
        $result = $this->db->where('id_artikel', $id)->get('tb_artikel');
        if($result->num_rows() > 0){
            return $result->result();
        }else{
            return false;
        }
    }

    public function get_keyword($keyword){
        $this->db->select('*');
        $this->db->from('tb_artikel');
        $this->db->like('judul',$keyword);
        $this->db->or_like('deskripsi',$keyword);
        return $this->db->get()->result();
        return $this->db->get_where("tb_artikel",array('judul' => $keyword));
    }

    public function jumlahArt(){
        $query = $this->db->get('tb_artikel');
        if($query->num_rows()>0){
            return $query->num_rows();
        } else {
            return 0;
        } 
    }
}