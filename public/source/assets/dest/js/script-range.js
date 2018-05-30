$(document).ready(function() 
{
	$( "#slider_price" ).slider({
				range: true,
				min: 0,
				max: 500000,
				step:5000,
				values: [ 0, 500000 ],
				slide: function( event, ui ) {
					$( "#app_min_price" ).text(ui.values[0] + "VND"); // gia tri text khi keo 
					$( "#app_max_price" ).text(ui.values[1] + "VND");
				},
				 stop: function( event, ui ) {
				 	$( "#target" ).submit(function( event )
				 	{

				 		$("#min_slider").val( $("#app_min_price" ).text()); // value hidden nhan gia tri khi dung keo
				 		$("#max_slider").val( $("#app_max_price" ).text());

				 	});
				 },
	});
	$("#app_min_price").text( $("#slider_price").slider("values", 0) + "VND"); // hien gra tri 0-500000 ban dau
	$("#app_max_price").text( $("#slider_price").slider("values", 1) + "VND");

	$("#min_slider").val( $("#slider_price").slider("values", 0)); //nhan gia tri ban dau value
	$("#max_slider").val( $("#slider_price").slider("values", 1));	
	  
});
