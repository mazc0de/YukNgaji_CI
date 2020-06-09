<!-- Main Content -->
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Admin</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?php echo base_url()."admin";?>">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="<?php echo base_url()."admin/daftarArtikel";?>">Artikel</a></div>
              <div class="breadcrumb-item">Daftar</div>
            </div>
		  </div>
			<!-- session flashdata untuk sukses menambah artikel  -->
			<?php if($this->session->flashdata('flashTambah')) : ?>
				<div class="row mt-2">
					<div class="col-md-12">
						<div class="alert alert-success alert-dismissible fade show" role="alert">
							Artikel<strong> berhasil </strong> <?= $this->session->flashdata('flashTambah');?>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
						</div>
					</div>
				</div>
			<?php endif; ?>
			<!-- session flashdata untuk sukses menghapus artikel  -->
			<?php if($this->session->flashdata('flashHapus')) : ?>
				<div class="row mt-2">
					<div class="col-md-12">
						<div class="alert alert-danger alert-dismissible fade show" role="alert">
							Artikel<strong> berhasil </strong> <?= $this->session->flashdata('flashHapus');?>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
						</div>
					</div>
				</div>
			<?php endif; ?>
			<!-- session flashdata untuk sukses mengubah artikel  -->
			<?php if($this->session->flashdata('flashUbah')) : ?>
				<div class="row mt-2">
					<div class="col-md-12">
						<div class="alert alert-success alert-dismissible fade show" role="alert">
							Artikel<strong> berhasil</strong> <?= $this->session->flashdata('flashUbah');?>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
						</div>
					</div>
				</div>
			<?php endif; ?>
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Daftar Artikel</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>                                 
                          <tr>
							<th>No</th>
							<th>Judul Artikel</th>
							<th>Kategori Artikel</th>
							<th>Tanggal Posting</th>
							<th>Aksi</th>
                          </tr>
                        </thead>
                        <tbody>   
							<?php $i = 1;?>
							<?php foreach($artikel as $a):?>                              
                          <tr>
							<td><?= $i;?></td>
							<td><?= $a['judul_artikel'];?>
							</td>
							<td><?= $a['kategori_artikel'];?></td>
							<td><?= $a['tgl_posting'];?></td>
							<td>
								<a href="<?php echo base_url(); ?>admin/editArtikel/<?= $a['id_artikel'];?>" class="btn btn-info btn-sm">Edit</a>
								<a href="<?php echo base_url(); ?>admin/hapusArtikel/<?= $a['id_artikel'];?>" class="btn btn-danger btn-sm" onclick=" return confirm('yakin?')">Delete</a>
							</td>
						</tr>
							<?php $i++; endforeach;?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
