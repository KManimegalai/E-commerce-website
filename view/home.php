<?php 
    include_once 'header.php';
    include_once '../controller/get_location.php';
    $raw_data =display_location();
?>
		<!-- //header-end --> 
		<!-- banner-text -->
		<div class="banner-text">	
			<div class="container">
				<h2>Choose Your Location*</h2>
				<div class="agileits_search">
					<form action="#" method="post">
						<!-- <input name="Search" type="text" placeholder="Enter Your Area Name" required=""> -->
						<select id="agileinfo_search" class="location_search" name="agileinfo_search" required="">
							<option value="">Popular Cities</option>
							<?php 
                            if ($raw_data == 'empty') {
                                    echo "";
                                 } 
                            else{
                                $i=0;
                            foreach ($raw_data as $value) {
                            echo "<li><option value=".$raw_data[$i]['location'].">".$raw_data[$i]['location']."</option></li>";                   	
                            $i++;
                            }
                        }
                         ?>
						</select>
						<input type="submit" id="search" value="Search">
					</form>
				</div> 
			</div>
		</div>
	</div>
	<div class="add-products">  
		<div class="container">
			<div class="add-products-row">
				<div class="w3ls-add-grids">
					<a href="menu.html"> 
						<h4>Get <span>20%<br>Cashback</span></h4>
						<h5>Ordered in mobile app only </h5>
						<h6>Order Now <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></h6>
					</a>
				</div>
				<div class="w3ls-add-grids w3ls-add-grids-right">
					<a href="menu.html"> 
						<h4>GET Upto<span><br>40% Offer</span></h4>
						<h5>Sunday special discount</h5>
						<h6>Order Now <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></h6>
					</a>
				</div> 
				<div class="clearfix"> </div> 
			</div>  	 
		</div>
	</div>
	<div class="w3agile-deals">
		<div class="container">
			<h3 class="w3ls-title">Special Services</h3>
			<div class="dealsrow">
				<div class="col-md-6 col-sm-6 deals-grids">
					<div class="deals-left">
						<i class="fa fa-truck" aria-hidden="true"></i>
					</div> 
					<div class="deals-right">
						<h4>FREE DELIVERY</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempus justo ac </p>
					</div> 
					<div class="clearfix"> </div>
				</div> 
				<div class="col-md-6 col-sm-6 deals-grids">
					<div class="deals-left">
						<i class="fa fa-birthday-cake" aria-hidden="true"></i>
					</div> 
					<div class="deals-right">
						<h4>Party Orders</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempus justo ac </p>
					</div> 
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 col-sm-6 deals-grids">
					<div class="deals-left">
						<i class="fa fa-users" aria-hidden="true"></i>
					</div> 
					<div class="deals-right">
						<h4>Team up Scheme</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempus justo ac </p>
					</div>
					<div class="clearfix"> </div>
				</div> 
				<div class="col-md-6 col-sm-6 deals-grids">
					<div class="deals-left">
						<i class="fa fa-building" aria-hidden="true"></i>
					</div> 
					<div class="deals-right">
						<h4>corporate orders</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempus justo ac </p>
					</div>
					<div class="clearfix"> </div>
				</div> 
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<div class="w3agile-spldishes">
		<div class="container">
			<h3 class="w3ls-title">Special Foods</h3>
			<div class="spldishes-agileinfo">
				<div class="col-md-3 spldishes-w3left">
					<h5 class="w3ltitle">Staple Specials</h5>
					<p>Vero vulputate enim non justo posuere placerat Phasellus mauris vulputate enim non justo enim .</p>
				</div> 
				<div class="col-md-9 spldishes-grids">
					<!-- Owl-Carousel -->
					<div id="owl-demo" class="owl-carousel text-center agileinfo-gallery-row">
						<a href="products.html" class="item g1">
							<img class="lazyOwl" src="../images/g1.jpg" title="Our latest gallery" alt=""/>
							<div class="agile-dish-caption">
								<h4>Duis congue</h4>
								<span>Neque porro quisquam est qui dolorem </span>
							</div>
						</a>
						<a href="products.html" class="item g1">
							<img class="lazyOwl" src="../images/g2.jpg" title="Our latest gallery" alt=""/>
							<div class="agile-dish-caption">
								<h4>Duis congue</h4>
								<span>Neque porro quisquam est qui dolorem </span>
							</div>
						</a>
						<a href="products.html" class="item g1">
							<img class="lazyOwl" src="../images/g3.jpg" title="Our latest gallery" alt=""/>
							<div class="agile-dish-caption">
								<h4>Duis congue</h4>
								<span>Neque porro quisquam est qui dolorem </span>
							</div>
						</a>
						<a href="products.html" class="item g1">
							<img class="lazyOwl" src="../images/g4.jpg" title="Our latest gallery" alt=""/>
							<div class="agile-dish-caption">
								<h4>Duis congue</h4>
								<span>Neque porro quisquam est qui dolorem </span>
							</div>
						</a>
						<a href="products.html" class="item g1">
							<img class="lazyOwl" src="../images/g5.jpg" alt=""/>
							<div class="agile-dish-caption">
								<h4>Duis congue</h4>
								<span>Neque porro quisquam est qui dolorem </span>
							</div>
						</a> 
						<a href="products.html" class="item g1">
							<img class="lazyOwl" src="../images/g1.jpg" title="Our latest gallery" alt=""/>
							<div class="agile-dish-caption">
								<h4>Duis congue</h4>
								<span>Neque porro quisquam est qui dolorem </span>
							</div>
						</a>
						<a href="products.html" class="item g1">
							<img class="lazyOwl" src="../images/g2.jpg" title="Our latest gallery" alt=""/>
							<div class="agile-dish-caption">
								<h4>Duis congue</h4>
								<span>Neque porro quisquam est qui dolorem </span>
							</div>
						</a>
						<a href="products.html" class="item g1">
							<img class="lazyOwl" src="../images/g3.jpg" title="Our latest gallery" alt=""/>
							<div class="agile-dish-caption">
								<h4>Duis congue</h4>
								<span>Neque porro quisquam est qui dolorem </span>
							</div>
						</a>
					</div> 
				</div>  
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<?php include_once 'footer.php'; ?>