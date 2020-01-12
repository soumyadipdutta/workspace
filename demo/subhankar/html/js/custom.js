jQuery(document).ready(function($){
       
});


$(window).scroll(function(){
	var windowscroll = $(window).scrollTop();
	if(windowscroll > 20){
		$('.c-header-main').addClass('stickey');
	}else{
		$('.c-header-main').removeClass('stickey');
	}
});