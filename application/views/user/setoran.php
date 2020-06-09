<!-- Main Content -->
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Selamat datang <?php echo $user['nama_depan']; ?></h1>
          </div>
          <div class="section-body">
			<!-- <h2 class="section-title" >Sudah hafal ? yuk setoran</h2>
						<div class="row">
				<div class="col">
					<div class="card">
						<div class="card-header">
							<h5>Setoran</h5>
						</div>
				<div class="card-body">
					<div class="row mt-4">
						<div class="col-12 col-lg-8 offset-lg-2">
					<form action="" method="post">
						<input type="hidden" name="userid" value="<?php echo $user['email'];?>">
						<div class="form-group">
							<select class="form-control form-control-lg" name="setoran">
								<?php foreach($surah as $s):?>                              
									<?php if($s['user_id'] == $user['email']){ ?>
										<option value="<?php echo $s['surat_id'];?>"><?php echo $s['surat_id'];?></option>
									<?php }?>
								<?php endforeach;?>
							</select>
						</div>
					</form>
						<a href="<?php echo base_url(); ?>edit/editSetoran/<?= $s['id_surah'];?>" class="btn btn-primary">Sudah Hafal!</a>
						</div>
						</div>
					</div>	
				</div>
			</div>
		</div> -->
			<h2 class="section-title" >Cek Daftar Hafalanmu</h2>
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <!-- <div class="card-header">
                    <h4></h4>
                  </div> -->
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>                                 
                          <tr>
							<th>No</th>
							<th>Nama Surah</th>
							<th>Status</th>
							<th>Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
							
							<?php $i = 1;?>
							<?php foreach($surah as $s):?>                              
								<?php if($s['user_id'] == $user['email']){ ?>
							<tr>
								<td><?= $i;?></td>
								<td><?= $s['surat_id'];?>
								</td>
								<td><?php $s['status']; 
								
									if($s['status'] == 0){
										echo 'Belum';
									}
									else{
										echo "Sudah";
									}
									?>
								</td>
								<td>
									<a href="<?php echo base_url(); ?>user/editSetoran/<?= $s['id'];?>" class="btn btn-primary 
									<?php if($s['status']==1)echo "disabled";?>
										">Sudah Hafal!</a>


								</td>
							</tr>

							<?php }?>
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
