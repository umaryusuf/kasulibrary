<?php
	$page_title = "Homepage";
	$heading = "KASU E-Library";
	$sub_heading = "The modern e-library for Kaduna State University.";
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<?php include_once 'includes/head.php'; ?>
<body>
  <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->

	<!--site navigation -->
  <?php require_once 'includes/nav.php'; ?>

  <!-- main content -->
  <section class="container-fluid">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
		    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		    <li data-target="#myCarousel" data-slide-to="1"></li>
		    <li data-target="#myCarousel" data-slide-to="2"></li>
		    <li data-target="#myCarousel" data-slide-to="3"></li>
		  </ol>

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox">
		    <div class="item active">
		      <img src="assets/img/slider/one.jpg" alt="">
		      <div class="carousel-caption">
		        <h1 class="text-center white"><?php echo $heading; ?></h1>
						<h4>
							<?php echo $sub_heading; ?> <br><br> <a href="register.php" class="btn btn-primary action">Get Started</a>
						</h4>
						<br>
		      </div>
		    </div>

		    <div class="item">
		      <img src="assets/img/slider/two.jpg" alt="">
		      <div class="carousel-caption">
		        <h1 class="text-center white"><?php echo $heading; ?></h1>
						<h4>
						<?php echo $sub_heading; ?> <br><br> <a href="register.php" class="btn btn-primary action">Get Started</a>
						</h4>
						<br>
		      </div>
		    </div>

		    <div class="item">
		      <img src="assets/img/slider/three.jpg" alt="">
		      <div class="carousel-caption">
		        <h1 class="text-center white"><?php echo $heading; ?></h1>
						<h4>
							<?php echo $sub_heading; ?> <br><br> <a href="register.php" class="btn btn-primary action">Get Started</a>
						</h4>
						<br>
		      </div>
		    </div>

		    <div class="item">
		      <img src="assets/img/slider/four.jpg" alt="">
		      <div class="carousel-caption">
		        <h1 class="text-center white"><?php echo $heading; ?></h1>
						<h4>
							<?php echo $sub_heading; ?> <br><br> <a href="register.php" class="btn btn-primary action">Get Started</a>
						</h4>
						<br>
		      </div>
		    </div>
		  </div>

		  <!-- Left and right controls -->
		  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
	</section>
	<br>
	<section class="container-fluid">
		<div class="row">
			<!-- begin main content -->
			<div class="col-md-9">
				<div class="row text-center">
					<div class="col-md-12">
						<div class="well">
							<h2 style="font-weight: bolder;">KASU E-Library</h2>
							<h4>The Kaduna State University aspires to become an institution of first choice recognised for providing critical opportunities for student success, acknowledged as a primary and engaged regional and global resource for entrepreneurial education and best <a href="about.php">read more...</a></h4>
						</div>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-md-12">
						<div class="text-center">
							<i class="fa fa-book fa-5x"></i>
						</div>
					</div>
				</div>
				<br>
				<h2 class="text-center">Our Mission</h2>
				<h4 class="text-center">To provide a robust and high quality educational experience for students in a diverse learning environment while promoting the values and indigenous learning that is responsive to the needs of our society and create institutional values.</h4>
				<br>
				<div class="row">
					<div class="col-md-4">
						<div class="well">
      				<img class="img img-responsive" src="assets/img/ebooks2.jpg" alt=" hotel room image" style="max-width: 100%;">
      				<h3>E-Library</h3>
				    </div>
					</div>
					<div class="col-md-4">
						<div class="well">
      				<img class="img img-responsive" src="assets/img/l1.jpg" alt=" hotel room image" style="max-width: 100%;">
      				<h3>Relevant e-books</h3>
				    </div>
					</div>
					<div class="col-md-4">
						<div class="well">
      				<img class="img img-responsive" src="assets/img/l2.jpg" alt=" hotel room image" style="max-width: 100%;">
      				<h3>Acessible to everyone</h3>
				    </div>
					</div>
				</div>
			</div>

			<!-- aside content -->
			<div class="col-md-3">
				<div>
					<div  class="bg-primary aside-content">
						<h4>Other rosources</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis tempore unde, provident magnam laboriosam, totam corrupti ducimus.</p>
						<br>
						<img src="assets/img/bs.jpg" alt="" class="img-responsive" style="height: auto;">
						<p>Similique nam quisquam ea facere aspernatur accusantium</p>
					</div>
					<br>
					<div  class="bg-primary aside-content">
						<h4>Some Adverts</h4>
						<p>At officiis fugit fugiat quasi laborum aliquam voluptate dolorem corporis odio optio a eaque
						<img src="assets/img/l4.jpg" alt="" class="img-responsive" style="width:100%;height: 180px;">
						sunt architecto tempore eveniet, et nobis iste tempora nihil neque iusto suscipit blanditiis quisquam. Optio, voluptas.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<br>
	<?php require_once 'includes/footer.php'; ?>

	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/counterup.min.js"></script>
	<script>
		$('[data-toggle="counter-up"]').counterUp({
	    delay: 10,
	    time: 1000
	  });
	</script>
</body>
</html>
