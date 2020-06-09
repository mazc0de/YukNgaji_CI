<!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <!-- <h2 class="section-title">Card Button &amp; Input</h2>
            <p class="section-lead">
              Also, you can give a button or input on the card header.
            </p> -->

            <div class="row">
              <div class="col-2 col-md-2 col-lg-2">
              </div>
              <div class="col-8 col-md-8 col-lg-8">
                <div class="card card-primary">
				  <div class="card-header">
					<div class="section-title">Pilih Surat</div>
                  </div>
                  <div class="card-body">
					<form action="" method="post">
						<input type="hidden" name="userid" value="<?php echo $user['email'];?>">
						<div class="form-group">
							<select class="form-control form-control-lg" name="pilih_surat">
								<?php foreach($surah as $s) :?>
									<option value="<?php echo $s['nama_surah'];?>"><?php echo $s['nama_surah'];?></option>
									<?php endforeach;?>
						</select>
						</div>
						<button class="btn btn-primary" name="mulai">Mulai hafalan!</button>
					</form>
                  </div>
                </div>
              </div>
              <div class="col-2 col-md-2 col-lg-2">
              </div>
            </div>
          </div>
        </section>
      </div>
