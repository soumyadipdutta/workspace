// Custom JS file


$(function(){
  $(".c-click-to-next-1").click(function(e){
    $('#section1').scrollTo(this.hash,this.hash); 
  });
});

$(document).ready(function() {
	$('.loading-section').fadeOut('slow');
    $('#fullpage').fullpage();
    
    /*$(".c-click-to-next").on("click", function(e) {
    	e.preventDefault();
        $.fn.fullpage.moveSectionDown();
    });*/

    setTimeout(function(){
      $('#section3.fp-completely .o-animated-garbage').fadeIn('slow');
    }, 5000);
});

var sliderCount = 0;
$(document).find(".c-click-to-next").on("click", function(e) {
    sliderCount++;
    console.log('Slider-'+sliderCount);
    $.fn.fullpage.moveSectionDown();
}),

$(window).load(function(){
	//$('.o-rotate-animation').fadeIn('slow');
	$('.loading-section').fadeOut('slow');
	$('.o-rotate-animation').animate({
	    opacity: 1
	}, 3000);
});