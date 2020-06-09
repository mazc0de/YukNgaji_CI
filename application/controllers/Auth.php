<?php

class Auth extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('YukngajiAuth_model');
		// cek session
		// cekLoginAuth();

	}

	public function index(){
		// rules form validation
		$this->form_validation->set_rules('email','Email','required|trim|valid_email');
		$this->form_validation->set_rules('password','Password','required|trim');
		
		if($this->form_validation->run() == false){
			$this->load->view('auth/login');
		}
		else{
			$this->_login();
		}
	}

	private function _login(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$user = $this->db->get_where('users',['email' => $email])->row_array();
		
		// cek jika user ada
		if($user){ 
			//jika usernya aktif
			if($user['is_active'] == 1){
				// cek password
				if(password_verify($password, $user['password'])){
					$data = [
						'email' => $user['email'],
						'role_id' => $user['role_id']
					];
					$this->session->set_userdata($data);
					if($user['role_id'] == 1){
						redirect('admin');
					}
					else{
						redirect('user');
					}
				}
				else{
					$this->session->set_flashdata('message','<div class="alert alert-danger">Password salah!.</div>');
					redirect('auth');
				}
			}
			else{
				$this->session->set_flashdata('message','<div class="alert alert-danger">Email belum di aktivasi.</div>');
				redirect('auth');
			}
		}
		else{
			// cek jika user tidak ada kasih pesan kesalahan
			$this->session->set_flashdata('message','<div class="alert alert-danger">Email tidak terdaftar.</div>');
			redirect('auth');
		}
	}

	public function register(){

		// rules form validation
		$this->form_validation->set_rules('nama_depan','nama depan','required|trim');
		$this->form_validation->set_rules('nama_belakang', 'nama belakang', 'required|trim');
		$this->form_validation->set_rules('email', 'email', 'required|trim|valid_email|is_unique[users.email]',[
			'is_unique' => 'Email telah terdaftar! silahkan login'
		]);
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[8]|matches[password2]',[ 
			'matches' => 'Password tidak sama!'
		]);
		$this->form_validation->set_rules('password2','Password','required|trim|matches[password1]');

		if($this->form_validation->run() == false){
			$this->load->view('auth/register');
		}
		else{
			$this->YukngajiAuth_model->register();
			$this->session->set_flashdata('message','<div class="alert alert-success">Selamat! anda telah terdaftar, silahkan login.</div>');
			redirect('auth');
		}
	}

	public function logout(){
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role_id');
		$this->session->set_flashdata('message','<div class="alert alert-danger">Anda berhasil logout</div>');
		redirect('auth');
		
	}

	public function blocked(){
		$this->load->view('auth/blocked');
	}
}
?>
