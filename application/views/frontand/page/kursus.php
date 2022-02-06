    <!-- Inner Content Box ==== -->
    <div class="page-content bg-white">
        <!-- Page Heading Box ==== -->
        <div class="page-banner ovbl-dark" style="background-image:url(<?php echo base_url()?>assets/images/banner/banner1.jpg);">
            <div class="container">
                <div class="page-banner-entry">
                   
				 </div>
            </div>
        </div>
		<div class="breadcrumb-row">
			<div class="container">
				<ul class="list-inline">
					<li><a href="<?php echo base_url()?>">Home</a></li>
					<li>Kursus</li>
				</ul>
			</div>
		</div>
		<!-- Page Heading Box END ==== -->
		<!-- Page Content Box ==== -->
        <div class="content-block">
			<!-- Blog Grid ==== -->
			<div class="section-area section-sp1">
				<div class="container">
					<div class="ttr-blog-grid-3 row" id="masonry">
						<?php foreach ($kursus as $key ) {?>
					
						<div class="post action-card col-lg-4 col-md-6 col-sm-12 col-xs-12 m-b40">
							<div class="recent-news">
								<div class="action-box">
									<img src="<?php echo base_url()?>upload/<?php echo $key->image;?>" alt="">
								</div>
								<div class="info-bx">
									<ul class="media-post">
										<li><a href="#"><i class="fa fa-calendar"></i><?php echo $key->create_ad;?></a></li>
										<li><a href="#"><i class="fa fa-user"></i>By William</a></li>
									</ul>
									<h5 class="post-title"><a href="blog-details.html"><?php echo $key->title;?></a></h5>
									<p><?php echo $key->meta;?>.</p>
									<div class="post-extra">
										<a href="<?php echo base_url()?>home/about/<?php echo $key->slug_title;?>" class="btn-link">Baca Selengkapnya</a>
									
									</div>
								</div>
							</div>
						</div>
					<?php };?>
					
				
						

				
					</div>
		
				</div>
			</div>
			<!-- Blog Grid END ==== -->
        </div>
		<!-- Page Content Box END ==== -->
    </div>
    <!-- Page Content Box END ==== -->