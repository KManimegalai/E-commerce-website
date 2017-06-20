$('.location_search').change(function(){
	location.replace("products.php?location="+this.value);
});
$('#search').click(function(){
	$('#form').submit(function (e) {
		e.preventDefault();
		location_search = $('#agileinfo_search').value();
		location.replace("products.php?location="+location_search);
	});

});
$('.product_search').change(function(){
	window.location.href = "products.php?location="+localStorage.getItem("location")+"&category="+this.value;
});