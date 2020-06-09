
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Bootstrap Components &rsaquo; Card &mdash; Stisla</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/modules/fontawesome/css/all.min.css">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/modules/chocolat/dist/css/chocolat.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/components.css">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body>
<div class="container">
		<div class="row" style="margin-top: 100px;">
			<div class="col-4">
			</div>
    	<div class="col-4">
        <div class="card card-primary">
          <div class="card-header">
            <h4>Konfirmasi</h4>
            <div class="card-header-action">
            	<a href="<?php echo base_url()."user/setoran";?>" class="btn btn-primary">
              	Back
              </a>
      	    </div>
        	</div>
          <div class="card-body">
						<p>Apakah yakin sudah menghafalnya dengan benar?</p>
						<div class="custom-control custom-checkbox">
							<form action="" method="POST">
					  		<input type="hidden" name="id" value="<?= $hafalan['id'];?>">
								<input type="checkbox" class="custom-control-input" id="customCheck1" name="status" value="1">
								<label class="custom-control-label" for="customCheck1">Centang jika anda sudah yakin</label><br>
								<button class="btn btn-primary" name="edit">Kirim</button>
							</form>
            </div>
          </div>
        </div>
      </div>
      <div class="col-4">
			
      </div>
    </div>

</div>
  <!-- General JS Scripts -->
  <script src="<?php echo base_url();?>assets/modules/jquery.min.js"></script>
  <script src="<?php echo base_url();?>assets/modules/popper.js"></script>
  <script src="<?php echo base_url();?>assets/modules/tooltip.js"></script>
  <script src="<?php echo base_url();?>assets/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url();?>assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="<?php echo base_url();?>assets/modules/moment.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/stisla.js"></script>
  
  <!-- JS Libraies -->
  <script src="<?php echo base_url();?>assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
  <script src="<?php echo base_url();?>assets/modules/jquery-ui/jquery-ui.min.js"></script>

  <!-- Page Specific JS File -->
  
  <!-- Template JS File -->
  <script src="<?php echo base_url();?>assets/js/scripts.js"></script>
  <script src="<?php echo base_url();?>assets/js/custom.js"></script>
</body>
</html>
