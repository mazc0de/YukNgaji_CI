<?php

class YukngajiAuth_model extends CI_Model{
	
	
	// private $_table = 'users';

	// public function doLogin(){
	// 	$post =  $this->input->post();

	// 	// cari user berdasarkan email dan username
	// 	$this->db->where('email', $post['email']);
	// 	$user = $this->db->get($this->_table)->row();

	// 	// jika user terdaftar
	// 	if($user){
	// 		// memeriksa password
	// 		$isPasswordTrue = password_verify($post['password'], $user->password);

	// 		// memeriksa role
	// 		$isAdmin = $user->role == 1;

	// 		// jika password benar dan dia admin
	// 		if($isPasswordTrue && $isAdmin){
	// 			// login sukses
	// 			$this->session->set_userdata(['user_logged' => $user]);
	// 			$this->_updateLastLogin($user->user_id);
	// 			return true;
	// 		}
	// 	}

	// 	// login gagal
	// 	return false;
	// }
	
	// Register
	public function register(){
		$data = [
				'nama_depan' => $this->input->post('nama_depan'),
				'nama_belakang' => $this->input->post('nama_belakang'),
				'email' => $this->input->post('email'),
				'password' => password_hash($this->input->post('password1'),PASSWORD_DEFAULT),
				'image' => 'default.jpg',
				'role_id' => 2,
				'is_active' => 1,
				'date_created' => time()
			];
		$this->db->insert('users',$data);
	}
}
