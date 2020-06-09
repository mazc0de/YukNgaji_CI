<?php

class Admin extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		// load model
		$this->load->model('Yukngaji_model');

		//load form validation
		$this->load->library('form_validation');

		// cek session
		cekLogin();
	}
	public function index(){
		// title
		$data['title'] = 'Admin Dashboard';

		// total pengguna
		$data['totalPengguna'] = $this->Yukngaji_model->jumlahPengguna();
		$data['totalSurah'] = $this->Yukngaji_model->jumlahSurah();
		$data['totalArtikel'] = $this->Yukngaji_model->jumlahArtikel();

		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar');
		$this->load->view('admin/dashboard',$data);
		$this->load->view('templates/footer');
	}

	// --- SURAT ---

	// --- DAFTAR SURAT ---

	public function daftarSurah(){
		// tite
		$data['title'] = 'Daftar Surah';
		// get data surah dari model
		$data['surah'] = $this->Yukngaji_model->getAllSurah();

		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar');
		$this->load->view('admin/surat/daftarSurah',$data);
		$this->load->view('templates/footer');
	}

	// --- TAMBAH SURAT ---
	public function tambahSurah(){
		// title
		$data['title'] = 'Tambah Surah';

		// form validation
		// set_rules('name','alias','rules')
		$this->form_validation->set_rules('nama_surah','nama surah','required');
		$this->form_validation->set_rules('jml_ayat','jumlah ayat','required|numeric');
		$this->form_validation->set_rules('surat_ke','surat ke','required|numeric');
		$this->form_validation->set_rules('juz_ke','juz ke','required|numeric');
		$this->form_validation->set_rules('diturunkan_di','diturunkan di','required');
		$this->form_validation->set_rules('surah','surah','required');
		$this->form_validation->set_rules('url_audio','url audio','required');
		
		// pengecekan, jika form yang diisi salah /  tidak sesuai rules maka akan dikembalikan
		if($this->form_validation->run() == FALSE){
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('admin/surat/tambahSurah');
			$this->load->view('templates/footer');
		}
		// jika benar maka akan masuk ke else
		else{
			$this->Yukngaji_model->tambahDataSurah();
			// session flashdata / alert
			$this->session->set_flashdata('flashTambah','Ditambah');
			redirect('admin/daftarSurah');
		}
	}

	// --- EDIT SURAT ---
	public function editSurah($id){
		// title
		$data['title'] = 'Edit Surah';

		//get id
		$data['surah'] = $this->Yukngaji_model->getSurahById($id);


		// form validation
		// set_rules('name','alias','rules')
		$this->form_validation->set_rules('nama_surah','nama surah','required');
		$this->form_validation->set_rules('jml_ayat','jumlah ayat','required|numeric');
		$this->form_validation->set_rules('surat_ke','surat ke','required|numeric');
		$this->form_validation->set_rules('juz_ke','juz ke','required|numeric');
		$this->form_validation->set_rules('diturunkan_di','diturunkan di','required');
		$this->form_validation->set_rules('surah','surah','required');
		$this->form_validation->set_rules('url_audio','url audio','required');


		// pengecekan, jika form yang diisi salah /  tidak sesuai rules maka akan dikembalikan
		if($this->form_validation->run() == FALSE){
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('admin/surat/editSurah');
			$this->load->view('templates/footer');
		}
		// jika benar maka akan masuk ke else
		else{
			$this->Yukngaji_model->ubahDataSurah();
			// session flashdata / alert
			$this->session->set_flashdata('flashUbah','Diubah');
			redirect('admin/daftarSurah');
		}
	}
	
	// --- HAPUS SURAT ---
	public function hapus($id){
		$this->Yukngaji_model->hapusDataSurah($id);
		$this->session->set_flashdata('flashHapus', 'Dihapus!');
		redirect ('admin/daftarSurah');
	}

	// --- ARTIKEL ---

	// --- DAFTAR ARTIKEL ---
	public function daftarArtikel(){
		// title
		$data['title'] = 'Daftar Artikel';
		// get data surah dari model
		$data['artikel'] = $this->Yukngaji_model->getAllArtikel();

		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar');
		$this->load->view('admin/artikel/daftarArtikel',$data);
		$this->load->view('templates/footer');
	}

	// --- TAMBAH ARTIKEL ---
	public function tambahArtikel(){
		// title
		$data['title'] = 'Tambah Artikel';

		// kategori
		$data['kategori'] = ['- Pilih Kategori -','Sejarah','Informasi'];
		// form validation
		// set_rules('name','alias','rules')
		$this->form_validation->set_rules('judul_artikel','judul artikel','required');
		$this->form_validation->set_rules('kategori_artikel','kategori_artikel','required');
		$this->form_validation->set_rules('isi_artikel','content','required');
		

		// pengecekan, jika form yang diisi salah /  tidak sesuai rules maka akan dikembalikan
		if($this->form_validation->run() == FALSE){
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('admin/artikel/tambahArtikel');
			$this->load->view('templates/footer');
		}
		// jika benar maka akan masuk ke else
		else{
			$this->Yukngaji_model->tambahDataArtikel();
			// session flashdata / alert
			$this->session->set_flashdata('flashTambah','Ditambah');
			redirect('admin/daftarArtikel');
		}
	}

	// --- EDIT ARTIKEL ---
	public function editArtikel($id){
		// title
		$data['title'] = 'Edit Artikel';

		//get id
		$data['artikel'] = $this->Yukngaji_model->getArtikelById($id);

		// kategori
		$data['kategori'] = ['- Pilih Kategori -','sejarah','informasi'];
		// form validation
		// set_rules('name','alias','rules')
		$this->form_validation->set_rules('judul_artikel','judul artikel','required');
		$this->form_validation->set_rules('kategori_artikel','kategori artikel','required');
		$this->form_validation->set_rules('isi_artikel','content','required');

		// pengecekan, jika form yang diisi salah /  tidak sesuai rules maka akan dikembalikan
		if($this->form_validation->run() == FALSE){
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('admin/artikel/editArtikel');
			$this->load->view('templates/footer');
		}
		// jika benar maka akan masuk ke else
		else{
			$this->Yukngaji_model->ubahArtikel();
			// session flashdata / alert
			$this->session->set_flashdata('flashUbah','Diubah');
			redirect('admin/daftarArtikel');
		}
	}

	// --- HAPUS ARTIKEL ---
	public function hapusArtikel($id){
		$this->Yukngaji_model->hapusDataArtikel($id);
		$this->session->set_flashdata('flashHapus', 'Dihapus!');
		redirect ('admin/daftarArtikel');
	}


	
	// --- Daftar User
	
	public function daftarUser(){
		// title
		$data['title'] = 'Daftar Pengguna';
		// get data surah dari model
		$data['user'] = $this->Yukngaji_model->getAllUser();

		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar');
		$this->load->view('admin/daftarUser',$data);
		$this->load->view('templates/footer');
	}
}
