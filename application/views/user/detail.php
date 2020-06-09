<!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <!-- <h2 class="section-title">Card Button &amp; Input</h2>
            <p class="section-lead">
              Also, you can give a button or input on the card header.
            </p> -->

            <div class="row text-center">
              <div class="col-8 col-md-8 col-lg-8">
                <div class="card card-primary">
                  <div class="card-header" style="display:block;">
                    <h3><?php echo $surah['nama_surah'];?> </h3>
                    <span>
                      Diturunkan di <b> <?php echo $surah['diturunkan_di'];?></b>,
                      Jumlah Ayat <b> <?php echo $surah['jumlah_ayat'];?></b>,
                      Surat Ke<b> <?php echo $surah['surat_ke'];?></b>,
                      Juz Ke<b> <?php echo $surah['juz_ke'];?></b>,
                    </span>
                  </div>
                  <div class="card-body">
										<p style="font-size:100px"><?php echo $surah['surat'];?></p>
                  </div>
                </div>
								</div>
								              <div class="col-4 col-md-4 col-lg-4">
								<div class="card card-primary">
										<div class="card-header" style="display:block;">
											<h3>Audio</h3>
										</div>
										<link href='https://fonts.googleapis.com/css?family=Allerta' rel='stylesheet'>

										<div class="container-audio">
											<audio controls>
											<source src="<?php echo $surah['url_audio'];?>" type="audio/ogg">
										</audio>
									</div>
								</div>
							</div>
								<div class="col-1 col-md-1 col-lg-1">
								</div>
         		  </div>
            </div>
          </div>
        </section>
      </div>
