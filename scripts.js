$(document).ready(function(){
    $("#products-nav").on('click', function(){
        $("#main-home").css({display: "none"});
        $("#nav").animate({left: "1000"}, 500);
        $('#products').appendTo('#container').show({duration: 500}).animate({left: "0"});
    });
    $("#home-nav").on('click', function(){
        $("#main-home").delay(450).queue(function(n) {
            $("#main-home").css({display: "inline"});
            n();
        });
        $("#nav").animate({left: "40"}, 500);
        $('#products').appendTo('#container').show({duration: 700}).animate({left: "-1000"});
    });
});