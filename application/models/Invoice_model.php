<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Invoice_model extends CI_Model {

    public function index(){
        date_default_timezone_set('Asia/Jakarta');
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $no = $this->input->post('hp');
        $email = $this->input->post('email');
        $via = $this->input->post('optradio');

        $invoice = array (
            'nama'      =>  $nama,
            'alamat'    =>  $alamat,
            'no'        =>  $no,
            'email'     =>  $email,
            'via'       =>  $via,
            'tgl_pesan' =>  date('Y-m-d H:i:s'),
            'batas_byr' =>  date('Y-m-d H:i:s', mktime(date('H'), date('i'), date('s'), date('m'), date('d')+1, date('Y'))),
        );
        $this->db->insert('tb_invoice', $invoice);
        $id_invoice = $this->db->insert_id();

        foreach($this->cart->contents() as $item){
            $data = array(
                'id_invoice'    =>  $id_invoice,
                'id_brg'        => $item['id'],
                'nama_brg'      => $item['name'],
                'jumlah'        => $item['qty'],
                'harga'         => $item['price'],
            );
            $this->db->insert('tb_pesanan', $data);
        }
        return TRUE;
    }

    public function tampilData(){
        $result = $this->db->get('tb_invoice');
        if($result->num_rows() > 0){
            return $result->result();
        }else{
            return array();
        }
    }

    public function ambilIdInv($id){
        $result = $this->db->where('id_inv', $id)->limit(1)->get('tb_invoice');
        if($result->num_rows()>0){
            return $result->row();
        }else{
            return false;
        }
    }
    
    public function ambilIdPes($id){
        $result = $this->db->where('id_invoice', $id)->get('tb_pesanan');
        if($result->num_rows()>0){
            return $result->result();
        }else{
            return false;
        }
    }

    public function jumlahInv(){
        $query = $this->db->get('tb_invoice');
        if($query->num_rows()>0){
            return $query->num_rows();
        } else {
            return 0;
        } 
    }
}