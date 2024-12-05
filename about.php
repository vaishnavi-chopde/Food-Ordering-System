<?php include "header.php";
error_reporting(0);
 ?>
	<!-- Start header -->
	<img src="images/banner_about_us.jpg" width="100%" style="margin-top: 2%">
	<!-- End header -->
	
	<!-- Start About -->
	<div class="about-section-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 text-center">
					<div class="inner-column">
						<h1>Welcome To <span>Lazeez Restaurant</span></h1>
						<h4>Little Story</h4>
						<p>We serve delicious vegetarian food made using fresh, quality ingredients catering to a multitude of taste preferences, without burning a hole in your wallet! We’re big on flavour and uncompromising on service, so much so that our restaurants are reckoned to be amongst the best vegetarian restaurants in the country.
 </p>
						<p>Our restaurants serve best vegetarian delicacies! We use the finest ingredients that allows us to serve the freshest quality food. We give utmost importance to hygiene and customer service, which will leave you wanting more!</p>
						<!--<a class="btn btn-lg btn-circle btn-outline-new-white" href="#"> Comment</a> -->
					</div>
				</div>
				<div class="col-lg-6 col-md-6">
					<img src="images/restaurant.jpg" style="height: 450px; width: 100%" class="img-fluid">
				</div>
				<div class="col-md-12">
					<div class="inner-pt">
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End About -->
	
	<!-- Start Menu -->
	<div class="menu-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Special Menu</h2>
						
					</div>
				</div>
			</div>
				
			<div class="row inner-menu-box">
				<div class="col-3">
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">All</a>
						<a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">KathiyaWadi</a>
						<a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">RajsThani</</a>
						<a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Rise</a>

						<a class="nav-link" id="v-pills-tava-tab" data-toggle="pill" href="#v-pills-tava" role="tab" aria-controls="v-pills-tava" aria-selected="false">tava</a>
					</div>
				</div>
				
				<div class="col-9">
					<div class="tab-content" id="v-pills-tabContent">
						<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
							<div class="row">
								<?php include "connect.php";
								$s = mysqli_query($con,"select * from menu");
								while($r = mysqli_fetch_array($s))
								{	
								?>
								<div class="col-lg-4 col-md-6 special-grid drinks">
									<div class="gallery-single fix">
										<img src="admin/<?php echo $r['image']; ?>" class="img-fluid" alt="Image" style='width: 263px; height:170px;'>
										<div class="why-text">
											<h4><?php echo $r['title']; ?></h4>
											<p><?php echo $r['description']; ?></p>
											<p>Rs <?php echo $r['price']; ?> /-</p>
											<h5 align="center">
									<?php if(isset($_SESSION['uid']))
									{
									?>
											<a href="addcart.php?pid=<?php echo $r['id']; ?>&uid=<?php echo $_SESSION['uid']; ?>&price=<?php echo $r['price']; ?>">Add Cart</a></h5>

									<?php
									}
									else
									{
									?>
										<a href="login.php">Add Cart</a>
									<?php } ?>

										</div>
									</div>
								</div>
								<?php } ?>
							</div>	
						</div>


						<div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
							<div class="row">


							<?php include "connect.php";
								$s = mysqli_query($con,"select * from menu where category='kathiyawadi'");
								while($r = mysqli_fetch_array($s))
								{	
								?>

								<div class="col-lg-4 col-md-6 special-grid drinks">
									<div class="gallery-single fix">
										<img src="admin/<?php echo $r['image']; ?>" class="img-fluid" alt="Image" style='width: 263px; height:170px;'>
										<div class="why-text">
											<h4><?php echo $r['title']; ?></h4>
											<p><?php echo $r['description']; ?></p>
											<h5>Rs <?php echo $r['price']; ?> /-</h5>
											<h5 align="center">
												<?php if(isset($_SESSION['uid']))
									{
									?>
											<a href="addcart.php?pid=<?php echo $r['id']; ?>&uid=<?php echo $_SESSION['uid']; ?>&price=<?php echo $r['price']; ?>">Add Cart</a></h5>

									<?php
									}
									else
									{
									?>
										<a href="login.php">Add Cart</a>
									<?php } ?>




											</h5>
										</div>
									</div>
								</div>
								<?php } ?>
								
								
							</div>
							
						</div>
						<div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
							<div class="row">
								
								<?php include "connect.php";
								$s = mysqli_query($con,"select * from menu where category='rajsthani'");
								while($r = mysqli_fetch_array($s))
								{	
								?>
								<div class="col-lg-4 col-md-6 special-grid drinks">
									<div class="gallery-single fix">
										<img src="admin/<?php echo $r['image']; ?>" class="img-fluid" alt="Image" style='width: 263px; height:170px;'>
										<div class="why-text">
											<h4><?php echo $r['title']; ?></h4>
											<p><?php echo $r['description']; ?></p>
											<h5>Rs <?php echo $r['price']; ?> /-</h5>
											<h5 align="center">
												<?php if(isset($_SESSION['uid']))
									{
									?>
											<a href="addcart.php?pid=<?php echo $r['id']; ?>&uid=<?php echo $_SESSION['uid']; ?>&price=<?php echo $r['price']; ?>">Add Cart</a></h5>

									<?php
									}
									else
									{
									?>
										<a href="login.php">Add Cart</a>
									<?php } ?>


											</h5>
										</div>
									</div>
								</div>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>								

	<!-- End Menu -->
	
	<?php include "footer.php" ; ?>