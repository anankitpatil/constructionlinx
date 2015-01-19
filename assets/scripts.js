$(document).ready(function() {
	//Slideshow
	$('.rslides').responsiveSlides();
	//Map
	if($('.contact').length) {
		var myLatlng = new google.maps.LatLng(53.071994, -2.458096);
		var mapOptions = {
			zoom: 15,
			center: myLatlng,
			scrollwheel: false,
			navigationControl: false,
			mapTypeControl: false,
			scaleControl: false,
			panControl: false,
			zoomControlOptions: {
				style: google.maps.ZoomControlStyle.LARGE,
				position: google.maps.ControlPosition.LEFT_BOTTOM
			},
			mapTypeId: google.maps.MapTypeId.ROADMAP
		};
		var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
		if(WURFL.is_mobile) map.setOptions({draggable: false});
		var marker = new google.maps.Marker({
		  	position: myLatlng,
		  	map: map
	  	});
		var infowindow = new google.maps.InfoWindow({
			content: '<div style="width:120px;font-size:15px">Rope Garden Nursery,<br />Gresty Lane,<br />Crewe, Cheshire<br /><strong>CW2 5DD</strong></div>'
		});
		infowindow.open(map,marker);
	}
	//Services
	if($('.services').length && !WURFL.is_mobile && ($(window).width() >= 992)){
		var maxHeight = 0;
		$('.services').find('.box').each(function(){
			if(maxHeight < $(this).outerHeight()) maxHeight = $(this).outerHeight();
		});
		$('.services').find('.box').css({ height: maxHeight + 'px' });
	}
	//Contact form
	if($('.contact').length){
		$('#contact').bootstrapValidator({
			message: 'This value is not valid',
			submitButtons: '#submit',
			trigger: null
		}).on('success.form.bv', function(e){
			e.preventDefault();
			var $form = $(e.target);
			var bv = $form.data('bootstrapValidator');
			$.post($form.attr('action'), $form.serialize(), function(result) {
				$('#contact').hide(300);
				$('.contact .alert-success').show(300);
			}).fail(function() {
				$('#contact').hide(300);
				$('.contact .alert-danger').show(300);
			});
		});
	}
});