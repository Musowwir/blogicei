<div id="banner-area" class="banner-area" style="background-image:url(upload/banner/banner1-dark.jpg)">
  <div class="banner-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="banner-heading">
            <h1 class="banner-title">Kegiatan</h1>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Kegiatan</a></li>
                <li class="breadcrumb-item active" aria-current="page">Seluruh Kegiatan</li>
              </ol>
            </nav>
          </div>
        </div><!-- Col end -->
      </div><!-- Row end -->
    </div><!-- Container end -->
  </div><!-- Banner text end -->
</div><!-- Banner area end --> 

<section id="main-container" class="main-container">
  <div class="container">
    <div class="row">
      <div class="col-12">

        <div class="row shuffle-wrapper">
          <div class="col-1 shuffle-sizer"></div>

          <?php foreach ($event as $key ) {?>
          <div class="col-lg-4 col-md-6 shuffle-item">
            <div class="project-img-container">
              <a class="gallery-popup" href="<?php echo base_url()?>upload/<?php echo $key->image; ?>" alt="project-image">
                <img class="img-fluid" src="<?php echo base_url()?>upload/<?php echo $key->image; ?>" alt="project-image">
                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="<?php echo base_url()?>kegiatan/kegiatan_read/<?php echo $key->slug_title;?>"><?php echo $key->title;?></a>
                  </h3>
                  <p class="project-cat"><?php echo date("d F Y", strtotime($key->create_ad));?></p>
                </div>
              </div>
            </div>
          </div><!-- shuffle item 1 end -->
          <?php };?>
        </div><!-- shuffle end -->
      </div>

      <!--<div class="col-12">
        <div class="general-btn text-center">
          <a class="btn btn-primary" href="projects.html">View All Projects</a>
        </div>
      </div>-->

    </div><!-- Content row end -->

  </div><!-- Conatiner end -->
</section><!-- Main container end -->