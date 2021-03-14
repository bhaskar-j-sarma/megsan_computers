<?php include_once('header.php') ?>
<?php 
    include_once("class/fetch_data.php");
    $main_page=new fetch_data();
?>
	<div class="w3l_banner_nav_right" style="text-align: left; width: 100%;">
	<section class="slider">
				<div class="flexslider">
					<ul class="slides">
			<?php		$sql=$main_page->slider_list();
			            while($row=mysqli_fetch_array($sql))
			            { ?>
						<li>
							<div class="w3l_banner_nav_right_banner" style="background: linear-gradient(
                     rgba(0,0,0, .5), 
                     rgba(0,0,0, .5)),url(admin/blogs_images/<?= $row['image'] ?>);  background-repeat: no-repeat; background-size: cover;">
								<h1><?= $row['title'] ?></h1>
								<div class="more">
								<!--	<a href="products.html" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a> -->
								</div>
							</div>
						</li>
			<?php   	}   ?>
					</ul>
				</div>
			</section>
			<!-- flexSlider -->
				<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
				<script defer src="js/jquery.flexslider.js"></script>
				<script type="text/javascript">
				$(window).load(function(){
				  $('.flexslider').flexslider({
					animation: "slide",
					start: function(slider){
					  $('body').removeClass('loading');
					}
				  });
				});
			  </script>
			<!-- //flexSlider -->
	</div>
	<div class="clearfix"> </div>
	 <!-- about -->
	 <section id="about">
	 <div class="privacy about">
		
			
			<h3>About Us</h3>
		
			<p class="animi">Megsan Computers is a et iusto odio dignissimos ducimus qui blanditiis 
				praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias 
				excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui 
				officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem 
				rerum facilis est et expedita distinctio.</p>
			<div class="agile_about_grids">
				<div class="col-md-6 agile_about_grid_right">
					<img src="images/laptop-3877800_1920.jpg" alt=" " class="img-responsive" />
				</div>
				<div class="col-md-6 agile_about_grid_left">
					<ol>
						<li>laborum et dolorum fuga</li>
						<li>corrupti quos dolores et quas</li>
						<li>est et expedita distinctio</li>
						<li>deleniti atque corrupti quos</li>
						<li>excepturi sint occaecati cupiditate</li>
						<li>accusamus et iusto odio</li>
					</ol>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</section>
<!-- //about -->
	<div class="testimonials" style="margin-top: 30px;">
		<div class="container">
			<h3>Our Products</h3><br><br>
			<section class="customer-logos slider">
				<?php
		            $sql=$main_page->all_categories();
		            while($row=mysqli_fetch_array($sql))
		            {
		        ?>
		        <a href="our-products.php/<?= $row['url'] ?>">
			        <div class="slide" style="border: 1px solid rgba(148,146,148,1);; padding: 5px 8px;box-shadow: 0px 4px 8px 0px rgba(148,146,148,1);">
			        	<img class="img-responsive" src="admin/blogs_images/<?= $row['image'] ?>">
			        	<span class="image-lable"><?= $row['title']; ?></span>
			        </div>
		    	</a>
		        <?php } ?>
			</section>	
		</div>
	</div>
<!-- newsletter-top-serv-btm -->
    <div class="services">
    <h3>Services</h3>
    </div>
	<div class="newsletter-top-serv-btm">
		<div class="container" style="width:80%;">
			<div class="col-md-3 wthree_news_top_serv_btm_grid">
				<div class="wthree_news_top_serv_btm_grid_icon">
					<i class="fa fa-desktop" aria-hidden="true"></i>
				</div>
				<h3>Laptop / Desktop sale</h3>
				<p>We sale all brands laptops and desktops at minimal cost </p>
			</div>
			<div class="col-md-3 wthree_news_top_serv_btm_grid">
				<div class="wthree_news_top_serv_btm_grid_icon">
					<i class="fa fa-wrench" aria-hidden="true"></i>
				</div>
				<h3>Computer Repair</h3>
				<p>We repair all types Laptops and Desktops at minimal cost. If you have any computer related issues contact us</p>
			</div>
			<div class="col-md-3 wthree_news_top_serv_btm_grid">
				<div class="wthree_news_top_serv_btm_grid_icon">
					<i class="fa fa-camera" aria-hidden="true"></i>
				</div>
				<h3>CCTV Installation</h3>
				<p>Supported by team of skilled and veteran professionals, we are devotedly committed towards providing world class CCTV Camera Installation</p>
			</div>
            <div class="col-md-3 wthree_news_top_serv_btm_grid">
				<div class="wthree_news_top_serv_btm_grid_icon">
					<i class="fa fa-check-square" aria-hidden="true"></i>
				</div>
				<h3>AMC service for offices</h3>
				<p>As a quality driven firm, we are actively functioning as a Service Provider of AMC Services in Guwahati,Assam </p>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //newsletter-top-serv-btm -->

<!-- testimonials -->
<div class="testimonials" style="margin-top: 30px; margin-bottom: 30px;">
	<div class="container">
		<h3>Testimonials</h3>
		<div class="w3_testimonials_grids">
			<?php
		        $sql=$main_page->top_review();
		        while($row=mysqli_fetch_array($sql))
		        {
		    ?>
			<div class="col-md-3 agileinfo_mail_grid_left">
				<ul>
					<li><img class="review-img" src="admin/blogs_images/<?= $row['image'] ?>"></li>
					<li><?= $row['person_name'] ?><span><?= substr($row['description'], 0, 30) ?></span></li>
				</ul>
			</div>
			<?php } ?>		
		</div>
	</div>
</div>
<!-- //testimonials -->
<?php include'footer.php' ?>