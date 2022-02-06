    <!-- Content -->
    <div class="page-content bg-white">
      <!-- inner page banner -->
      <div class="page-banner ovbl-dark" style="background-image:url(<?php echo base_url()?>assets/images/banner/banner2.jpg);">
        <div class="container">
          <div class="page-banner-entry">

          </div>
        </div>
      </div>
      <!-- Breadcrumb row -->
      <div class="breadcrumb-row">
        <div class="container">
          <ul class="list-inline">
            <li><a href="<?php echo base_url()?>">Rumah</a></li>
            <li><?php echo $slug['title'];?></li>
          </ul>
        </div>
      </div>
      <!-- Breadcrumb row END -->
      <div class="content-block">
        <div class="section-area section-sp1">
          <div class="container">
            <div class="row">
              <!-- Left part start -->
              <div class="col-lg-12 col-xl-12">
                <!-- blog start -->
                <div class="recent-news blog-lg">
                  <div class="action-box blog-lg">
                    <img src="<?php echo base_url()?>upload/<?php echo $slug['image']; ?>" alt="">
                  </div>
                  <div class="info-bx">
                    <ul class="media-post">
                      <li><a href="#"><i class="fa fa-calendar"></i><?php echo date("d F Y", strtotime($key->create_ad));?></a></li>
                      <li><a href="#"><i class="fa fa-user"></i>ICE Institute</a></li>
                    </ul>
                    <h5 class="post-title"><a href="#"><?php echo $slug['title'];?>.</a></h5>
                    <p><?php echo $slug['description'];?></p>
                    <div class="ttr-divider bg-gray"><i class="icon-dot c-square"></i></div>
                    <div class="widget_tag_cloud">
                      <h6>TAGS</h6>
                      <div class="tagcloud"> 
                        <!-- <a href="#"><?php echo $slug['tags'];?></a>  -->

                        <?php
                        $str = $slug['tags'];
                        $people= (explode(",",$str));
                        for($i = 0; $i < count($people); ++$i) {
                          echo "&nbsp;";
                          echo "<a href='tag/$people[$i]' class='tag-blue tag'>#".$people[$i]."</a>";  
                          echo "&nbsp;";
                        }

                        ?> 

                      </div>
                    </div>
                    <div class="ttr-divider bg-gray"><i class="icon-dot c-square"></i></div>
                    <h6>SHARE </h6>
                    <ul class="list-inline contact-social-bx">
                      <li><a href="#" class="btn outline radius-xl"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="#" class="btn outline radius-xl"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="#" class="btn outline radius-xl"><i class="fa fa-linkedin"></i></a></li>
                      <li><a href="#" class="btn outline radius-xl"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                    <div class="ttr-divider bg-gray"><i class="icon-dot c-square"></i></div>
                  </div>
                </div>
                <!-- blog END -->
              </div>
              </aside>
            </div>
            <!-- Side bar END -->
          </div>
        </div>
      </div>
    </div>
  </div>
    <!-- Content END-->