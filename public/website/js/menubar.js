var screen_xs = 767;

$(window).resize(function() {
	$(document).scroll(function(e){
		var scrollTop = $(document).scrollTop();
		if ((window.innerWidth <= screen_xs)&&(scrollTop > 107)) {
			$('.navbar').addClass('navbar-fixed-top');
			$('#visible_xs').removeClass('hidden');
			$('#visible_xs').addClass('visible-xs');
			$('.navbar-brand').removeClass('hidden');
			
	    } else {
	        $('.navbar').removeClass('navbar-fixed-top');
	        $('#visible_xs').removeClass('visible-xs');
	        $('#visible_xs').addClass('hidden');
	        $('.navbar-brand').addClass('hidden');
	    }
	});
});	

$(window).load(function() {
	$(document).scroll(function(e){
		var scrollTop = $(document).scrollTop();
		if ((window.innerWidth <= screen_xs)&&(scrollTop > 107)) {
			$('.navbar').addClass('navbar-fixed-top');
			$('#visible_xs').removeClass('hidden');
			$('#visible_xs').addClass('visible-xs');
			$('.navbar-brand').removeClass('hidden');			
	    } else {
	        	$('.navbar').removeClass('navbar-fixed-top');
	        	$('#visible_xs').removeClass('visible-xs');
	        	$('#visible_xs').addClass('hidden');
	        	$('.navbar-brand').addClass('hidden');
	    }
	});
});	    


$('.dropdown').hover(function(){ 
	if(window.innerWidth > screen_xs){
		$('.dropdown-toggle', this).trigger('click'); 
	}
});
