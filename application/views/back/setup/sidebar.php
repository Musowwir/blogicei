 <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">
        <div>
          <p class="app-sidebar__user-name"><?php echo $this->session->userdata('nama_user')?></p>
          <p class="app-sidebar__user-designation">Frontend Developer</p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item active" href="dashboard.html"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
       
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Master Data</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="<?php echo base_url()?>kategori"><i class="app-menu__icon fa fa-edit"></i> Kategori</a></li>
            <li><a class="treeview-item" href="<?php echo base_url()?>sub"  rel="noopener"><i class="app-menu__icon fa fa-edit"></i> Sub Kategori</a></li>
           
            <li><a class="treeview-item" href="<?php echo base_url()?>slide"><i class="app-menu__icon fa fa-edit"></i> Slide</a></li>
          </ul>
        </li>
        <li><a class="app-menu__item" href="<?php echo base_url()?>blog"><i class="app-menu__icon fa fa-sticky-note-o"></i><span class="app-menu__label">Posting</span></a></li>
    
    
    
      </ul>
    </aside>