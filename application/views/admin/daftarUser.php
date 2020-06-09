<!-- Main Content -->
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Admin</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?php echo base_url()."admin";?>">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="<?php echo base_url()."admin/surah";?>">Surah</a></div>
              <div class="breadcrumb-item">Daftar</div>
            </div>
          </div>
			<!-- session flashdata untuk sukses menghapus surah  -->
			<?php if($this->session->flashdata('flashHapus')) : ?>
			<div class="row mt-2">
				<div class="col-md-12">
					<div class="alert alert-danger alert-dismissible fade show" role="alert">
						Data Surah<strong> berhasil </strong> <?= $this->session->flashdata('flashHapus');?>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
				</div>
			</div>
			<?php endif; ?>
			<!-- session flashdata untuk sukses mengedit surah  -->
			<?php if($this->session->flashdata('flashUbah')) : ?>
				<div class="row mt-2">
					<div class="col-md-12">
						<div class="alert alert-success alert-dismissible fade show" role="alert">
							Data Surah<strong> berhasil</strong> <?= $this->session->flashdata('flashUbah');?>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
						</div>
					</div>
				</div>
			<?php endif; ?>
			<!-- session flashdata untuk sukses menambah surah  -->
			<?php if($this->session->flashdata('flashTambah')) : ?>
				<div class="row mt-2">
					<div class="col-md-12">
						<div class="alert alert-success alert-dismissible fade show" role="alert">
							Data Surah<strong> berhasil</strong> <?= $this->session->flashdata('flashTambah');?>
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
                    <h4>Daftar Surah</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>                                 
                          <tr>
							<th>No</th>
							<th>Nama Depan</th>
							<th>Nama Belakang</th>
							<th>Email</th>
							<th>Role</th>
                          </tr>
                        </thead>
                        <tbody>   
							<?php $i = 1;?>
							<?php foreach($user as $u):?>                              
                          <tr>
							<td><?= $i;?></td>
							<td><?= $u['nama_depan'];?>
							</td>
							<td><?= $u['nama_belakang'];?></td>
							<td><?= $u['email'];?></td>
							<td><?php $u['role_id'];
								if($u['role_id'] == 1) echo 'Admin';
								else{ echo 'Pengguna';}
							?></td>
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
