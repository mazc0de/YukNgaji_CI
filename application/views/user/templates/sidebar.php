<div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="<?php echo base_url('user');?>" >
						<div class="txt">
							<b style="color: #0c9463;">Yuk</b>Ngaji.id</a>
						</div>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">YN.id</a>
					</div>
          <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="<?php if(current_url() == base_url()."user")echo "active"; ?>">
              <a href="<?php echo base_url('user');?>" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
						</li>
            <li class="menu-header">Content</li>
            <li class="<?php if(current_url() == base_url()."user/surah/daftar")echo "active"; ?>">
              <a href="<?php echo base_url('user/surah/daftar');?>" class="nav-link"><i class="fas fa-list-alt"></i><span>Daftar Surah</span></a>
						</li>
            <li class="<?php if(current_url() == base_url()."user/setoran")echo "active"; ?>">
              <a href="<?php echo base_url('user/setoran');?>" class="nav-link"><i class="fas fa-check-circle"></i><span>Setoran</span></a>
						</li>
          </ul>
      </aside>
      </div>
