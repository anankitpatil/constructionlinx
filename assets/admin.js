$( document ).ready(function() {
	//Initialize
	$('.add-form').initialize();
	$('.edit-form').initialize();
	//Add
    $('#myModal').addThis();
	//Update
	$('.item .edit').updateThis();
	//Delete
	$('.item .delete').deleteThis();
	//Linky
	$('.item .linky').click(function(e){
		e.preventDefault();
		window.open($(this).attr('href'));
	});
});

(function($){
  $.fn.initialize = function() {
	$(this).find('.title').focus(function() { 
		if($(this).val() == 'Enter the title here...') $(this).val('');
	}).blur(function() {
		if($(this).val() == '') $(this).val('Enter the title here...');
	});
	$(this).find('textarea').autosize();
	$(this).find('textarea').focus(function() { 
		if($(this).val() == 'Enter the content here...') $(this).val('');
	}).blur(function() {
		if($(this).val() == '') $(this).val('Enter the content here...');
	});
  }; 
})(jQuery);

(function($){
  $.fn.addThis = function() { 
	$(this).find('.exit').click(function(e){
		e.preventDefault();
		$('.add-form').trigger('reset');
	});
	$(this).find('.save').click(function(e){
		e.preventDefault();
		var formData = new FormData($('.add-form')[0]);
		
		$(this).find('.subtract').css('display', 'block');
		$(this).find('.subtract').animate({'opacity': 1}, 250);
		
		$.ajax({
			url: 'addnews.php',
			data: formData,
			type: 'POST',
			async: false,
			success: function(data){
			  alert(data);
			  $.get('lastnews.php', function(response){
				$('.item .delete').unbind('click');
				$('.item .edit').unbind('click');
				$('.add-form').trigger('reset');
			    $('.subtract').animate({'opacity': 0}, 250);
			    $('.subtract').css('display', 'none');
				$('.item:first-child').before(response);
				$('.item .delete').deleteThis();
				$('.item .edit').updateThis();
				$('#myModal').modal('hide');
			  });
			},
			cache: false,
			contentType: false,
			processData: false,
			error: function(){
			  alert('An error occured. Please refresh the page and try again.');
			}
		});	
	});
  }; 
})(jQuery);

(function($){
  $.fn.updateThis = function() {
	$(this).click(function(e){
		e.preventDefault();
		var id = $(this).attr('id');
		$('.item .edit').unbind('click');
		$('.item .delete').unbind('click');
		var $thisItem = $(this).parent('.item');
			
		$.get('idnews.php?id='+id, function(response){
			var news = jQuery.parseJSON(response);
			$('.edit-form').find('.title').val(news.title);
			$('#editModal .modal-title').html(news.title);
			$('.edit-form').find('.content').val(news.content);
			$('.edit-form').find('.imagery').append('<img src="../uploads/' + news.image + '" />').attr('href', '../uploads/' + news.image);
			$('#editModal').find('.exit').click(function(){
				$('#editModal').modal('hide');
				$('.edit-form').trigger('reset');
				$('.item .edit').updateThis();
				$('.item .delete').deleteThis();
			});
			$('#editModal .subtract').animate({'opacity': 0}, 250);
			$('#editModal .subtract').css('display', 'none');
			$('.edit-form').show();
			$('#editModal').find('.save').click(function(){
				var formData = new FormData($('.edit-form')[0]);
				formData.append('id', id);
				
				$('#editModal .subtract').css('display', 'block');
				$('#editModal .subtract').animate({'opacity': 1}, 250);
				
				$('.edit-form').hide();
		
				$.ajax({
					url: 'updatenews.php',
					data: formData,
					type: 'POST',
					async: false,
					success: function(data){
					  $.get('lastnews.php', function(response){
						$('.edit-form').trigger('reset');
						$('.subtract').animate({'opacity': 0}, 250);
						$('.subtract').css('display', 'none');
						$thisItem.remove();
						$('.item:first-child').before(response);
						$('.item .delete').deleteThis();
						$('.item .edit').updateThis();
						$('#editModal').modal('hide');
					  });
					},
					cache: false,
					contentType: false,
					processData: false,
					error: function(){
					  alert('An error occured. Please refresh the page and try again.');
					}
				});
			});
		});
	});
  }; 
})(jQuery);

(function($){
   $.fn.deleteThis = function() {
      $(this).click(function(e){
		e.preventDefault();
		$thisItem = $(this).parent('.item');
		if(confirm('Are you sure you want to delete this? This cannot be undone.')){
			$.ajax({
				url: 'deletenews.php',
				data: {'id': $(this).attr('id')},
				type: 'POST',
				success: function(data){
				  $thisItem.fadeOut(250).remove();
				},
				error: function(){
				  alert('An error occured. Please refresh the page and try again.');
				}
			});
		}
	  });
   }; 
})(jQuery);