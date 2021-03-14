<?php include_once('header.php') ?>
<!-- products-breadcrumb -->
	<div class="products-breadcrumb">
		<div class="container">
			<ul>
				<li><i class="fa fa-home" aria-hidden="true"></i><a href="index.html">Home</a><span>|</span></li>
				<li>Connect Us</li>
			</ul>
		</div>
	</div>
	<div class="banner">
		<div class="w3l_banner_nav_right" style="text-align: left;width: 100%;">
		<div class="mail">
			<h3>Mail Us</h3>
			<div class="agileinfo_mail_grids">
				<div class="col-md-4 agileinfo_mail_grid_left">
					<ul>
						<li><i class="fa fa-home" aria-hidden="true"></i></li>
						<li>address<span>Shop Number: 4, SD Tower, Jatia,<br> Kahilipara Road, Guwahati:781006</span></li>
					</ul>
					<ul>
						<li><i class="fa fa-envelope" aria-hidden="true"></i></li>
						<li>email<span><a href="mailto:info@example.com">info@example.com</a></span></li>
					</ul>
					<ul>
						<li><i class="fa fa-phone" aria-hidden="true"></i></li>
						<li>call to us<span>(+123) 233 2362 826</span></li>
					</ul>
				</div>
				<div class="col-md-8 agileinfo_mail_grid_right">
						<div class="col-md-6 wthree_contact_left_grid">
							<input type="text" name="Name" id="name" placeholder="Name * ">
							<input type="email" name="Email" id="email" placeholder="Email *">
						</div>
						<div class="col-md-6 wthree_contact_left_grid">
							<input type="text" name="Telephone" id="mobile" placeholder="Mobile No *">
							<input type="text" name="Subject" id="subject" placeholder="Subject *">
						</div>
						<div class="clearfix"> </div>
						<textarea  name="Message" id="message" placeholder="Message * "></textarea>
						<button type="button" id="send_mail" class="btn btn-success btn-block">SEND MESSAGE</button>
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="map">
		<iframe src="https://maps.google.com/maps?q=megsan%20computers&t=&z=13&ie=UTF8&iwloc=&output=embed" style="border:0"></iframe>

			
	</div>
	<?php include_once('footer.php') ?>
	<script src="js/jquery.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script>
    $(document).ready(function(){
        $("#send_mail").click(function(){
            var name=$("#name").val();
            var email=$("email").val();
            var mobile=$("#mobile").val();
            var subject=$("#subject").val();
            var message=$("#message").val();
            if(name == '' || email == '' || mobile == '' || subject == '' || message == '') 
            {  
                swal("Oops!","Please fill the menditory filled.","error");
            }
            else{
                $.ajax({
                    url:'mail.php',
                    method:'POST',
                    data:{
                        name:name,
                        email:email,
                        mobile:mobile,
                        subject:subject,
                        message:message
                    },
                    success:function(data){
                    	if(data == 1){
                    		swal("Done!","Our marketing executive contact you soon.","success");
                    	}else{
                    		swal("Sorry!","Your message not send","error");
                        	}
                    	}
                });
            }
        });
    });
</script>


