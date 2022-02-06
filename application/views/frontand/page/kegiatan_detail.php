<section id="main-container" class="main-container">
  <div class="container">
    <div class="row">

      <div class="col-lg-8 mb-5 mb-lg-0">

        <div class="post-content post-single">
          <div class="post-media post-image">
            <img loading="lazy" src="<?php echo base_url()?>upload/<?php echo $slug['image']; ?>" class="img-fluid" alt="post-image">
          </div>

          <div class="post-body">
            <div class="entry-header">
              <div class="post-meta">
                <span class="post-author">
                  <i class="far fa-user"></i><a href="#"> ICE Instittute</a>
                </span>
                <span class="post-cat">
                  <i class="far fa-folder-open"></i><a href="#"> Berita</a>
                </span> 
                <span class="post-meta-date"><i class="far fa-calendar"></i><?php echo date("F Y", strtotime($slug['create_ad']));?></span>
                <!--<span class="post-comment"><i class="far fa-comment"></i> 03<a href="#"
                    class="comments-link">Comments</a></span>-->
              </div>
              <h2 class="entry-title">
                <?php echo $slug['title'];?>
              </h2>
            </div><!-- header end -->

            <div class="entry-content">
              <?php echo $slug['description'];?>
            </div>

            <div class="tags-area d-flex align-items-center justify-content-between">
              <div class="post-tags">
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
              <div class="share-items">
                <ul class="post-social-icons list-unstyled">
                  <li class="social-icons-head">Share:</li>
                  <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
                  <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                </ul>
              </div>
            </div>

          </div><!-- post-body end -->
        </div><!-- post content end -->

            
      </div><!-- Content Col end -->

      <div class="col-lg-4">

        <div class="sidebar sidebar-right">
          <div class="widget recent-posts">
            <h3 class="widget-title">Recent Posts</h3>
            <?php foreach ($berita as $key ) {?>
            <ul class="list-unstyled">
              <li class="d-flex align-items-center">
                <div class="posts-thumb">
                  <a href="#"><img loading="lazy" alt="img" src="<?php echo base_url()?>upload/<?php echo $key->image;?>"></a>
                </div>
                <div class="post-info">
                  <h4 class="entry-title">
                    <a href="<?php echo base_url()?>berita/berita_read/<?php echo $key->slug_title;?>"><?php echo $key->title;?></a>
                  </h4>
                </div>
              </li><!-- 1st post end-->

            </ul>
          <?php };?>
          </div><!-- Recent post end -->
          
          <div class="widget">
            <h3 class="widget-title">Categories</h3>
            <ul class="arrow nav nav-tabs">
              <li><a href="#">Construction</a></li>
              <li><a href="#">Commercial</a></li>
              <li><a href="#">Building</a></li>
              <li><a href="#">Safety</a></li>
              <li><a href="#">Structure</a></li>
            </ul>
          </div><!-- Categories end -->

          <div class="widget">
            <h3 class="widget-title">Archives </h3>
            <ul class="arrow nav nav-tabs">
              <li><a href="#">Feburay 2016</a></li>
              <li><a href="#">January 2016</a></li>
              <li><a href="#">December 2015</a></li>
              <li><a href="#">November 2015</a></li>
              <li><a href="#">October 2015</a></li>
            </ul>
          </div><!-- Archives end -->

          <!--<div class="widget widget-tags">
            <h3 class="widget-title">Tags </h3>

            <ul class="list-unstyled">
              <li><a href="#">Construction</a></li>
              <li><a href="#">Design</a></li>
              <li><a href="#">Project</a></li>
              <li><a href="#">Building</a></li>
              <li><a href="#">Finance</a></li>
              <li><a href="#">Safety</a></li>
              <li><a href="#">Contracting</a></li>
              <li><a href="#">Planning</a></li>
            </ul>
          </div>--><!-- Tags end -->


        </div><!-- Sidebar end -->
      </div><!-- Sidebar Col end -->

    </div><!-- Main row end -->

  </div><!-- Conatiner end -->
</section><!-- Main container end -->