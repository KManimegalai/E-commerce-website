<?php 
	include_once '../admin/model/db.php';
	session_start();
	// print_r($_SESSION['user_details']);
	if (isset($_SESSION['user_details'])) {
		$update = select('*','`users`','email_id="'.$_SESSION['user_details']['email_id'].'"',db_connect());
		$_SESSION['user_details'] = $update[0];
		}
 ?>
<html lang="en">
<head>
<title>Aadukalam.in</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<link href="../css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="../css/style.css" type="text/css" rel="stylesheet" media="all">  
<link href="../css/font-awesome.css" rel="stylesheet"> <!-- font-awesome icons --> 
<link rel="stylesheet" href="../css/owl.carousel.css" type="text/css" media="all"/> <!-- Owl-Carousel-CSS -->

<script src="../js/jquery-2.2.3.min.js"></script>  
<link href="https://fonts.googleapis.com/css?family=Berkshire+Swash" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Yantramanav:100,300,400,500,700,900" rel="stylesheet">

</head>
<body>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
<script async type='text/javascript' src='https://cdn.fancybar.net/ac/fancybar.js?zoneid=1502&amp;serve=C6ADVKE&amp;placement=w3layouts' id='_fancybar_js'></script>
<style type='text/css'>  .adsense_fixed{position:fixed;bottom:-8px;width:100%;z-index:999999999999;}.adsense_content{width:720px;margin:0 auto;position:relative;background:#fff;}.adsense_btn_close,.adsense_btn_info{font-size:12px;color:#fff;height:20px;width:20px;vertical-align:middle;text-align:center;background:#000;top:4px;left:4px;position:absolute;z-index:99999999;font-family:Georgia;cursor:pointer;line-height:18px}.adsense_btn_info{left:26px;font-family:Georgia;font-style:italic}.adsense_info_content{display:none;width:260px;height:340px;position:absolute;top:-360px;background:rgba(255,255,255,.9);font-size:14px;padding:20px;font-family:Arial;border-radius:4px;-webkit-box-shadow:0 1px 26px -2px rgba(0,0,0,.3);-moz-box-shadow:0 1px 26px -2px rgba(0,0,0,.3);box-shadow:0 1px 26px -2px rgba(0,0,0,.3)}.adsense_info_content:after{content:'';position:absolute;left:25px;top:100%;width:0;height:0;border-left:10px solid transparent;border-right:10px solid transparent;border-top:10px solid #fff;clear:both}.adsense_info_content #adsense_h3{color:#000;margin:0;font-size:18px!important;font-family:'Arial'!important;margin-bottom:20px!important;}.adsense_info_content .adsense_p{color:#888;font-size:13px!important;line-height:20px;font-family:'Arial'!important;margin-bottom:20px!important;}.adsense_fh5co-team{color:#000;font-style:italic;}</style>
<script>

    $(function() {
      $('.adsense_btn_close').click(function() {
        $(this).closest('.adsense_fixed').css('display', 'none');
      });

      $('.adsense_btn_info').click(function() {
        if ($('.adsense_info_content').is(':visible')) {
          $('.adsense_info_content').css('display', 'none');
        } else {
          $('.adsense_info_content').css('display', 'block');
        }
      });

    });

  </script>
<body>

<div class='adsense_fixed'>
<div class='adsense_content'> <span class='adsense_btn_close' title='Hide Ads'>x</span>
  <div class='adsense_info_content'>
    <h3 id='adsense_h3'>Why Ads?</h3>
    <p class='adsense_p'>We hope you'll understand us why we display Ads here at w3layouts. We use Ads in order for us to continue working and provide you new template every day. As we all know domain, hosting servers and designers is not free and
      for us to pay it we have to display Ads. Thank you for Supporting Us.</p>
    <p class='adsense_p'>Love,
      <br><span class='adsense_fh5co-team'>w3layouts Team</span></p>
  </div><span class='adsense_btn_info' title='Why Ads'>i</span>


  </div>
  </div>
	<div class="banner about-w3bnr">
		<!-- header -->
		<div class="header">
			<div class="w3ls-header"><!-- header-one --> 
				<div class="container">
					<div class="w3ls-header-right">
						<ul>							
							<li class="w3ls-header-dpdn">
								<?php if(isset($_SESSION['user_details'])){echo "wallet :- ₹" .$_SESSION['user_details']['wallet'];}?>
								</li>
							<li class="w3ls-header-dpdn">
								<?php if(isset($_SESSION['user_details'])){echo "Referral id :- " .$_SESSION['user_details']['Referral_id'];}?>
								</li>	
							<li class="head-dpdn">
								<?php if(isset($_SESSION['user_details'])){ echo "Welcome ".$_SESSION['user_details']['username']; }else { ?><a href="login.php"><i class="fa fa-sign-in" aria-hidden="true"></i>Login/SignUp </a> <?php } ?>
							</li> 
							<?php if (isset($_SESSION['user_details'])) { ?>
								<li class="w3ls-header-right">
									<a href="../admin/controller/logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
								</li>
								<?php } ?>
							
						</ul>
					</div>
					<div class="clearfix"> </div> 
				</div>
			</div>
			<div class="navigation agiletop-nav">
				<div class="container">
					<nav class="navbar navbar-default">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header w3l_logo">
							<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>  
							<h1><a href="index.html">Aadukalam<span>Best Food Collection</span></a></h1>
						</div> 
						<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
							<ul class="nav navbar-nav navbar-right">
								<li><a href="home.php">Home</a></li>
								<li><a href="products.php">Red</a></li>
								<li><a href="#">Organic(Coming Soon)</a></li> 
								<li><a href="#">Dairy(Coming Soon)</a></li> 
							<!-- <li><a href="contact.php">Contact Us</a></li> -->
							</ul>
						</div>
						<div class="cart cart box_1"> 
							<form action="#" method="post" class="last"> 
								<input type="hidden" name="cmd" value="_cart" />
								<input type="hidden" name="display" value="1" />
								<button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
							</form>   
						</div> 
					</nav>
				</div>
			</div>
		</div>