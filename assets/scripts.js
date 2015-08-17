$(document).ready(function() {
	//Analytics
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	ga('create', 'UA-56024023-5', 'auto');
	ga('send', 'pageview');
	//Slideshow
	$('.rslides').responsiveSlides();
	//Map
	if($('.contact').length) {
	    var myLatlng = new google.maps.LatLng(53.082840, -2.398819);
		var mapOptions = {
			zoom: 17,
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
			content: '<div style="width:180px;font-size:15px">Construction Linx,<br />Crewe Hall Enterprise Park,<br />Weston Road,<br />Haslington, Crewe,<br /><strong>CW1 6UA</strong></div>'
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