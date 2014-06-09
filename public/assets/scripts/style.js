$(document).ready(function() {
    $(".menu_open.big > div").shapeshift({
        minColumns: 4,
        align: 'left',
        paddingX: 22,
        paddingY: 21,
        gutterX: 20,
        gutterY: 26
    });
    $('.menu_open').mouseenter(function() {
        $(this).find('div').css('visibility', 'visible');
    });
    $('.menu_open').mouseleave(function() {
        $(this).find('div').css('visibility', 'hidden');
    });
    $('.city > p').click(
        function() {
            if($('.city ul').css('display') == 'none') {
                $('.city ul').slideDown("slow");
                $('.city > p').addClass("active");
            }
            else {
                $('.city ul').slideUp("slow");
                $('.city > p').removeClass("active");
            }
    });

    $( ".sidebar_menu" ).accordion({
        collapsible: true,
        active: false
    });

    $('.slider').glide({
        autoplay: 5000,
        nav: true,
        arrows: false,
        navCenter: false,
        animationTime: 500
    });

});
//slider

 /*   $(".slider").each(function ()
    {
        var obj = $(this);
        $(obj).append("<div class='nav'></div>");
        $(obj).find("li").each(function ()
        {
            $(obj).find(".nav").append("<span rel='"+$(this).index()+"'></span>");
            $(this).addClass("slider"+$(this).index());
        });
        $(obj).find("span").first().addClass("on");
    });
});
function sliderJS (obj, sl){
    var ul = $(sl).find("ul");
    var bl = $(sl).find("li.slider"+obj);
    var step = $(bl).width();
    $(ul).find('li').each(function(){
       $(this).find('div').animate({opacity: 0}, 100);
        $(this).find('div').animate({opacity: 1}, 1000);
    });
    $(ul).animate({marginLeft: "-"+step*obj}, 500); // 500 это скорость перемотки
}
$(document).on("click", ".slider .nav span", function(){
    var sl = $(this).closest(".slider");
    $(sl).find("span").removeClass("on");
    $(this).addClass("on");
    var obj = $(this).attr("rel");
    $('.slider').find('ul li div').stop();
    sliderJS(obj, sl);
    return false;
});
var leng = $('.slider ul li').length,
    ul = $('.slider ul');
ul.css('width', $('.slider ul li').width() * leng + 'px');
function autoplay() {
    setInterval(function(){
        if(($('.slider ul').width() + (parseFloat($('.slider ul').css('margin-left')) - ( -$('.slider ul li').width()))) == 0) {
            $('.slider ul').animate({marginLeft: 0}, 500);
        }
       // else if(){
       //     $('.slider ul').animate({marginLeft: $('.slider ul').css('margin-left') - 713}, 500);
     //   }
    }, 1000);
}
//autoplay();*/