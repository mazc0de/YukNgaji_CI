<!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <!-- <h2 class="section-title">Card Button &amp; Input</h2>
            <p class="section-lead">
              Also, you can give a button or input on the card header.
            </p> -->

            <div class="row text-justify">
						<div class="col-2 col-md-2 col-lg-2">
						</div>
              <div class="col-8 col-md-8 col-lg-8">
                <div class="card card-primary">
                	<div class="card-header" style="display:block;">
                    	<h3><?php echo $artikel['judul_artikel'];?> </h3>
                    	<span>
                      	Kategori <b> <?php echo $artikel['kategori_artikel'];?></b>
                    	</span>
                 	</div>
    	            <div class="card-body">
										<p style="font-size:100px"><?php echo $artikel['isi_artikel'];?></p>
									</div>
									<div class="card-footer bg-whitesmoke">
										Posted by admin - <?php echo $artikel['tgl_posting'];?>
									</div>
                </div>
						</div>
						<div class="col-2 col-md-2 col-lg-2">
						</div>
         		  </div>
            </div>
          </div>
        </section>
      </div>
