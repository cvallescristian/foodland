

    // posicion fija desde una posicion espesifica.
    jQuery.noConflict();
    jQuery(document).ready(function() {
        
        jQuery(function () {
            jQuery(window).scroll(function () {
                
                if(jQuery(this).scrollTop()>600){
                    jQuery('#categoria').css('position','fixed');
                    jQuery('#categoria').css('right','0px');
                    jQuery('#categoria').css('top','80px');
                    jQuery('#categoria').css('bottom','20px');
                    jQuery('#categoria').css('height','250px');
                }else{
                   
                    jQuery('#categoria').css('position','absolute');
                    jQuery('#categoria').css('right','0px');
                    jQuery('#categoria').css('bottom','30px');
                    jQuery('#categoria').css('top','240px');
                     jQuery('#categoria').css('height','250px');
                }

                 if(jQuery(this).scrollTop()>2060){

                     jQuery('#categoria').css('position','absolute');
                    jQuery('#categoria').css('right','0px');
                    jQuery('#categoria').css('bottom','30px');
                    jQuery('#categoria').css('top','2520px');
                }


            });
          
        });

    });
    //]]>




$(function () {
    $(window).scroll(function() {
        if ($(".navbar").offset().top>30) {
            $(".navbar-inner").addClass("sticky");
        }
        else {
            $(".navbar-inner").removeClass("sticky");
        }
    });

    // Flex
    if ($(".flexslider").length) {
        $('.flexslider').flexslider();
    }

    servicesCircle.initialize();

    staticHeader.initialize();

    portfolioItem.initialize();
});

var portfolioItem = {
    initialize: function () {
        var $container = $("#portfolio_tem .left_box");
        var $bigPics = $container.find(".big img");
        var $thumbs = $container.find(".thumbs .thumb");

        $bigPics.hide().eq(0).show();

        $thumbs.click(function (e) {
            e.preventDefault();
            var index = $thumbs.index(this);
            $bigPics.fadeOut();
            $bigPics.eq(index).fadeIn();
        });
    }
}

var staticHeader = {
    initialize: function () {
        if ($(".navbar-static-top").length) {
            $("body").css("padding-top", 0);
        }
    }
}

var servicesCircle = {
    initialize: function () {
        var $container = $(".services_circles");
        var $texts = $container.find(".description .text");
        var $circles = $container.find(".areas .circle");

        $circles.click(function () {
            var index = $circles.index(this);
            $texts.fadeOut();
            $texts.eq(index).fadeIn();
            $circles.removeClass("active");
            $(this).addClass("active");
        });
    }
}

