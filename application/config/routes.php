<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';

// Login Routes
$route['auth/login'] = 'auth/index';

// Register Routes
$route['auth/register'] = 'auth/register';


// Surah Routes
$route['admin/surah/daftar'] = 'admin/daftarSurah';
$route['admin/surah/tambah'] = 'admin/tambahSurah';
$route['admin/surah/edit'] = 'admin/editSurah/';
$route['admin/surah/hapus'] = 'admin/hapusSurah';
$route['admin/user'] = 'admin/daftarUser';

// Artikel Routes
$route['admin/artikel/daftar'] = 'admin/daftarArtikel';
$route['admin/artikel/tambah'] = 'admin/tambahArtikel';
$route['admin/artikel/edit'] = 'admin/editArtikel';
$route['admin/artikel/hapus'] = 'admin/hapusArtikel';

// User Routes
$route['user/surah/daftar'] = 'user/daftarSurah';
$route['user/surah/pilih'] = 'user/pilihSurat';


$route['admin/daftar'] = 'admin/daftarSurah';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
