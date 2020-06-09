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
							<th>Nama Surah</th>
							<th>Jumlah Ayat</th>
							<th>Surat Ke</th>
							<th>Juz Ke</th>
							<th>Diturunkan Di</th>
							<th>Aksi</th>
                          </tr>
                        </thead>
                        <tbody>   
							<?php $i = 1;?>
							<?php foreach($surah as $s):?>                              
                          <tr>
							<td><?= $i;?></td>
							<td><?= $s['nama_surah'];?></td>
							<td><?= $s['jumlah_ayat'];?></td>
							<td><?= $s['surat_ke'];?></td>
							<td><?= $s['juz_ke'];?></td>
							<td><?= $s['diturunkan_di'];?></td>
							<td>
								<a href="<?= base_url(); ?>user/detail/<?= $s['id_surah'];?>" class="btn btn-icon icon-left btn-info"><i class="fas fa-info-circle"></i> Info</a>
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
