<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function login()
	{
		cekSudahLogin();
		$this->load->view('login');
	}

	public function register(){
		$this->load->library('form_validation');
		$this->load->view('user/register');
	}

	public function process(){
		$post = $this->input->post(null, TRUE);
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
		if(isset($_POST['login'])){
			$this->load->model('user_model');
			$query = $this->user_model->login($post);
			if($query->num_rows()>0){
				$row = $query->row();
				$params = array(
					'userid' => $row->id_user,
					'level' => $row->level
				);
				$this->session->set_userdata($params);
				if($params['level']==1){
					?>
					<script>
					Swal.fire({
						icon : 'success',
						title : 'Berhasil',
						text : 'Login Berhasil'
						}).then((result) => {
						window.location='<?=site_url('dashboard')?>';
					})
					</script>
					<?php
				}else{
					?>
					<script>
					Swal.fire({
						icon : 'success',
						title : 'Berhasil',
						text : 'Login Berhasil'
						}).then((result) => {
						window.location='<?=site_url('user_dashboard')?>';
					})
					</script>
					<?php
				}
			} else{
				?>
					<script>
					Swal.fire({
						icon : 'error',
						title : 'Gagal',
						text : 'Username / Password Salah'
						}).then((result) => {
						window.location='<?=site_url('auth/login')?>';
					})
					</script>
					<?php
			}
		} else if(isset($_POST['register'])){
			if($post['password']==$post['password1']){
				$this->load->model('user_model');
				$config['upload_path']          = './assets/gambar/user';
				$config['allowed_types']        = 'jpeg|jpg|png';
				$config['max_size']             = 5000;
				$this->load->library('upload', $config);
				
				if($_FILES['foto']['name']!=null){
					if($this->upload->do_upload('foto')){
						$post['level'] = 2;
						$post['foto'] = $this->upload->data('file_name');
						$this->user_model->add($post);
						?>
						<script>
						Swal.fire({
							icon : 'success',
							title : 'Selamat',
							text : 'Register Berhasil'
							}).then((result) => {
							window.location='<?=site_url('auth/login')?>';
						})
						</script>
						<?php
					}else{
						?>
						<script>
						Swal.fire({
							icon : 'error',
							title : 'Gagal',
							text : 'Gagal Register'
							}).then((result) => {
							window.location='<?=site_url('auth/register')?>';
						})
						</script>
						<?php
					}
				} else {
					$post['level'] = 2;
					$post['foto'] = null;
					$this->user_model->add($post);
					?>
					<script>
					Swal.fire({
						icon : 'success',
						title : 'Selamat',
						text : 'Register Berhasil'
						}).then((result) => {
						window.location='<?=site_url('auth/login')?>';
					})
					</script>
					<?php
				}
			} else {
				?>
				<script>
				Swal.fire({
					icon : 'error',
					title : '',
					text : 'Password tidak sesuai'
					}).then((result) => {
					window.location='<?=site_url('auth/register')?>';
				})
				</script>
				<?php
			}
		}

	}

	public function logout(){
		$params = array(
			'userid' => '0',
			'username' => 'Login',
			'level' => 2
		);
		$this->session->set_userdata($params);
		redirect('user_dashboard');
	}
}
