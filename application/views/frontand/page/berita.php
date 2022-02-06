<div id="banner-area" class="banner-area" style="background-image:url(upload/banner/banner2-dark.jpg)">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title">Berita</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                      <li class="breadcrumb-item"><a href="<?php echo base_url()?>">Home</a></li>
                      <li class="breadcrumb-item"><a href="<?php echo base_url()?>berita">Berita</a></li>
                      <li class="breadcrumb-item active" aria-current="page">All Berita</li>
                    </ol>
                </nav>
              </div>
          </div><!-- Col end -->
        </div><!-- Row end -->
    </div><!-- Container end -->
  </div><!-- Banner text end -->
</div><!-- Banner area end --> 

<section id="main-container" class="main-container pb-2">
  <div class="container">
    <div class="row">

      <?php foreach ($berita as $key ) {?>
      <div class="col-lg-4 col-md-6 mb-5">
        <div class="ts-service-box">
            <div class="ts-service-image-wrapper">
              <img loading="lazy" class="w-100" src="<?php echo base_url()?>upload/<?php echo $key->image; ?>" alt="service-image">
            </div>
            <div class="d-flex">
              <!--<div class="ts-service-box-img">
                  <img loading="lazy" src="images/icon-image/service-icon1.png" alt="service-icon">
              </div>-->
              <div class="ts-service-info-custom">
                  <h3 class="service-box-title"><a href="<?php echo base_url()?>berita/berita_read/<?php echo $key->slug_title;?>"><?php echo $key->title;?></a></h3>
                  <p><?php echo $key->meta;?></p>
                  <a class="btn btn-primary" href="<?php echo base_url()?>berita/berita_read/<?php echo $key->slug_title;?>" aria-label="service-details"><i class="fa fa-caret-right"></i> Learn more</a>
              </div>
            </div>
        </div><!-- Service1 end -->
      </div><!-- Col 1 end -->
      <?php };?>

    </div><!-- Main row end -->
  </div><!-- Conatiner end -->
</section><!-- Main container end -->