<!-- Main Content -->
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Admin</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?php echo base_url()."admin/";?>">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="<?php echo base_url()."admin/artikel";?>">Artikel</a></div>
              <div class="breadcrumb-item">Tambah</div>
            </div>
          </div>

          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Tambah artikel</h4>
                  </div>
                  <div class="card-body">
					  <form action="" method="post">
					  <input type="hidden" name="id" value="<?= $artikel['id_artikel'];?>">
						<div class="form-group row mb-4">
						 <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Judul Artikel</label>
							<div class="col-sm-12 col-md-7">
							  <input type="text" class="form-control" name="judul_artikel" value="<?php echo $artikel['judul_artikel'];?>">
							  <small class="form-text text-danger"><?= form_error('judul_artikel');?></small>
							</div>
						 </div>
						 <div class="form-group row mb-4">
						 <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kategori Artikel</label>
							<div class="col-sm-12 col-md-7">
								<div class="form-group"> 
									<select class="form-control" id="kategori_artikel" name="kategori_artikel">
										<?php foreach($kategori as $k) : ?>
											<?php if($k == $artikel['kategori_artikel']):?>
												<option value="<?= $k;?>" selected><?= $k;?></option>
											<?php else : ?>
												<option value="<?= $k;?>"><?= $k;?></option>
											<?php endif; ?>
										<?php endforeach; ?>
									</select>
								</div>
							</div>
						 </div>
						  <div class="form-group row mb-4">
							<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Content</label>
							<div class="col-sm-12 col-md-7">
							  <textarea class="summernote" name="isi_artikel" ><?php echo $artikel['isi_artikel'];?></textarea>
							  <small class="form-text text-danger"><?= form_error('isi_artikel');?></small>
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
