<?php

class User extends CI_Controller{
	public function __construct(){
		parent::__construct();
		// load model
		$this->load->model('Yukngaji_model');

		// load form validation \
		$this->load->library('form_validation');


		// cek session
		cekLogin();
	}

	public function index(){
		//get user
		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		
		//get artikel
		$data['artikel'] = $this->Yukngaji_model->getAllArtikel();

		$data['title'] = 'User Dashboard';
		$data['nama'] = 'User Dashboard';
		$this->load->view('user/templates/header',$data);
		$this->load->view('user/templates/sidebar');
		$this->load->view('user/index',$data);
		$this->load->view('user/templates/footer');
	}

		public function daftarSurah(){
		// get user
		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		// title
		$data['title'] = 'Daftar Surah';
		// get data surah dari model
		$data['surah'] = $this->Yukngaji_model->getAllSurah();

		$this->load->view('user/templates/header',$data);
		$this->load->view('user/templates/sidebar');
		$this->load->view('user/daftarSurah',$data);
		$this->load->view('user/templates/footer');
	}

	public function detail($id){
		//get user
		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		// title
		$data['title'] = 'Detail Surah';
		
		// get data surah dari model
		$data['surah'] = $this->Yukngaji_model->getSurahById($id);

		$this->load->view('user/templates/header',$data);
		$this->load->view('user/templates/sidebar');
		$this->load->view('user/detail',$data);
		$this->load->view('user/templates/footer');
	}

	public function pilihSurat(){
		//get user
		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		// title
		$data['title'] = 'Pilih Surah';
		
		// get data surah dari model
		$data['surah'] = $this->Yukngaji_model->getAllSurah();

		$this->form_validation->set_rules('pilih_surat','pilih surat','required');
		if($this->form_validation->run() == FALSE){
			$this->load->view('user/templates/header',$data);
			$this->load->view('user/templates/sidebar');
			$this->load->view('user/pilihSurat',$data);
			$this->load->view('user/templates/footer');
		}
		else{
			$this->Yukngaji_model->hafalanUser();
			redirect('user/setoran');
		}
	}

	public function setoran(){
		//get user
		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		// title
		$data['title'] = 'Setoran';
		
		// get data surah dari model
		$data['surah'] = $this->Yukngaji_model->getAllHafalan();
	
		$this->load->view('user/templates/header',$data);
		$this->load->view('user/templates/sidebar');
		$this->load->view('user/setoran',$data);
		$this->load->view('user/templates/footer');

	}

	public function editSetoran($id){
		//get user
		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		
		// set title
		$data['title'] = 'Setoran';

		//get id
		$data['hafalan'] = $this->Yukngaji_model->getHafalanById($id);


		// form validation
		// set_rules('name','alias','rules')
		$this->form_validation->set_rules('status','status','required');

		if($this->form_validation->run() == FALSE){
			$this->load->view('user/editSetoran',$data);
		}
		else{
			$this->Yukngaji_model->editSetoranModel();
			redirect('user/setoran');
		}
	}

	public function detailNews($id){
		//get user
		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		// title
		
		// get data surah dari model
		$data['artikel'] = $this->Yukngaji_model->getNewsById($id);
		

		$this->load->view('user/templates/headerNews',$data);
		$this->load->view('user/templates/sidebar');
		$this->load->view('user/detailNews',$data);
		$this->load->view('user/templates/footer');
	}
}
?>
