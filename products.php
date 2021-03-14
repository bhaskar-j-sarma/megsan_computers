<?php include_once('header.php') ?>
<?php 
    include_once("class/fetch_data.php");
    $main_page=new fetch_data();
?>
<!-- products-breadcrumb -->
	<div class="products-breadcrumb">
		<div class="container">
			<ul>
				<li><i class="fa fa-home" aria-hidden="true"></i><a href="index.php">Home</a><span>|</span></li>
				<li>Our Products</li>
			</ul>
		</div>
	</div>
<!-- //products-breadcrumb -->
<!-- banner -->
	<div class="banner" style="margin-top: 30px; margin-bottom: 30px;">
		<div class="w3l_banner_nav_right" style="text-align: left; width: 100%;">
			<div class="w3l_banner_nav_right_banner3_btm">
				<?php
					$sqlz=$main_page->all_categories();
		            while($row=$sqlz->fetch_assoc())
		            {
		        ?>
				<div class="col-md-2 w3l_banner_nav_right_banner3_btml" style="margin-bottom: 30px;">
					<a href="our-products.php/<?= $row['url'] ?>">
						<div class="view view-tenth">
							<img src="admin/blogs_images/<?= $row['image'] ?>" alt=" " class="img-responsive" />
							<div class="mask">
								<h4><?= $row['title'] ?></h4>
								<p><?= $row['description'] ?></p>
							</div>
							<label class="product-label"><?= $row['title'] ?></label>
						</div>
					</a>
				</div>
				<?php } ?>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
<?php include_once('footer.php') ?>