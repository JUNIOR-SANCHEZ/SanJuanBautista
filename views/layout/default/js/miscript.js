$(document).ready(function () {
	$(window).scroll(function () {
		if ($(window).scrollTop() > 100) {
			$('header').addClass('header2');
                        $('.menu-nav').css("margin-top","90px");
		} else {
			$('header').removeClass('header2');
                        $('.menu-nav').css("margin-top","70px");
                        
		}
                
	});
        
})
