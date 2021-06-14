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
					echo "<script>
					alert('Selamat, Login Berhasil');
					window.location='".site_url('dashboard')."';
					</script>";
				}else{
					echo "<script>
					alert('Selamat, Login Berhasil');
					window.location='".site_url('user_dashboard')."';
					</script>";
				}
			} else{
				echo "<script>
					alert('Login Gagal, Username / Password Salah');
					window.location='".site_url('auth/login')."';
				</script>";
			}
		} else if(isset($_POST['register'])){
			if($post['password']==$post['password1']){
				$this->load->model('user_model');
				$config['upload_path']          = './assets/gambar/user';
				$config['allowed_types']        = 'jpeg|jpg|png';
				$config['max_size']             = 2048;
				$this->load->library('upload', $config);
				
				if($_FILES['foto']['name']!=null){
					if($this->upload->do_upload('foto')){
						$post['level'] = 2;
						$post['foto'] = $this->upload->data('file_name');
						$this->user_model->add($post);
						echo "<script>
						alert('Selamat, Register Berhasil');
						window.location='".site_url('auth/login')."';
						</script>";
					}else{
						echo "<script>
						alert('Gagal register');
						window.location='".site_url('auth/register')."';
						</script>";
					}
				} else {
					$post['level'] = 2;
					$post['foto'] = null;
					$this->user_model->add($post);
					echo "<script>
					alert('Selamat, Register Berhasil');
					window.location='".site_url('auth/login')."';
					</script>";
				}
			} else {
				echo "<script>
				alert('Pasword tidak sesuai');
				window.location='".site_url('auth/register')."';
				</script>";
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
