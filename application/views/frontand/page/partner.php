    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="page-banner ovbl-dark" style="background-image:url(<?php echo base_url()?>assets/images/banner/banner1.jpg);">
            <div class="container">
                <div class="page-banner-entry">
                   
				 </div>
            </div>
        </div>
		<!-- Breadcrumb row -->
		<div class="breadcrumb-row">
			<div class="container">
				<ul class="list-inline">
					<li><a href="<?php echo base_url()?>">Home</a></li>
					<li>Mitra</li>
				</ul>
			</div>
		</div>
		<!-- Breadcrumb row END -->
        <!-- inner page banner END -->
		<div class="content-block">
            <!-- About Us -->
			<div class="section-area section-sp1">
                <div class="container">
					 <div class="row">
						<div class="col-lg-3 col-md-4 col-sm-12 m-b30">
							<div class="profile-bx text-center">
								<div class="user-profile-thumb">
									<img src="assets/frontand/images/iceeeee.jpg" alt=""/>
								</div>
								<div class="profile-info">
									<h4>ICE-I</h4>
									<span>Indonesia Cyber Education Institute</span>
								</div>
								<div class="profile-social">
									<ul class="list-inline m-a0">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									</ul>
								</div>
								<div class="profile-tabnav">
									<ul class="nav nav-tabs">
										<li class="nav-item">
											<a class="nav-link active" data-toggle="tab" href="#courses"><i class="ti-book"></i>Mitra</a>
										</li>
										
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-9 col-md-8 col-sm-12 m-b30">
							<div class="profile-content-bx">
								<div class="tab-content">
									<div class="tab-pane active" id="courses">
										<div class="profile-head">
											<h3>Mitra ICE-I</h3>
										
										</div>
										<div class="courses-filter">
											<div class="clearfix">
												<ul id="masonry" class="ttr-gallery-listing magnific-image row">
													  <?php foreach ($partner as $key ) {?>
													<li class="action-card col-xl-4 col-lg-6 col-md-12 col-sm-6 publish">
														<div class="cours-bx">
															<div class="action-box">
																<img src="<?php echo base_url()?>upload/<?php echo $key->image; ?>" alt="">
																<a href="<?php echo base_url()?>home/about/<?php echo $key->slug_title;?>" class="btn">Baca Selengkapnya</a>
															</div>
															<div class="info-bx text-center">
																<h5><a href="#"><?php echo $key->title;?></a></h5>
																
															</div>
															
														</div>
													</li>
												<?php };?>
										
										
									
								
								
										
										
												</ul>
											</div>
										</div>
									</div>
			
								
				
								</div> 
							</div>
						</div>
					</div>
				</div>
            </div>
        </div>
		<!-- contact area END -->
    </div>
    <!-- Content END-->