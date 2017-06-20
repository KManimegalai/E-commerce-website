<?php 
    include_once 'header.php';
    include_once '../admin/controller/common_functions.php';
    login_page_session_check();
session_start();
$err=$_SESSION['error'];
if($err='test')
{
	echo "Wrong emailid or password";
}
?>
		<div class="banner-text">	
			<div class="container">
				<h2>Delicious food from the <br> <span>Best Chefs For you.</span></h2> 
			</div>
		</div>
	</div>
	<!-- //banner -->    
	<!-- breadcrumb -->  
	<div id="login"> 
		<div class="login-page about">
			<img class="login-w3img" src="../images/img3.jpg" alt="">
			<div class="container"> 
				<h3 class="w3ls-title w3ls-title1">Login to your account</h3>  
				<div class="login-agileinfo"> 
					<form action="../admin/controller/login_controller.php" method="post"> 
						<input class="agile-ltext" type="text" name="username" placeholder="Email Id" required="">
						<input class="agile-ltext" type="password" name="password" placeholder="Password" required="">
						<div class="wthreelogin-text"> 
							<div class="clearfix"> </div>
						</div>   
						<input type="submit" value="LOGIN">
					</form>
					<p>Don't have an Account? <a href="#" id="sign_up"> Sign Up Now!</a></p> 
				</div>	 
			</div>
		</div>
	</div>
	<div id="signup">
		<div class="login-page about">
			<img class="login-w3img" src="../images/img3.jpg" alt="">
			<div class="container"> 
				<h3 class="w3ls-title w3ls-title1">Sign Up to your account</h3>  
				<div class="login-agileinfo"> 
					<form action="../controller/signup.php" method="post"> 
						<input class="agile-ltext" type="text" name="username" placeholder="Username" required="">
						<input class="agile-ltext" type="email" name="email_id" placeholder="Email ID" required="">
						<input class="agile-ltext" type="text" name="location" placeholder="Address" required="">
						<input class="agile-ltext" type="text" name="phone_no" placeholder="MOBILE NUMBER" pattern="\d*" minlength="10" maxlength="10" required="">
						<input class="agile-ltext" type="password" name="Password" placeholder="Password" required="">
						<div class="wthreelogin-text"> 
							<div class="clearfix"> </div>
						</div>   
						<input type="submit" value="Sign Up">
					</form>
					<p>Already have an account?  <a href="#" id="login_btn"> Login Now!</a></p> 
				</div>	 
			</div>
		</div>
	</div>

	<script type="text/javascript">
		
		$(document).ready(function(){
			$('#signup').hide();
			$("#sign_up").click(function(){
				$("#signup").show();
				$("#login").hide();
			});
			$("#login_btn").click(function(){
				$("#signup").hide();
				$("#login").show();
			});
		});

	</script>


	<?php include_once 'footer.php'; ?>