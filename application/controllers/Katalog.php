<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Katalog extends CI_Controller {

	public function index()
	{
		$data['barang'] = $this->barang_model->tampil_data_semua()->result();	
		if(isset($_POST['alat'])){
			$data['barang'] = $this->barang_model->tampil_data('alat')->result();
			
		}else if(isset($_POST['benih'])){
			$data['barang'] = $this->barang_model->tampil_data('benih')->result();
			
		}else if(isset($_POST['buah'])){
			$data['barang'] = $this->barang_model->tampil_data('buah')->result();
		}
		$this->template->load('user/theme', 'user/katalog', $data);
	}

	public function detail($id){
		$data['dat'] = $this->barang_model->get()->result();
		$data['row'] = $this->barang_model->detail_brg($id);
		$this->template->load('user/theme', 'user/katalog_desc', $data);
	}

	public function tambahKeranjang($id){
		$barang = $this->barang_model->find($id);

		$data = array(
			'id' => $barang->id_brg,
			'qty' => 1,
			'price' => $barang->harga,
			'name' => $barang->nama_brg
		);
		$this->cart->insert($data);
		redirect('katalog');
	}

	public function tambahKeranjangDet($id){
		$barang = $this->barang_model->find($id);

		$data = array(
			'id' => $barang->id_brg,
			'qty' => 1,
			'price' => $barang->harga,
			'name' => $barang->nama_brg
		);
		$this->cart->insert($data);
		redirect('katalog/detail/'.$id);
	}

	public function detailKeranjang(){
		$this->template->load('user/theme', 'user/keranjang');
	}

	public function hapusKeranjang(){
		$this->cart->destroy();
		redirect('katalog/detailKeranjang');
	}

	public function hapusProduk($id){
		$this->cart->remove($id);
		redirect('katalog/detailKeranjang');
	}

	public function checkout(){
		$this->template->load('user/theme', 'user/checkout');
	}

	public function prosesBayar(){
		$this->load->model('invoice_model');
		?>
		<script src="<?=base_url()?>assets/dist/js/sweet/sweetalert2.all.min.js"></script>
		<style>
		body{
			font-family : "Helvetica Neue", Helvetica, Arial, sans-serif;
			font-size : 1.124sm;
			font-weight : normal; 
		}
		</style>
		<body></body>
		
		<?php
		$proses = $this->invoice_model->index();
		if($proses){
			$this->cart->destroy();
			?>
			<script>
			Swal.fire({
				icon : 'success',
				title : 'Pesanan Berhasil',
				text : 'Pesanan berhasil terkirim, admin akan menghubungi dalam 1x24jam'
				}).then((result) => {
				window.location='<?=site_url('user_dashboard')?>';
			})
			</script>
			<?php
		} else{
			redirect('katalog/chechout');
		}
	}
}
