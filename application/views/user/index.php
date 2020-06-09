      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Selamat Datang <?php echo $user['nama_depan']; ?></h1>
          </div>

        <div class="section-body">
			<p class="section-lead"></p>
			<div class="row">
				<div class="col">
					<div class="card">
						<div class="card-header">
							<h2 class="section-title" >Yuk hafalan surat Al-Quran</h2>
						</div>
				<div class="card-body">
					<div class="row mt-4">
						<div class="col-12 col-lg-8 offset-lg-2">
							<div class="wizard-steps">
								<div class="wizard-step wizard-step-active">
								<div class="wizard-step-icon">
									<i class="fas fa-list-ol"></i>
								</div>
								<div class="wizard-step-label">
									Pilih Surat
								</div>
								</div>
								<div class="wizard-step wizard-step-active">
									<div class="wizard-step-icon">
									<i class="fas fa-tasks"></i>
								</div>
								<div class="wizard-step-label">
									Setoran
								</div>
								</div>
								<div class="wizard-step wizard-step-success">
									<div class="wizard-step-icon">
										<i class="fas fa-check"></i>
									</div>
									<div class="wizard-step-label">
										Selesai
									</div>
								</div>
							</div>
						<a href="<?php echo base_url()."user/surah/pilih";?>" class="btn btn-primary">Mulai Sekarang</a>
						</div>
						</div>
					</div>
				</div>
			</div>
		</div>
 	</div>
  <div class="section-body">
	<h2 class="section-title">News</h2>
		<p class="section-lead">Artikel dan berita tentang keislaman ada disini!</p>
			<div class="row">
					<?php foreach($artikel as $a) : ?>
				<div class="col-12">
					<div class="card">
						<div class="card-header">
							<a href="<?= base_url(); ?>user/detailNews/<?= $a['id_artikel'];?>">
								<h4><?php echo $a['judul_artikel'];?></h4>
							</a>
						</div>
						<div class="card-body">
							<p><?php echo word_limiter($a['isi_artikel'], 30);?>
								<a href="<?= base_url(); ?>user/detailNews/<?= $a['id_artikel'];?>">baca selengkapnya</a>
							</p>
						</div>
						<div class="card-footer bg-whitesmoke">
							Posted by admin - <?php echo $a['tgl_posting'];?>
						</div>
					</div>
				</div>
				<?php endforeach;?>
		</div>
  </div>
        </section>
      </div>
      