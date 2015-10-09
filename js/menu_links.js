// FIRST LINK TO ABOUT
$(function(){

	$('a[href*=#acerca]').click(function() {

		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
			&& location.hostname == this.hostname) {

		        var $target = $(this.hash);

		        $target = $target.length && $target || $('[name=' + this.hash.slice(1) +']');

		        if ($target.length) {

		        	var targetOffset = $target.offset().top;

		        	$('html,body').animate({scrollTop: targetOffset}, 1000);

		        	return false;

		        }

	    }

	});
});

// SECOND LINK TO CONTACT
$(function(){

	$('a[href*=#acerca]').click(function() {

		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
			&& location.hostname == this.hostname) {

		        var $target = $(this.hash);

		        $target = $target.length && $target || $('[name=' + this.hash.slice(1) +']');

		        if ($target.length) {

		        	var targetOffset = $target.offset().top;

		        	$('html,body').animate({scrollTop: targetOffset}, 1000);

		        	return false;

		        }

	    }

	});
});