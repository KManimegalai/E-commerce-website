<div class="copyw3-agile"> 
		<div class="container">
			<p>&copy; 2017 Greefitech. All rights reserved | Design by <a href="http://greefitech.com/">Greefitech</a></p>
		</div>
	</div>
	<script src="../js/minicart.js"></script>
	<script>
        w3ls.render();

        w3ls.cart.on('w3sb_checkout', function (evt) {
        	var items, len, i;

        	if (this.subtotal() > 0) {
        		items = this.items();

        		for (i = 0, len = items.length; i < len; i++) { 
        		}
        	}
        });
    </script>  
	<script src="../js/owl.carousel.js"></script>
	<script>
		$(document).ready(function() {
			$("#owl-demo").owlCarousel ({
				items : 3,
				lazyLoad : true,
				autoPlay : true,
				pagination : true,
			});
		});
	</script>
	<script src="../js/SmoothScroll.min.js"></script>  
	<script type="text/javascript" src="../js/move-top.js"></script>
	<script type="text/javascript" src="../js/easing.js"></script>
	<script type="text/javascript" src="../js/custom.js"></script>	
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
			
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
	<script type="text/javascript">
		$(document).ready(function() {
	
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
    <script src="../js/bootstrap.js"></script>
</body>
</html>