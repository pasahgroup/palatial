<?php $__env->startSection('content'); ?>

<style>
.vl {
	border-left: 1px solid green;
	height: 20px;
}
</style>
<style type="text/css">
		.wrapper {
	padding: 5px;
	 background-color: rgba(0,0,0,0.00001);
	max-width: 450px;
	margin: 2px auto;
}

.demo-1 {
	overflow: hidden;
	display: -webkit-box;
	-webkit-line-clamp: 2;
	-webkit-box-orient: vertical;
}

.demo-2 {
	overflow: hidden;
	white-space: nowrap;
	text-overflow: ellipsis;
	max-width: 140px;
}

.demo-3 {
	overflow: hidden;
	display: -webkit-box;
	-webkit-line-clamp: 1;
	-webkit-box-orient: vertical;
}
</style>


 <!--  <link rel="stylesheet" href="../../../../plugins/fontawesome-free/css/all.min.css"> -->
	<link rel="stylesheet" href="../../css/style.css">

      <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/> -->
      <!-- <link rel="stylesheet" href="style.css"> -->


 <?php if(isset($sliders)): ?>
		<div class="page-slider margin-bottom-40">
				 <div id="myCarousel" class="carousel slide carousel-slider" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
		 <!--  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
 -->
			 <?php $i=0 ?>
								<?php for($i=0;$i<$slidersCount;$i++): ?>
								<li data-target="#carousel-example-generic" data-slide-to="<?php echo e($i); ?>" class="active"></li>
								<?php endfor; ?>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner">
			<div class="item active"  style="background-image: url(<?php echo e(URL::asset('/storage/uploads/'.$slidersf->attachment)); ?>);height:66vh;width:100% background-repeat: no-repeat;
										 background-size:100% 100%;
											 background-position: center;">
										<div class="container">
											 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="carousel-position-six text-center">

															 <p>
																 <b class="text-white"><?php echo e($slidersf->tour_name); ?> </b>
															 </p>

												<div class="tab-pane">
												 <div class="panel-group">
														<p class="carousel-subtitle border-top-bottom margin-bottom" data-animation="animated fadeInDown"><a  href="#accordion13_<?php echo e($slidersf->id); ?>" data-parent="#accordion1" data-toggle="collapse" class="accordion-toggle"><b class="text-white">Read</b></a>
														</p>

															<div class="panel-collapse collapse in" id="accordion13_<?php echo e($slidersf->id); ?>">
																	<div class="wrapper">
																	 <p class="demo-1"><?php echo e($slidersf->description); ?></p>
																	<p><a href="<?php echo e(route('safaris-slider',$slidersf->tour_id)); ?>" data-animation="animated fadeInUp">
																		<b>Read More<i class="fa fa-angle-double-right"></i></b></a></p>

																	</div>
														</div>

												</div>
												</div>
												</div>
												</div>

										</div>
								</div>


	<?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slides): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<div class="item">
										<div style="background-image: url(<?php echo e(URL::asset('/storage/uploads/'.$slides->attachment)); ?>); height: 65vh; width: 100%; background-repeat: no-repeat;
															background-size:100% 100%;
											 background-position: center;
												 position: relative;">

										<div class="container">
												<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="carousel-position-six text-center">

								<p>
						 <b class="text-white"><?php echo e($slides->tour_name); ?> </b>
						 </p>

												<div class="tab-pane">
												 <div class="panel-group">
														<p class="carousel-subtitle border-top-bottom margin-bottom" data-animation="animated fadeInDown"><a  href="#accordion1_<?php echo e($slides->id); ?>" data-parent="#accordion1" data-toggle="collapse" class="accordion-toggle"><b class="text-white">Read</b></a>
														</p>

														<div class="">
															<div class="panel-collapse collapse in" id="accordion1_<?php echo e($slides->id); ?>">
																	<div class="wrapper">
																	 <p class="demo-1"><?php echo e($slides->description); ?></p>


																	<p><a href="<?php echo e(route('safaris-slider',$slides->tour_id)); ?>" data-animation="animated fadeInUp">
																		<b>Read More <i class="fa fa-angle-double-right"></i></b></a></p>
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
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

									<?php $__currentLoopData = $quickLinkSliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $quickSliderf): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									 <div class="item">
										<div style="background-image: url(<?php echo e(URL::asset('/storage/uploads/'.$quickSliderf->attachment)); ?>); height: 65vh; width: 100%; background-repeat: no-repeat;
														background-size:100% 100%;
											 background-position: center;
											 background-repeat: no-repeat;
												 position: relative;">

										<div class="container">
												<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="carousel-position-six text-center">

						 <p>
						 <b class="text-white"><?php echo e($quickSliderf->quick_title); ?> </b>
						 </p>
												<div class="tab-pane">
												 <div class="panel-group">
														<p class="carousel-subtitle border-top-bottom margin-bottom" data-animation="animated fadeInDown"><a  href="#accordion12_<?php echo e($quickSliderf->id); ?>" data-parent="#accordion1" data-toggle="collapse" class="accordion-toggle"><b class="text-white">Read</b></a>
														</p>

															<div class="">
															<div class="panel-collapse collapse in" id="accordion12_<?php echo e($quickSliderf->id); ?>">
																	<div class="wrapper">
																	 <p class="demo-1"><?php echo e($quickSliderf->quick_description); ?></p>
																		<p><a href="/QuickLink/<?php echo e($quickSliderf->id); ?>" data-animation="animated fadeInUp">
																		<b>Read More <i class="fa fa-angle-double-right"></i></b></a></p>
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
							 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div>

		<!-- Left and right controls -->

		<a class="left carousel-control" href="#myCarousel" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>

		<div class="row booking-btn-top">
			<b><marquee scrollamount="2">Palatial-Tour and Adventure Welcomed you to Experience the beauty of Tanzania</marquee></b>
				</div>
	</div>
<?php endif; ?>

 <?php if(isset($welcome_message)): ?>
<div class="container">
	 <?php $__currentLoopData = $welcome_message; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									 <div class="col-lg-5 col-md-7 col-sm-12 col-xs-12">
										 <img src="<?php echo e(URL::asset('/storage/uploads/'.$message->attachment)); ?>" class="img-fluid" alt="Palatial Image" style="height:200px;width:100%;">
										</div>
										<div class="col-lg-5 col-md-7 col-sm-12 col-xs-12">
											<h2><a href="#"><?php echo e($message->quick_title); ?></a></h2>
											<h4><a href="#">Welcome to <b>Palatial Tours</b></a></h4>
											<hr>
											<h6 class="text-white"><?php echo e($message->quick_description); ?>.</h6>
									</div>
						
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		
	 <?php endif; ?>
	 </div>
 <!-- Experience v1 -->

<section id="popular_experience" class="blog_section">
		<div class="container">


		<div class="row">
						<div class="col-md-12" data-aos="fade-up">
								<div class="section text-center">
					<div class="col-md-12 text-center">

<h3 class="" style="color:#c56c1d">
Tour Packages
</h3>
										</div>

						</div>
						</div>
				</div>
				<hr>

					<!-- BEGIN CONTENT -->
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

						<div class="">
						 <div data-aos="fade-up">
								
		  <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 front-carousel booking-tourPadding">
                     <h6 data-text= "" style="font-size: 20px;color: green;font-weight: 700; text-transform:lowercase;text-align: center;">Wildlife Safaris</h6>

  <div id="myCarousel4p" class="carousel_no slide" data-ride="carousel">
    <!-- Indicators -->
   <!--  <ol class="carousel-indicators">
      <li data-target="#myCarousel3" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel3" data-slide-to="1"></li>
      <li data-target="#myCarousel3" data-slide-to="2"></li>
    </ol> -->

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
         <div class="package-list-wrap ">
                                        <img src="<?php echo e(URL::asset('/storage/uploads/'.$popular_safari->attachment)); ?>" class="img-fluid" alt="No Image" style="height:240px;width:100%;">
                                         <span class="off-box"><?php echo e($popular_safari->days); ?> Days: $<?php echo e(number_format($popular_safari->price),2); ?></span>
        <div class="package-list-content">
      <h3 class="package-list-title">
      <p><?php echo e($popular_safari->tour_name); ?></p>
                          </h3>
   <a class="package-list-button" href="<?php echo e(route('safaris-slider-packages',$popular_safari->id)); ?>">Explore More</a>
                                          </div>
                                        </div>
      </div>



           <?php $__currentLoopData = $popular_safarif; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $safaris): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                        <div class="item">
                          <div class="package-list-wrap ">
                                        <img src="<?php echo e(URL::asset('/storage/uploads/'.$safaris->attachment)); ?>" class="img-fluid" alt="No Image" style="height:240px;width:100%;">
                                            <span class="off-box"><?php echo e($safaris->days); ?> Days: $<?php echo e(number_format($safaris->price),2); ?></span>
        <div class="package-list-content">
      <h3 class="package-list-title">
      <p><?php echo e($safaris->tour_name); ?></p>
                          </h3>
   <a class="package-list-button" href="<?php echo e(route('safaris-slider-packages',$safaris->id)); ?>">Explore More</a>
                                          </div>
                                        </div>
                      </div>
                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <!-- Left and right controls -->
  <a data-slide="prev" href="#myCarousel4p" class="carousel-control left">
                      <i class="fa fa-angle-left"></i>
                    </a>
                    <a data-slide="next" href="#myCarousel4p" class="carousel-control right">
                      <i class="fa fa-angle-right"></i>
                    </a>
  </div>
   </div>


	<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 front-carousel booking-tourPadding">
									<h6 data-text= "" style="font-size: 20px;color: green;font-weight: 700; text-transform:lowercase">Hiking And Trekking</h6>

	<div id="myCarousel2p" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
		 <!--  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li> -->
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner">
			<div class="item active">
				 <div class="package-list-wrap ">

																				<img src="<?php echo e(URL::asset('/storage/uploads/'.$popular_trekking->attachment)); ?>" class="img-fluid" alt="No Image" style="height:240px;width:100%;">
																				<span class="off-box"><?php echo e($popular_trekking->days); ?> Days: $<?php echo e(number_format($popular_trekking->price),2); ?></span>
				<div class="package-list-content">
			<h3 class="package-list-title">
			<p><?php echo e($popular_trekking->tour_name); ?></p>
													</h3>
	 <a class="package-list-button" href="<?php echo e(route('safaris-slider-packages',$popular_trekking->id)); ?>">Explore More</a>
																					</div>
																				</div>
			</div>



						<?php $__currentLoopData = $popular_trekkingf; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trekking): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
												<div class="item">
												 <div class="package-list-wrap ">


																				<img src="<?php echo e(URL::asset('/storage/uploads/'.$trekking->attachment)); ?>" class="img-fluid" alt="No Image" style="height:240px;width:100%;">
																						 <span class="off-box"><?php echo e($trekking->days); ?> Days: $<?php echo e(number_format($trekking->price),2); ?></span>
				<div class="package-list-content">
			<h3 class="package-list-title">
			<p><?php echo e($trekking->tour_name); ?></p>
													</h3>
	 <a class="package-list-button" href="<?php echo e(route('safaris-slider-packages',$trekking->id)); ?>">Explore More</a>
																					</div>
																				</div>
											</div>
											 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div>



		<a data-slide="prev" href="#myCarousel2p" class="carousel-control left">
											<i class="fa fa-angle-left"></i>
										</a>
										<a data-slide="next" href="#myCarousel2p" class="carousel-control right">
											<i class="fa fa-angle-right"></i>
										</a>
	</div>
	 </div>
		<!-- Beach Holidays -->
	<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 front-carousel booking-tourPadding">
												 <h6 data-text= "" style="font-size: 20px;color: green;font-weight: 700; text-transform:lowercase">Beach Holiday</h6>

	<div id="myCarousel3p" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
	 <!--  <ol class="carousel-indicators">
			<li data-target="#myCarousel3" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel3" data-slide-to="1"></li>
			<li data-target="#myCarousel3" data-slide-to="2"></li>
		</ol> -->

		<!-- Wrapper for slides -->
		<div class="carousel-inner">
			<div class="item active">
				 <div class="package-list-wrap ">
																				<img src="<?php echo e(URL::asset('/storage/uploads/'.$popular_holiday->attachment)); ?>" class="img-fluid" alt="No Image" style="height:240px;width:100%;">
																				 <span class="off-box"><?php echo e($popular_holiday->days); ?> Days: $<?php echo e(number_format($popular_holiday->price),2); ?></span>
				<div class="package-list-content">
						<h3 class="package-list-title">
			<p><?php echo e($popular_holiday->tour_name); ?></p>
													</h3>
	 <a class="package-list-button" href="<?php echo e(route('safaris-slider-packages',$popular_holiday->id)); ?>">Explore More</a>
																					</div>
																				</div>
			</div>



						 <?php $__currentLoopData = $popular_holidayf; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $holidays): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
												<div class="item">
													<div class="package-list-wrap ">
																				<img src="<?php echo e(URL::asset('/storage/uploads/'.$holidays->attachment)); ?>" class="img-fluid" alt="No Image" style="height:240px;width:100%;">
																				 <span class="off-box"><?php echo e($holidays->days); ?> Days: $<?php echo e(number_format($holidays->price),2); ?></span>
				<div class="package-list-content">
					<h3 class="package-list-title">
			<p><?php echo e($holidays->tour_name); ?></p>
													</h3>
	 <a class="package-list-button" href="<?php echo e(route('safaris-slider-packages',$holidays->id)); ?>">Explore More</a>
																					</div>
																				</div>
											</div>
											 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div>

		<!-- Left and right controls -->
	<a data-slide="prev" href="#myCarousel3p" class="carousel-control left">
											<i class="fa fa-angle-left"></i>
										</a>
										<a data-slide="next" href="#myCarousel3p" class="carousel-control right">
											<i class="fa fa-angle-right"></i>
										</a>
	</div>
	 </div>

 <!-- Beach Holidays -->
	<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 front-carousel booking-tourPadding">
										 <h6 data-text= "" style="font-size: 20px;color: green;font-weight: 700; text-transform:lowercase">Historical Sites</h6>

	<div id="myCarousel4p" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
	 <!--  <ol class="carousel-indicators">
			<li data-target="#myCarousel3" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel3" data-slide-to="1"></li>
			<li data-target="#myCarousel3" data-slide-to="2"></li>
		</ol> -->

		<!-- Wrapper for slides -->
		<div class="carousel-inner">
			<div class="item active">
				 <div class="package-list-wrap ">
																				<img src="<?php echo e(URL::asset('/storage/uploads/'.$popular_historical->attachment)); ?>" class="img-fluid" alt="No Image" style="height:240px;width:100%;">
																				 <span class="off-box"><?php echo e($popular_historical->days); ?> Days: $<?php echo e(number_format($popular_historical->price),2); ?></span>
				<div class="package-list-content">
			<h3 class="package-list-title">
			<p><?php echo e($popular_historical->tour_name); ?></p>
													</h3>
	 <a class="package-list-button" href="<?php echo e(route('safaris-slider-packages',$popular_historical->id)); ?>">Explore More</a>
																					</div>
																				</div>
			</div>



						 <?php $__currentLoopData = $popular_historicalf; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $historicalf): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
												<div class="item">
													<div class="package-list-wrap ">
																				<img src="<?php echo e(URL::asset('/storage/uploads/'.$historicalf->attachment)); ?>" class="img-fluid" alt="No Image" style="height:240px;width:100%;">
																						<span class="off-box"><?php echo e($historicalf->days); ?> Days: $<?php echo e(number_format($historicalf->price),2); ?></span>
				<div class="package-list-content">
			<h3 class="package-list-title">
			<p><?php echo e($historicalf->tour_name); ?></p>
													</h3>
	 <a class="package-list-button" href="<?php echo e(route('safaris-slider-packages',$historicalf->id)); ?>">Explore More</a>
																					</div>
																				</div>
											</div>
											 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div>

		<!-- Left and right controls -->
	<a data-slide="prev" href="#myCarousel4p" class="carousel-control left">
											<i class="fa fa-angle-left"></i>
										</a>
										<a data-slide="next" href="#myCarousel4p" class="carousel-control right">
											<i class="fa fa-angle-right"></i>
										</a>
	</div>
	 </div>
</div>
</div>
</div>
		</div>

</section>

	<hr class="text-white">

<section id="blog" class="">
		<div class="container">
				<div class="row">
						<div class="col-md-12" data-aos="fade-up">
								<div class="section text-center">
					<div class="col-md-12 text-center">
<h3 class="" style="color:#c56c1d">
Special Offers
</h3>

										</div>

						</div>
						</div>
				</div>
				<hr>


						 <div data-aos="fade-up">
						
							<?php $__currentLoopData = $offers_private; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $special_private): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

	 <div class="col-lg-4 col-md-4">
		 <h4><b style="background:"><?php echo e($special_private->sales_header); ?></b></h4>
												<div class="single_blog listing-shot">

																<div class="listing-shot-img">
																			<div class="listing-badge now-open"><strong><?php echo e(round($special_private->save/$special_private->price * 100),0); ?>% Off</strong></div>
																		<div class="blog_image">
																		<img src="<?php echo e(URL::asset('/storage/uploads/'.$special_private->attachment)); ?>" class="img-responsive" alt="<?php echo e($special_private->tour_name); ?>" style="height:250px;width:100%;">
																		</div>
																</div>
																 <h3 class="text-center demo-3"> <b style="color:" title="<?php echo e($special_private->tour_name); ?>"><?php echo e($special_private->tour_name); ?></b>
																		</h3>
																 <hr>
														<div class="blog-text">
														<div class="row">

																		 <div class="col-md-7 col-sm-7 col-xs-7 booking-btn" style="border-right:1px solid rgba(71,85,95,.11) ">
																						 <strong>Dead Line: <b class="text-danger"><?php echo e($special_private->offer_deadline); ?></b></strong>
																				 </div>

																				<div class="col-md-5 col-sm-5 col-xs-5 booking-btn">
																				<span class="text-danger" style="font-size:17px"><strong>$<?php echo e(number_format($special_private->new_price),2); ?> </strong> pp
																					 </span><style=""><sup>$ <?php echo e(number_format($special_private->price),2); ?> </sup></s><br>
																						<span style="font-size:12px;">Save $<?php echo e(number_format($special_private->save),2); ?></span>

																				 </div>
																		</div>

																	<div class="col-md-12 col-sm-12 col-xs-12 text-left booking-btn-gray">

																			<div class="row">
																					 <div class="col-md-6 col-sm-6 col-xs-6"  style="border-right:1px solid rgba(255,255,0,.5)">
																						 Tour Duration:
																						</div>

																							 <div class="col-md-6 col-sm-6 col-xs-6" style="font-size:14px;">
																									 <strong><?php echo e($special_private->days); ?> Days, <?php echo e($special_private->days -1); ?> Nights</strong>
																								</div>
																						 </div>

																							 <div class="row">
																							 <div class="col-md-6 col-sm-6 col-xs-6"  style="border-right:1px solid rgba(255,255,0,.5)">
																							 <span> Physical Rating: </span>
																						 </div>


																							 <div class="col-md-5 col-sm-5 col-xs-5" style="font-size:14px;">
																									 <strong><?php echo e($special_private->physical_rating); ?></strong>
																								</div>
																							 </div>
																								<div class="row">
																									<div class="col-md-6 col-sm-6 col-xs-6" style="border-right:1px solid rgba(255,255,0,.5)">
																							 <span> Tour Category: </span>
																					 </div>


																							 <div class="col-md-6 col-sm-6 col-xs-6" style="font-size:14px;">
																									 <strong><?php echo e($special_private->category); ?></strong>
																								</div>
																						</div>
																									<div class="row">
																									<div class="col-md-6 col-sm-6 col-xs-6" style="border-right:1px solid rgba(255,255,0,.5)">
																							 <span> Tour Code: </span>
																					 </div>

																							 <div class="col-md-6 col-sm-6 col-xs-6" style="font-size:14px;">
																									 <strong><?php echo e($special_private->tour_code); ?></strong>
																								</div>
																						</div>
																						 </div>


																 <div class="row">
																		<div class="col-md-12 col-sm-12 col-xs-12 text-right booking-btn-gray">
																									<a href="<?php echo e(route('safaris.show',$special_private->tour_id,$offers)); ?>" class="booking-btn text-center"><b>Explore Tour Details</b></a>
																		</div>
																			</div>
																</div>

												</div>
										</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


	<?php $__currentLoopData = $offers_group; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $special_group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	 <div class="col-lg-4 col-md-4">
		 <h4><b style="background:"><?php echo e($special_group->sales_header); ?></b></h4>
												<div class="single_blog listing-shot">

																<div class="listing-shot-img">
																			<div class="listing-badge now-open"><strong><?php echo e(round($special_group->save/$special_group->price * 100),0); ?>% Off</strong></div>
																		<div class="blog_image">
																		<img src="<?php echo e(URL::asset('/storage/uploads/'.$special_group->attachment)); ?>" class="img-responsive" alt="<?php echo e($special_group->tour_name); ?>" style="height:250px;width:100%;">
																		</div>
																</div>
																			 <h3 class="text-center demo-3"> <b style="color:" title="<?php echo e($special_group->tour_name); ?>"><?php echo e($special_group->tour_name); ?></b>
																			 </h3>
																 <hr>
														<div class="blog-text">
														<div class="row">

																		 <div class="col-md-7 col-sm-7 col-xs-7 booking-btn" style="border-right:1px solid rgba(71,85,95,.11) ">
																						 <strong>Dead Line: <b class="text-danger"><?php echo e($special_group->offer_deadline); ?></b></strong>
																				 </div>

																				<div class="col-md-5 col-sm-5 col-xs-5 booking-btn">
																				<span class="text-danger" style="font-size:17px"><strong>$<?php echo e(number_format($special_group->new_price),2); ?> </strong> pp
																					 </span><s style=""><sup>$ <?php echo e(number_format($special_group->price),2); ?> </sup></s><br>
																						<span style="font-size:12px;">Save $<?php echo e(number_format($special_group->save),2); ?></span>

																				 </div>
																		</div>

																	<div class="col-md-12 col-sm-12 col-xs-12 text-left booking-btn-gray">
																			<div class="row">
																					 <div class="col-md-6 col-sm-6 col-xs-6"  style="border-right:1px solid rgba(255,255,0,.5)">
																						 Tour Duration:
																						</div>

																							 <div class="col-md-6 col-sm-6 col-xs-6" style="font-size:14px;">
																									 <strong><?php echo e($special_group->days); ?> Days, <?php echo e($special_group->days -1); ?> Nights</strong>
																								</div>
																						 </div>

																							 <div class="row">
																							 <div class="col-md-6 col-sm-6 col-xs-6"  style="border-right:1px solid rgba(255,255,0,.5)">
																							 <span> Physical Rating: </span>
																						 </div>


																							 <div class="col-md-5 col-sm-5 col-xs-5" style="font-size:14px;">
																									 <strong><?php echo e($special_group->physical_rating); ?></strong>
																								</div>
																							 </div>
																								<div class="row">
																									<div class="col-md-6 col-sm-6 col-xs-6" style="border-right:1px solid rgba(255,255,0,.5)">
																							 <span> Tour Category: </span>
																					 </div>


																							 <div class="col-md-6 col-sm-6 col-xs-6" style="font-size:14px;">
																									 <strong><?php echo e($special_group->category); ?></strong>
																								</div>
																						</div>
																									<div class="row">
																									<div class="col-md-6 col-sm-6 col-xs-6" style="border-right:1px solid rgba(255,255,0,.5)">
																							 <span> Tour Code: </span>
																					 </div>

																							 <div class="col-md-6 col-sm-6 col-xs-6" style="font-size:14px;">
																									 <strong><?php echo e($special_group->tour_code); ?></strong>
																								</div>
																						</div>
																						 </div>

															<div class="row">
																		<div class="col-md-12 col-sm-12 col-xs-12 text-right booking-btn-gray">
																					<a href="<?php echo e(route('grouptour.show',$special_group->tour_id,$offers)); ?>" class="booking-btn text-center"><b>Explore Tour Details</b></a>
																		</div>
																			</div>
																</div>

												</div>
										</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div>
	<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12 text-right">
						<a class="btn-transparent" href="/offers" target="_blank"><i class="fas fa-gift"></i> Explore More Offers
						</a>
					</div>
				</div>

</div>
 </section>
	<hr class="text-white">
		<!-- Experience v1 -->

<section id="blog" class="">
		<div class="container">
				<div class="row">
						<div class="col-md-12" data-aos="fade-up">
								<div class="section text-center">
					<div class="col-md-12 text-center">


<h3 class="" style="color:#c56c1d">
Popular Experiences
</h3>

										</div>

						</div>
						</div>
				</div>
				<hr>
								<div class="small-package-list">
											 <?php if($popular_safari): ?>
												<div class="col-lg-4 col-md-4">
												<div class="single_blog listing-shot">

																<div class="listing-shot-img">
																		<div class="blog_image">
																		<img src="<?php echo e(URL::asset('/storage/uploads/'.$popular_safari->attachment)); ?>" class="img-responsive" alt="<?php echo e($popular_safari->tour_name); ?>" style="height:250px;width:100%;">
																		</div>
																</div>

																<h3 class="text-center booking-btn booking-tourPadding demo-3"> <b style="color:" title="<?php echo e($popular_safari->tour_name); ?>"><?php echo e($popular_safari->tour_name); ?></b>
															 		</h3>


																			<div class="">
																 <h4 class="text-center"> <b style="color:#e45000;"><marquee scrollamount="2"><?php echo e($popular_safari->type); ?></marquee></b>
																		</h4>
																</div>
														<div class="blog-text">
														<div class="row">

																		 <div class="col-md-6 col-sm-6 col-xs-6 booking-btn" style="border-right:1px solid rgba(71,85,95,.11)">
																						 <strong><b class="text-white"><?php echo e($popular_safari->days); ?> Days, <?php echo e($popular_safari->days -1); ?> Nights</b></strong>
																				 </div>

																				<div class="col-md-6 col-sm-6 col-xs-6 booking-btn">
																				<span class="text-white"><strong>From $<?php echo e(number_format($popular_safari->price),2); ?></b>  </strong>
																					 </span>

																				 </div>
																		</div>

																			<div class="col-md-12 col-sm-12 col-xs-12 text-left booking-btn-gray">

																			<div class="row">
																					 <div class="col-md-6 col-sm-6 col-xs-6"  style="border-right:1px solid rgba(255,255,0,.5)">
																						 Tour Duration:
																						</div>

																							 <div class="col-md-6 col-sm-6 col-xs-6" style="font-size:14px;">
																									 <strong><?php echo e($popular_safari->days); ?> Days, <?php echo e($popular_safari->days -1); ?> Nights</strong>
																								</div>
																						 </div>

																							 <div class="row">
																							 <div class="col-md-6 col-sm-6 col-xs-6"  style="border-right:1px solid rgba(255,255,0,.5)">
																							 <span> Physical Rating: </span>
																						 </div>


																							 <div class="col-md-5 col-sm-5 col-xs-5" style="font-size:14px;">
																									 <strong><?php echo e($popular_safari->physical_rating); ?></strong>
																								</div>
																							 </div>
																								<div class="row">
																									<div class="col-md-6 col-sm-6 col-xs-6" style="border-right:1px solid rgba(255,255,0,.5)">
																							 <span> Tour Category: </span>
																					 </div>

																							 <div class="col-md-6 col-sm-6 col-xs-6" style="font-size:14px;">
																									 <strong><?php echo e($popular_safari->category); ?></strong>
																								</div>
																						</div>
																									<div class="row">
																									<div class="col-md-6 col-sm-6 col-xs-6" style="border-right:1px solid rgba(255,255,0,.5)">
																							 <span> Tour Code: </span>
																					 </div>

																							 <div class="col-md-6 col-sm-6 col-xs-6" style="font-size:14px;">
																									 <strong><?php echo e($popular_safari->tour_code); ?></strong>
																								</div>
																						</div>
																						 </div>


																 <div class="row">
																			</div>
																			 <!--<hr>-->
														<div class="listing-shot-info rating">
																<div class="booking-tourPadding">

																<div class="col-md-12 col-sm-12 col-xs-12 pull-right">
																			 <a href="/safaris/<?php echo e($popular_safari->id); ?>" class="booking-btn text-center"><b>View More</b></a>
																</div>

																</div>
														</div>
																</div>

												</div>
										</div>
										<?php endif; ?>

											 <?php if($popular_trekking): ?>
														 <div class="col-lg-4 col-md-4">
												<div class="single_blog listing-shot">

																<div class="listing-shot-img">
																		<div class="blog_image">
																		<img src="<?php echo e(URL::asset('/storage/uploads/'.$popular_trekking->attachment)); ?>" class="img-responsive" alt="<?php echo e($popular_trekking->tour_name); ?>" style="height:250px;width:100%;">
																		</div>
																</div>

																<h3 class="text-center booking-btn booking-tourPadding demo-3"> <b style="color:" title="<?php echo e($popular_trekking->tour_name); ?>"><?php echo e($popular_trekking->tour_name); ?></b>
																	</h3>

																		<div class="">
																 <h4 class="text-center"> <b style="color:#e45000;"><marquee scrollamount="2"><?php echo e($popular_trekking->type); ?></marquee></b>
																		</h4>
																</div>
														<div class="blog-text">
														<div class="row">

																		 <div class="col-md-6 col-sm-6 col-xs-6 booking-btn" style="border-right:1px solid rgba(71,85,95,.11) ">
																						 <strong><b class="text-white"><?php echo e($popular_trekking->days); ?> Days, <?php echo e($popular_trekking->days -1); ?> Nights</b></strong>
																				 </div>

																				<div class="col-md-6 col-sm-6 col-xs-6 booking-btn">
																				<span class="text-white"><strong>From $<?php echo e(number_format($popular_trekking->price),2); ?></b>  </strong>
																					 </span>

																				 </div>
																		</div>

																			<div class="col-md-12 col-sm-12 col-xs-12 text-left booking-btn-gray">

																			<div class="row">
																					 <div class="col-md-6 col-sm-6 col-xs-6"  style="border-right:1px solid rgba(255,255,0,.5)">
																						 Tour Duration:
																						</div>

																							 <div class="col-md-6 col-sm-6 col-xs-6" style="font-size:14px;">
																									 <strong><?php echo e($popular_trekking->days); ?> Days, <?php echo e($popular_trekking->days -1); ?> Nights</strong>
																								</div>
																						 </div>

																							 <div class="row">
																							 <div class="col-md-6 col-sm-6 col-xs-6"  style="border-right:1px solid rgba(255,255,0,.5)">
																							 <span> Physical Rating: </span>
																						 </div>


																							 <div class="col-md-5 col-sm-5 col-xs-5" style="font-size:14px;">
																									 <strong><?php echo e($popular_trekking->physical_rating); ?></strong>
																								</div>
																							 </div>
																								<div class="row">
																									<div class="col-md-6 col-sm-6 col-xs-6" style="border-right:1px solid rgba(255,255,0,.5)">
																							 <span> Tour Category: </span>
																					 </div>


																							 <div class="col-md-6 col-sm-6 col-xs-6" style="font-size:14px;">
																									 <strong><?php echo e($popular_trekking->category); ?></strong>
																								</div>
																						</div>
																									<div class="row">
																									<div class="col-md-6 col-sm-6 col-xs-6" style="border-right:1px solid rgba(255,255,0,.5)">
																							 <span> Tour Code: </span>
																					 </div>

																							 <div class="col-md-6 col-sm-6 col-xs-6" style="font-size:14px;">
																									 <strong><?php echo e($popular_trekking->tour_code); ?></strong>
																								</div>
																						</div>
																						 </div>


																 <div class="row">
																			</div>
																			 <!--<hr>-->
														<div class="listing-shot-info rating">
																<div class="booking-tourPadding">

																<div class="col-md-12 col-sm-12 col-xs-12 pull-right">
																			 <a href="/safaris/<?php echo e($popular_trekking->id); ?>" class="booking-btn text-center"><b>View More</b></a>
																</div>

																</div>
														</div>
																</div>

												</div>
										</div>
										<?php endif; ?>

									 <?php if($popular_holiday): ?>
										<div class="col-lg-4 col-md-4">
												<div class="single_blog listing-shot">

																<div class="listing-shot-img">
																		<div class="blog_image">
																		<img src="<?php echo e(URL::asset('/storage/uploads/'.$popular_holiday->attachment)); ?>" class="img-responsive" alt="<?php echo e($popular_holiday->tour_name); ?>" style="height:250px;width:100%;">
																		</div>
																</div>

																<h3 class="text-center booking-btn booking-tourPadding demo-3"> <b style="color:" title="<?php echo e($popular_holiday->tour_name); ?>"><?php echo e($popular_holiday->tour_name); ?></b>
																	</h3>

																	<div class="">
																 <h4 class="text-center"> <b style="color:#e45000;"><marquee scrollamount="2"><?php echo e($popular_holiday->type); ?></marquee></b>
																		</h4>
																</div>
														<div class="blog-text">
														<div class="row">

																		 <div class="col-md-6 col-sm-6 col-xs-6 booking-btn" style="border-right:1px solid rgba(71,85,95,.11) ">
																						 <strong><b class="text-white"><?php echo e($popular_holiday->days); ?> Days, <?php echo e($popular_holiday->days -1); ?> Nights</b></strong>
																				 </div>

																				<div class="col-md-6 col-sm-6 col-xs-6 booking-btn">
																				<span class="text-white"><strong>From $<?php echo e(number_format($popular_holiday->price),2); ?></b>  </strong>
																					 </span>

																				 </div>
																		</div>

																			<div class="col-md-12 col-sm-12 col-xs-12 text-left booking-btn-gray">

																			<div class="row">
																					 <div class="col-md-6 col-sm-6 col-xs-6"  style="border-right:1px solid rgba(255,255,0,.5)">
																						 Tour Duration:
																						</div>

																							 <div class="col-md-6 col-sm-6 col-xs-6" style="font-size:14px;">
																									 <strong><?php echo e($popular_holiday->days); ?> Days, <?php echo e($popular_holiday->days -1); ?> Nights</strong>
																								</div>
																						 </div>

																							 <div class="row">
																							 <div class="col-md-6 col-sm-6 col-xs-6"  style="border-right:1px solid rgba(255,255,0,.5)">
																							 <span> Physical Rating: </span>
																						 </div>


																							 <div class="col-md-5 col-sm-5 col-xs-5" style="font-size:14px;">
																									 <strong><?php echo e($popular_holiday->physical_rating); ?></strong>
																								</div>
																							 </div>
																								<div class="row">
																									<div class="col-md-6 col-sm-6 col-xs-6" style="border-right:1px solid rgba(255,255,0,.5)">
																							 <span> Tour Category: </span>
																					 </div>


																							 <div class="col-md-6 col-sm-6 col-xs-6" style="font-size:14px;">
																									 <strong><?php echo e($popular_holiday->category); ?></strong>
																								</div>
																						</div>
																									<div class="row">
																									<div class="col-md-6 col-sm-6 col-xs-6" style="border-right:1px solid rgba(255,255,0,.5)">
																							 <span> Tour Code: </span>
																					 </div>

																							 <div class="col-md-6 col-sm-6 col-xs-6" style="font-size:14px;">
																									 <strong><?php echo e($popular_holiday->tour_code); ?></strong>
																								</div>
																						</div>
																						 </div>


																 <div class="row">
																			</div>
														<!--<hr>-->
														<div class="listing-shot-info rating">
																<div class="booking-tourPadding">

																<div class="col-md-12 col-sm-12 col-xs-12 pull-right">
																			 <a href="/safaris/<?php echo e($popular_holiday->id); ?>" class="booking-btn text-center"><b>View More</b></a>
																</div>

																</div>
														</div>
																</div>

												</div>
										</div>
										<?php endif; ?>


						 <div class="row">
						 <div class="col-md-12 col-sm-12 col-xs-12 text-right">
						<a class="btn-transparent" href="/popularExperienceClient" target="_blank"><i class="fa fa-rocket margin-right-10"></i>Explore More Experiences
						</a>
					</div>
						 </div>
					</div>
 </section>

<!-- END WHY CHOOSE US -->
<!-- START COUNTER -->
	<hr class="text-white booking-btn booking-tourPadding">
<section id="blog_private" class="blog_section">
		<div class="container">
				<div class="row">
						<div class="col-md-12" data-aos="fade-up">
								<div class="section text-center">
			 <div class="col-md-12 text-center">

<h3 class="booking-tourPadding" style="color:#c56c1d">
Group Tours
</h3>
				</div>
								</div>
						</div>
				</div>
	<hr>
<div class="" data-aos="fade-up">
	<?php $__currentLoopData = $scheduledGroupTours; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $program): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<!-- New Beidge -->
										<div class="col-lg-4 col-md-4">
												<div class="single_blog listing-shot">

																<div class="listing-shot-img">
																		<div class="blog_image">
																		<img src="<?php echo e(URL::asset('/storage/uploads/'.$popular_safari->attachment)); ?>" class="img-responsive" alt="<?php echo e($popular_safari->tour_name); ?>" style="height:250px;width:100%;">
																		</div>
																</div>
																	 <div class="btn booking-btn-gray">
																		<h4 class="text-center booking-btn booking-tourPadding demo-3"> <b style="color:" title="<?php echo e($popular_safari->tour_name); ?>"><?php echo e($popular_safari->tour_name); ?></b>
																		</h4>

																</div>
														<div class="blog-text">
														<div class="row">

																		 <div class="col-md-6 col-sm-6 col-xs-6 booking-btn" style="border-right:1px solid rgba(71,85,95,.11) ">
																						 <strong>Valid: <b class="text-white"><?php echo e($program->end_date); ?></b></strong>
																				 </div>

																				<div class="col-md-6 col-sm-6 col-xs-6 booking-btn">
																				<span class="text-white"><strong>From $<?php echo e($popular_safari->price); ?></b>  </strong>
																					 </span>
																				 </div>
																		</div>

																			<div class="col-md-12 col-sm-12 col-xs-12 text-left booking-btn-gray">
																			<div class="row">
																					 <div class="col-md-6 col-sm-6 col-xs-6"  style="border-right:1px solid rgba(255,255,0,.5)">
																						 Tour Duration:
																						</div>

																							 <div class="col-md-6 col-sm-6 col-xs-6" style="font-size:14px;">
																									 <strong><?php echo e($popular_safari->days); ?> Days, <?php echo e($popular_safari->days -1); ?> Nights</strong>
																								</div>
																						 </div>

																							 <div class="row">
																							 <div class="col-md-6 col-sm-6 col-xs-6"  style="border-right:1px solid rgba(255,255,0,.5)">
																							 <span> Physical Rating: </span>
																						 </div>


																							 <div class="col-md-5 col-sm-5 col-xs-5" style="font-size:14px;">
																									 <strong><?php echo e($popular_safari->physical_rating); ?></strong>
																								</div>
																							 </div>
																								<div class="row">
																									<div class="col-md-6 col-sm-6 col-xs-6" style="border-right:1px solid rgba(255,255,0,.5)">
																							 <span> Tour Category: </span>
																					 </div>

																							 <div class="col-md-6 col-sm-6 col-xs-6" style="font-size:14px;">
																									 <strong><?php echo e($popular_safari->category); ?>-Join</strong>
																								</div>
																						</div>
																									<div class="row">
																									<div class="col-md-6 col-sm-6 col-xs-6" style="border-right:1px solid rgba(255,255,0,.5)">
																							 <span> Tour Code: </span>
																					 </div>

																							 <div class="col-md-6 col-sm-6 col-xs-6" style="font-size:14px;">
																									 <strong><?php echo e($popular_safari->tour_code); ?></strong>
																								</div>
																						</div>
																						 </div>


																 <div class="row">
																			</div>
																			 <hr>
														<div class="listing-shot-info rating">
															 <div class="row booking-btn booking-tourPadding">

																		<div class="col-md-12 col-sm-12 col-xs-12 pull-right">
																			 <a href="<?php echo e(route('grouptour.show',$program->id)); ?>" class="booking-btn text-center"><b>Explore More</b></a>
																		</div>
																</div>
														</div>
														</div>

												</div>
										</div>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</div>

						 <div class="row">
									<div class="col-md-12 col-sm-12 col-xs-12 float-right">
										<p class="text-right">
																					<a href="/Group-scheduled" class="read-btn"><b>Explore More Tours</b><i class="fas fa-angle-double-right"></i></a>
																			</p>
																		</div>
						 </div>
					</div>
 </section>
 	
	<section>
<div class="destinantion-block destinantion-v1 border-bottom border-color-8">
		<div class="container">
				<div class="w-md-80 w-lg-50 text-center mx-md-auto mb-5 mt-4">
					 <div class="col-md-12 text-center">
						<h3 class="booking-tourPadding" style="color:#c56c1d">
Popular Destinations
</h3>
<hr>
				</div>
				</div>
	<hr>
				<div class="mb-1">
						<!-- Card Block -->
				<?php if($popular_safari): ?>
					<div class="col-md-4 mb-4 mb-md-4">
						<div class="search_area search_area_two">
<a href="/safaris">
						<div id="fh5co-destination-list" class="animate-box min-height-350 bg-img-hero rounded-border p-5 gradient-overlay-half-bg-gradient transition-3d-hover shadow-hover-2 border-0 dropdown" style="background-image: url(<?php echo e(URL::asset('/storage/uploads/'.$popular_safari->attachment)); ?>); height:250px;width:100%; background-size: cover;">
									<lif class="one-forth text-center">

										<div class="text-center">
									<h6 data-text= "<?php echo e($popular_safari->type); ?>" style="font-size: 25px;color: white; font-weight: 700; text-transform:lowercase"><?php echo e($popular_safari->type); ?></h6>
			</div>


										</lif>
								</div>
								 </a>
						 </div>
				 </div>
					 <?php endif; ?>
					 <?php if($popular_trekking): ?>
						<div class="col-md-4 mb-4 mb-md-4">
						<div class="search_area search_area_two booking-tourPadding">
 <a href="/trekking">
						<div id="fh5co-destination-list" class="animate-box min-height-350 bg-img-hero rounded-border p-5 gradient-overlay-half-bg-gradient transition-3d-hover shadow-hover-2 border-0 dropdown" style="background-image: url(<?php echo e(URL::asset('/storage/uploads/'.$popular_trekking->attachment)); ?>); height:250px;width:100%; background-size: cover;">
								<lif class="one-forth text-center">

										<div class="text-center">
									<h6 data-text= "<?php echo e($popular_trekking->type); ?>" style="font-size: 25px;color: white; font-weight: 700; text-transform:lowercase"><?php echo e($popular_trekking->type); ?></h6>
			</div>




										</lif>
								</div>
</a>
</div>

						 </div>
					 <?php endif; ?>

					 <?php if($popular_holiday): ?>
					<div class="col-md-4 mb-4 mb-md-4">
						<div class="search_area search_area_two booking-tourPadding">
						 <a href="/holiday">
						<div id="fh5co-destination-list" class="animate-box min-height-350 bg-img-hero rounded-border p-5 gradient-overlay-half-bg-gradient transition-3d-hover shadow-hover-2 border-0 dropdown" style="background-image: url(<?php echo e(URL::asset('/storage/uploads/'.$popular_holiday->attachment)); ?>); height:250px;width:100%; background-size: cover;">
								<lif class="one-forth text-center">

							<div class="text-center">
									<h6 data-text= "<?php echo e($popular_holiday->type); ?>" style="font-size: 25px;color: white; font-weight: 700; text-transform:lowercase"><?php echo e($popular_holiday->type); ?></h6>
			</div>


										</lif>
								</div>
								</a>
						 </div>
				 </div>
			 <?php endif; ?>
		
		 </div>
		</div>
</div>
<br>
</section>

	<br>
 <section>
	 <div class="container">
	
							<div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
     <div class="service-box-heading" style="background-color: #4E7DAC;">
							<p><b>Quick Link</b></p>
					 <?php $__currentLoopData = $datasLink; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					 <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
							     <div class="" style="background-color: #458652;color:#fff;">
													<ul>
											 <li><a href="/QuickLink/<?php echo e($data->id); ?>"><b><?php echo e($data->quick_title); ?></b></a><li>  </ul>
							 </div>
					 </div>
						 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div>
			</div>
<div class="col-lg-5 col-md-12 col-sm-12 col-xs-12 testimonials-v1">
      <div class="service-box-heading" style="background-color: #4E7DAC;">
	<span><b>Testimonials</b></span>
								 <span><p>What Travellers Say Tour Reviews</p></span>
								 <div id="myCarousel1" class="carousel slide">
									 <!-- Carousel items -->
									 <div class="carousel-inner">
										 <div class="active item">
											 <blockquote><i><?php echo e($testimonies_one->comments); ?></i></blockquote>
											 <div class="carousel-info">
												 <img class="pull-left" src="<?php echo e(URL::asset('/storage/uploads/'.$testimonies_one->attachment)); ?>" width="50" alt="review image">
												 <div class="pull-left">
													 <span class="testimonials-name"><?php echo e($testimonies_one->full_name); ?></span>
													 <span class="testimonials-post">
																<div class="test-rating">
																	 <ul class="list-inline">
																			 <li class="list-inline-item">
																					<?php for($i = 0; $i <$testimonies_one->rating; $i++): ?>
																					 <i class="text-primary fa fa-star text-warning"></i>
																					<?php endfor; ?>

																				<?php for($i=0;$i<5-$testimonies_one->rating;$i++): ?>
																			 <i class="fa fa-star-o text-warning"></i>
																					<?php endfor; ?>

																			 </li>
																	 </ul>
															 </div>
													 </span>
												 </div>
											 </div>
										 </div>


											 <?php $__currentLoopData = $testimonies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimony): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<div class="item">
											 <blockquote><i><?php echo e($testimony->comments); ?>.</i></blockquote>
											 <div class="carousel-info">
												 <img class="pull-left" src="<?php echo e(URL::asset('/storage/uploads/'.$testimony->attachment)); ?>" width="50" alt="review image">
												 <div class="pull-left">
													 <span class="testimonials-name"><?php echo e($testimony->full_name); ?></span>
													 <span class="testimonials-post">
																<div class="test-rating">
																	 <ul class="list-inline">
																			 <li class="list-inline-item">
																					<?php for($i = 0; $i <$testimony->rating; $i++): ?>
																					 <i class="text-primary fa fa-star text-warning"></i>
																					<?php endfor; ?>

																				<?php for($i=0;$i<5-$testimony->rating;$i++): ?>
																			 <i class="fa fa-star-o text-warning"></i>
																					<?php endfor; ?>

																			 </li>
																	 </ul>
															 </div>
													 </span>
												 </div>
											 </div>
										 </div>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									 </div>
									 <!-- Carousel nav -->
									 <a class="left-btn" href="#myCarousel1" data-slide="prev"></a>
									 <a class="right-btn" href="#myCarousel1" data-slide="next"></a>
								 </div>

</div>
</div>
			 </div>
			</div>
</section>

		
<!-- Modal -->
<div class="modal fade" id="comment" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel"></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">

	 <form  method="post" id="post_form" action="<?php echo e(route('Testimonies.store')); ?>" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
								<?php echo csrf_field(); ?>

		<div class="row">
			 <div class="col-md-6">
				<div class="form-group">
					 <input type="hidden" name="user_id" value="<?php echo e(Auth::id()); ?>">
						<label for="">Full name:</label>
					<input type="text" class="form-control" placeholder="full name" min="1" name="full_name">
				</div>
		 </div>

		 <div class="col-md-6">
				<div class="form-group">
						<label for="">Rate us(1-5):</label>
					<select name="rank" id="" class="form-control">
																			<option value="">Select Category</option>
																			<option value="1">1</option>
																				<option value="2">2</option>
																			 <option value="3">3</option>
																				 <option value="4">4</option>
																					 <option value="5">5</option>
																		</select>

		 </div>
		 </div>

		 <div class="col-md-12">
								<div class="form-group">
										<label for=""> Comments</label>

				 <textarea class="form-control" id="" cols="2" rows="2" name="comments" placeholder="comments..."></textarea>
				</div>
		 </div>
			<div class="col-md-12">
								<div class="form-group">
										<label for=""> Upload your Photo</label>
										<input name="attachment[]" type="file"  multiple>
														<input type="hidden" class="form-control" name="status"  min="0" max="1" value="0" placeholder="0">
														<input type="hidden" class="form-control" name="client" value="Client">
				</div>
		 </div>
		</div>
		 </div>

<div class="modal-footer">
	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	<button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>
</div>
</div>
</div>

 <?php $__env->stopSection(); ?>
<?php echo $__env->make('website.layouts.apps', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\palatialf\resources\views/website/home/index.blade.php ENDPATH**/ ?>