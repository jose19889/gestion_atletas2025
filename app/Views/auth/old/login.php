

<!DOCTYPE HTML>
<html>
<head>
<title>Gestion denuncias</title>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />

<!-- font-awesome icons CSS-->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons CSS-->

 <!-- side nav css file -->
 <link href='css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
 <!-- side nav css file -->
 
 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>

<!--webfonts-->
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
<!--//webfonts-->
 
<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->

<div id="page-wrapper">
			<p class="text-danger"> <strong><?php //secho $this->session->flashdata('msg');?> </strong></p>
			<div class="main-page login-page ">
				<h2 class="title1">Login</h2>
				<div class="widget-shadow">
				<?php
					
					//echo img(array('src'=>'images/logo.png', 'class'=> 'img-circle text-center form-signin-heading'));
					?>
						
					<div class="login-body">
					    <?= $this->include('app/alerts') ?>
					    <form action="<?php echo site_url('login-auth');?>" method="post">
					        <?= csrf_field() ?> <!-- Add CSRF protection -->
					        
					        <label for="email">Email</label>
					        <input type="email" id="email" class="user" name="email" placeholder="Enter Your Email" required="">
					        
					        <label for="password">Password</label>
					        <input type="password" id="password" name="password" class="lock" placeholder="Password" required="">
					        
					        <div class="forgot-grid">
					            <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Remember me</label>
					            <div class="forgot">
					                <a href="#">Forgot password?</a>
					            </div>
					            <div class="clearfix"></div>
					        </div>
					        
					        <input type="submit" name="Sign In" value="Sign In">
					        
					        <div class="registration">
					            Don't have an account?
					            <a class="" href="register">Create an account</a>
					        </div>
					    </form>
					</div>

				</div>
				
			</div>

			
		</div>
		<!--footer-->
		<div class="footer">
		   <p>&copy; 2018 Glance Design Dashboard. All Rights Reserved | Design by <a href="" target="_blank">ADEMY</a></p>		</div>
        <!--//footer-->
	
	<!-- side nav js -->
	<script src='js/SidebarNav.min.js' type='text/javascript'></script>
	<script>
      $('.sidebar-menu').SidebarNav()
    </script>
	<!-- //side nav js -->
	
	<!-- Classie --><!-- for toggle left push menu script -->
		<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			
			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!-- //Classie --><!-- //for toggle left push menu script -->
		
	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	
	<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>
	<!-- //Bootstrap Core JavaScript -->
   
</body>
</html>