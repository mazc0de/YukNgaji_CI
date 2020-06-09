<div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="<?php echo base_url('admin');?>"><b style="color: #007bff;">Yuk</b>Ngaji.id</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">YN.id</a>
          </div>
          <ul class="sidebar-menu">
						<!-- Dashboard -->
            <li class="menu-header">Main</li>
							<li class="<?php if(current_url() == base_url()."admin")echo "active"; ?>"><a class="nav-link" href="<?php echo base_url()."admin";?>"><i class="fas fa-fire"></i> <span>Dashboard </span></a></li>
							
              <li class="<?php if(current_url() == base_url()."admin/user")echo "active"; ?>"><a class="nav-link" href="<?php echo base_url()."admin/user";?>"><i class="fas fa-users"></i> <span>Daftar User</span></a></li>
						
						<!-- Surah -->
            <li class="menu-header">Content</li>
              <li class="dropdown <?php if(current_url() == base_url()."admin/surah/daftar" || current_url() == base_url()."admin/surah/tambah" || current_url() == base_url()."admin/surah/edit" ) echo "active"; ?> ">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Surah</span></a>
                <ul class="dropdown-menu" style="display: none;">
                  <li class="<?php if(current_url() == base_url()."admin/surah/daftar")echo "active"; ?> "><a class="nav-link" href="<?php echo base_url()."admin/surah/daftar";?>">Daftar Surah</a></li>
                  <li class="<?php if(current_url() == base_url()."admin/surah/tambah")echo "active"; ?> "><a class="nav-link" href="<?php echo base_url()."admin/surah/tambah";?>">Tambah Surah</a></li>
                </ul>
							</li>

						<!-- Artikel -->
              <li class="dropdown <?php if(current_url() == base_url()."admin/artikel/daftar" || current_url() == base_url()."admin/artikel/tambah" || current_url() == base_url()."admin/artikel/edit" ) echo "active"; ?> ">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-newspaper"></i></i> <span>Artikel</span></a>
                <ul class="dropdown-menu" style="display: none;">
                  <li class="<?php if(current_url() == base_url()."admin/artikel/daftar")echo "active"; ?> "><a class="nav-link" href="<?php echo base_url()."admin/artikel/daftar";?>">Daftar Artikel</a></li>
                  <li class="<?php if(current_url() == base_url()."admin/artikel/tambah")echo "active"; ?> "><a class="nav-link" href="<?php echo base_url()."admin/artikel/tambah";?>">Tambah Artikel</a></li>
                </ul>
							</li>
							

          </ul>
		</aside>
      </div>
