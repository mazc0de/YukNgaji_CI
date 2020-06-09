<?php

class Yukngaji_model extends CI_Model{
	public function getAllSurah(){
		$query = $this->db->get('tb_surah');
		return $query->result_array();
	}

	// Get id surah
	public function getSurahById($id){
		return $this->db->get_where('tb_surah',['id_surah' => $id])->row_array();
	}
	
	public function getSurahByName($name){
		return $this->db->get_where('tb_surah',['nama_surah' => $name])->row_array();
	}
	
	public function tambahDataSurah(){
		$data = [
			// "id_surah" => $this->input->post(''),
			"nama_surah" => $this->input->post('nama_surah',true),
			"jumlah_ayat" => $this->input->post('jml_ayat',true),
			"surat_ke" => $this->input->post('surat_ke',true),
			"juz_ke" => $this->input->post('juz_ke',true),
			"diturunkan_di" => $this->input->post('diturunkan_di'),
			"surat" => $this->input->post('surah'),
			"url_audio" => $this->input->post('url_audio')
		];
		// $this->db->insert('nama tabel',$varArray);
		$this->db->insert('tb_surah',$data);
	}

	public function ubahDataSurah(){
		$data = [
			// "id_surah" => $this->input->post(''),
			"nama_surah" => $this->input->post('nama_surah',true),
			"jumlah_ayat" => $this->input->post('jml_ayat',true),
			"surat_ke" => $this->input->post('surat_ke',true),
			"juz_ke" => $this->input->post('juz_ke',true),
			"diturunkan_di" => $this->input->post('diturunkan_di'),
			"surat" => $this->input->post('surah'),
			"url_audio" => $this->input->post('url_audio')

		];
		$this->db->where('id_surah',$this->input->post('id'));
		// $this->db->update('nama tabel',$varArray);
		$this->db->update('tb_surah',$data);
	}

	// --- HAPUS SURAH ---
	public function hapusDataSurah($id){
		$this->db->where('id_surah',$id);
		$this->db->delete('tb_surah');
	}

	// --- ARTIKEL ---
	public function getAllArtikel(){
		$query = $this->db->get('tb_artikel');
		return $query->result_array();
	}

	// get id artikel
	public function getArtikelById($id){
		return $this->db->get_where('tb_artikel',['id_artikel' => $id])->row_array();
	}

	// --- TAMBAH ARTIKEL ---
	public function tambahDataArtikel(){
		$time = date("Y-m-d H:i:s");
		$data = [
			// "id_surah" => $this->input->post(''),
			"judul_artikel" => $this->input->post('judul_artikel',true),
			"kategori_artikel" => $this->input->post('kategori_artikel',true),
			"isi_artikel" => $this->input->post('isi_artikel'),
			"tgl_posting" => $time
		];
		// $this->db->insert('nama tabel',$varArray);
		$this->db->insert('tb_artikel',$data);
	}

	// --- EDIT ARTIKEL ---
	public function ubahArtikel(){

		$data = [
			"judul_artikel" => $this->input->post('judul_artikel',true),
			"kategori_artikel" => $this->input->post('kategori_artikel',true),
			"isi_artikel" => $this->input->post('isi_artikel'),
		];
		$this->db->where('id_artikel',$this->input->post('id'));
		// $this->db->update('nama tabel',$varArray);
		$this->db->update('tb_artikel',$data);
	}

	// --- HAPUS ARTIKEL
	public function hapusDataArtikel($id){
		$this->db->where('id_artikel',$id);
		$this->db->delete('tb_artikel');
	}

	// --- USER HAFALAN ---

	public function getAllHafalan(){
		$query = $this->db->get('tb_hafalan');
		return $query->result_array();
	}

	public function hafalanUser(){

		$data = [
			"user_id" => $this->input->post('userid'),
			"surat_id" => $this->input->post('pilih_surat'),
			"status" => 0
		];
		$this->db->insert('tb_hafalan',$data);
	}

	public function getHafalanById($id){
		return $this->db->get_where('tb_hafalan',['id' => $id])->row_array();
	}

	public function editSetoranModel(){
		$data = [
			"status" => $this->input->post('status',true)
		];
		$this->db->where('id',$this->input->post('id'));

		$this->db->update('tb_hafalan',$data);
	}

	public function getAllUser(){
		$query = $this->db->get('users');
		return $query->result_array();
	}

	// --- Hitung jumlah user ---
	public function jumlahPengguna(){
		$query = $this->db->get('users');

		if($query->num_rows()>0){
				return $query->num_rows();
		}
		else{
			return 0;
		}
	}

	// --- Hitung jumlah surah ---
	public function jumlahSurah(){
		$query = $this->db->get('tb_surah');

		if($query->num_rows()>0){
			return $query->num_rows();
		}
		else{
			return 0;
		}
	}

	// --- Hitung jumlah artikel ---
	public function jumlahArtikel(){
		$query = $this->db->get('tb_artikel');

		if($query->num_rows()>0){
			return $query->num_rows();
		}
		else{
			return 0;
		}
	}

	public function getNewsById($id){
		return $this->db->get_where('tb_artikel',['id_artikel' => $id])->row_array();
	}
}
