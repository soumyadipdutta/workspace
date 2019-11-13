//var position = $(".mario").offset().left;

$(window).scroll(function(){
    console.log($('.mario').offset());
});

$(document).ready(function(){
    $('.click-play').click(function(){
        $(this).parents('div.game-overlay').fadeOut('slow');
        $('body').addClass('moving');
        $('.bird').animate({'right':'100%'}, 10000);
        $('.bonus').animate({'right':'100%'}, 15000);

        var marioPos = $('.mario').offset().left;
        var moonPos = $('.moon').offset().left;
        console.log(moonPos);

        
        var i = 0;
        // This block will be executed 100 times.
        setInterval(function(){
            $('.score').text(i++);
            if (i == 100) {
                $('.background').css({"background-color" : "#3467d5", "transition-duration": "1s"});    
                
            }else if(i == 200){
                $('.background').css({"background-color" : "#0a2663", "transition-duration": "1s"});
                $('.moon').show().animate({'right':'100%'}, 10000);
            }else {
                //$('.score').text(i++);
            }
        }, 100);
    });

    //jump
    $(window).keydown(function(e){ 
        console.log(e.keyCode);
        $('.mario').removeClass('bounce');
        if(e.keyCode == 32){
            $('.mario').css({'top' : '400px'}).effect("bounce", { direction:'up', times:1 }, 900);
        }
    });
});