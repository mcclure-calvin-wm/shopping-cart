$(document).ready(function(){
    $("#products-nav").on('click', function(){
        $("#main-home").css({display: "none"});
        $("#nav").animate({left: "1000"}, 500);
        $('#products').appendTo('#container').show({duration: 500}).animate({left: "0"});
        $('#cart').appendTo('#container').show({duration: 700}).animate({left: "-1000"});
    });
    $("#home-nav").on('click', function(){
        $("#main-home").delay(450).queue(function(n) {
            $("#main-home").css({display: "inline"});
            n();
        });
        $("#nav").animate({left: "40"}, 500);
        $('#products').appendTo('#container').show({duration: 700}).animate({left: "-1000"});
        $('#cart').appendTo('#container').show({duration: 700}).animate({left: "-1000"});
    });
    $("#cart-nav").on('click', function(){
        $("#main-home").css({display: "none"});
        $('#cart').appendTo('#container').show({duration: 500}).animate({left: "0"});
        $("#nav").animate({left: "1000"}, 500);
        $('#products').appendTo('#container').show({duration: 700}).animate({left: "-1000"});
    });

});