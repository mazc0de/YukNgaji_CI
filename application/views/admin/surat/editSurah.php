<!-- Main Content -->
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Admin</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?php echo base_url()."admin/";?>">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="<?php echo base_url()."admin/surah";?>">Surah</a></div>
              <div class="breadcrumb-item">Tambah</div>
            </div>
          </div>

          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Tambah Surah</h4>
                  </div>
                  <div class="card-body">
					<form action="" method="post">
					  <input type="hidden" name="id" value="<?= $surah['id_surah'];?>">
						  <div class="form-group row mb-4">
							<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Surah</label>
							<div class="col-sm-12 col-md-7">
							  <input type="text" class="form-control" name="nama_surah" value="<?php echo $surah['nama_surah'];?>">
							  <small class="form-text text-danger"><?= form_error('nama_surah');?></small>
							</div>
						  </div>
						  <div class="form-group row mb-4">
							<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jumlah Ayat</label>
							<div class="col-sm-12 col-md-7">
							  <input type="number" class="form-control" name="jml_ayat" value="<?php echo $surah['jumlah_ayat'];?>">
							  <small class="form-text text-danger"><?= form_error('jml_ayat');?></small>
							</div>
						  </div>
						  <div class="form-group row mb-4">
							<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Juz Ke</label>
							<div class="col-sm-12 col-md-7">
							  <input type="number" class="form-control" name="surat_ke" value="<?php echo $surah['surat_ke'];?>">
							  <small class="form-text text-danger"><?= form_error('suratke');?></small>
							</div>
						  </div>
						  <div class="form-group row mb-4">
							<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Juz Ke</label>
							<div class="col-sm-12 col-md-7">
							  <input type="number" class="form-control" name="juz_ke" value="<?php echo $surah['juz_ke'];?>">
							  <small class="form-text text-danger"><?= form_error('juz_ke');?></small>
							</div>
						  </div>
						  <div class="form-group row mb-4">
							<div class="control-label col-form-label text-md-right col-12 col-md-3 col-lg-3">Diturunkan Di</div>
							<div class="custom-switches-stacked mt-2">
							  <label class="custom-switch">
								<input type="radio" name="diturunkan_di" value="Mekkah" class="custom-switch-input" <?php if ($surah['diturunkan_di'] == 'Mekkah') echo 'checked'; ?>>
								<span class="custom-switch-indicator"></span>
								<span class="custom-switch-description">Mekkah</span>
							  </label>
							  <label class="custom-switch">
								<input type="radio" name="diturunkan_di" value="Madinah" class="custom-switch-input" <?php if ($surah['diturunkan_di'] == 'Madinah') echo 'checked'; ?>>
								<span class="custom-switch-indicator"></span>
								<span class="custom-switch-description">Madinah</span>
							  </label>
							  <small class="form-text text-danger"><?= form_error('diturunkan_di');?></small>
							</div>
						  </div>
						  <div class="form-group row mb-4">
							<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Content</label>
							<div class="col-sm-12 col-md-7">
							 <textarea class="summernote" name="surah" ><?php echo $surah['surat'];?></textarea>
							<a href="https://litequran.net/">
								<small class="form-text text-danger">*ambil content disini</small>
						  	</a>
							  <small class="form-text text-danger"><?= form_error('surah');?></small>
							</div>
						  </div>
						<div class="form-group row mb-4">
							<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Url Audio</label>
							<div class="col-sm-12 col-md-7">
									<input type="text" class="form-control" name="url_audio" value="<?php echo $surah['url_audio'];?>">
									<a href="https://isykarima.com/murottal-al-quran-syaikh-khalifah-al-tunaijy-full-30-juz/">
										<small class="form-text text-danger">*ambil url disini</small>
									</a>
									<small class="form-text text-danger"><?= form_error('audio');?></small>
								</div>
							</div>
						  <div class="form-group row mb-4">
							<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
							<div class="col-sm-12 col-md-7">
							  <button class="btn btn-primary" name="edit">Edit</button>
							</div>
					  </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
