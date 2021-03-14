<?php include'header.php' ?>
<?php 
    include_once("class/fetch_data.php");
    $main_page=new fetch_data();
?>
<!-- products-breadcrumb -->
	<div class="products-breadcrumb">
		<div class="container">
			<ul>
				<li><i class="fa fa-home" aria-hidden="true"></i><a href="index.html">Home</a><span>|</span></li>
				<li>Services</li>
			</ul>
		</div>
	</div>
<!-- //products-breadcrumb -->
<!-- banner -->
	<div class="banner">
		<div class="w3l_banner_nav_left">
			<nav class="navbar nav_bottom">
			 <!-- Brand and toggle get grouped for better mobile display -->
			  <div class="navbar-header nav_2">
				  <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
			   </div> 
			   <!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<ul class="nav navbar-nav nav_1">
						<?php
					       $sql=$main_page->all_categories();
					       while($row=mysqli_fetch_array($sql))
					           {
					    ?>
						<li><a href="our-products.php/<?= $row['url'] ?>"><?= $row['title'] ?></a></li>
						<?php } ?>
					</ul>
				 </div><!-- /.navbar-collapse -->
			</nav>
		</div>
		<div class="w3l_banner_nav_right">
<!-- services -->
		<div class="services">
			<h3>Testimonials</h3>
			<div class="w3ls_service_grids">
				<?php
					$sql=$main_page->review_list();
					while($row=mysqli_fetch_array($sql))
					{
				?>
				<div class="col-md-6 w3ls_service_grid_left">
					<h4><?= $row['person_name'] ?></h4>
					<h5><?= $row['created_at'] ?></h5>
					<p><?= $row['description'] ?></p>
				</div>
				<div class="col-md-6 w3ls_service_grid_right">
					<div class="col-md-6 w3ls_service_grid_right_1">
						<img src="admin/blogs_images/<?= $row['image'] ?>" alt=" " class="img-responsive" />
					</div>
				</div>
				<div class="clearfix"> </div>
				<br><br>
				<?php } ?>
			</div>
		</div>
<!-- //services -->
		</div>
		<div class="clearfix"></div>
	</div>
<!-- //banner -->
<?php include'footer.php' ?>