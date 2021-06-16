<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_model extends CI_Model {

    public function get($id = null){
        $this->db->from('tb_barang');
        if($id != null){
            $this->db->where('id_brg', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function del($id){
		$this->db->where('id_brg', $id);
		$this->db->delete('tb_barang');
	}

    public function add($post){
        $params = [
            'id_brg' => $post['id_brg'],
            'nama_brg' => $post['nama_brg'],
            'keterangan' => $post['keterangan'],
            'kategori' => $post['kategori'],
            'harga' => $post['harga'],
            'stok' => $post['stok'],
            'gambar' => $post['gambar']
        ];
        $this->db->insert('tb_barang', $params);
    }

    public function tampil_data_semua(){
        return $this->db->get('tb_barang');
    }

    public function tampil_data($kat){
        $this->db->from('tb_barang');
        if($kat != null){
            $this->db->where('kategori', $kat);
        }
        $query = $this->db->get();
        return $query;
    }

    public function edit($post){
        $params = [
            'nama_brg' => $post['nama_brg'],
            'keterangan' => $post['keterangan'],
            'kategori' => $post['kategori'],
            'harga' => $post['harga'],
            'stok' => $post['stok'],
        ];
        if($post['gambar'] != null){
            $params['gambar'] = $post['gambar'];
        }
		$this->db->where('id_brg', $post['id_brg']);
        $this->db->update('tb_barang', $params);
    }

    public function find($id){
        $result = $this->db->where('id_brg', $id)
                           ->limit(1)
                           ->get('tb_barang');
        if($result->num_rows() > 0){
            return $result->row();
        }else{
            return array();
        }
    }

    public function detail_brg($id_brg)
    {
        $result = $this->db->where('id_brg', $id_brg)->get('tb_barang');
        if($result->num_rows() > 0){
            return $result->result();
        }else{
            return false;
        }
    }

    public function get_keyword($keyword){
        $this->db->select('*');
        $this->db->from('tb_barang');
        $this->db->like('nama_brg',$keyword);
        $this->db->or_like('keterangan',$keyword);
        $this->db->or_like('kategori',$keyword);
        $this->db->or_like('harga',$keyword);
        $this->db->or_like('stok',$keyword);
        return $this->db->get()->result();
        return $this->db->get_where("tb_barang",array('nama_brg' => $keyword));
    }

    public function jumlahBrg(){
        $query = $this->db->get('tb_barang');
        if($query->num_rows()>0){
            return $query->num_rows();
        } else {
            return 0;
        } 
    }
}