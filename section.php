<section class="slider">
			<div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:380px;overflow:hidden;visibility:hidden;">
	        <!-- Loading Screen -->
		        <div data-u="loading" class="jssorl-004-double-tail-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
		            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/double-tail-spin.svg" />
		        </div>
		        <div data-u="slides" style="margin: 0 auto; cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
		        	<?php
			            $sql=$main_page->slider_list();
			            while($row=mysqli_fetch_array($sql))
			            {
					
			        ?>
		            <div>
						
					<div class="w3l_banner_nav_right_banner" style="height: 900px !important;">
		                <img data-u="image" src="admin/blogs_images/<?= $row['image'] ?>"/>
		                <div data-ts="flat" data-p="320" style="left:144px;top:80px;width:550px;height:90px;position:absolute;overflow:hidden;">
		                    <div data-to="50% 50%" data-ts="preserve-3d" data-t="0" style="left:550px;top:0px;width:550px;height:90px;position:absolute;overflow:hidden;">
		                        <div style="font-weight: 600; color: #FFFFFF; font-size: 30px;"><?= $row['title'] ?></div>
		                    </div>
						</div>
						</div>	
		            </div>
		        	<?php } ?>
		        </div>
		        <!-- Bullet Navigator -->
		        <div data-u="navigator" class="jssorb031" style="position:absolute;bottom:16px;right:16px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
		            <div data-u="prototype" class="i" style="width:13px;height:13px;">
		                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
		                    <circle class="b" cx="8000" cy="8000" r="5800"></circle>
		                </svg>
		            </div>
		        </div>
		    </div>
		</section>