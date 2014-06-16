$(document).ready(function() {

    $('.popup_open').click(function(e) {
        e.preventDefault();
        var dataT = $(this).data('type');
        $('#popup').fadeIn(300);
        var dataT = $(this).data('type');
        var popup = $('#popup');
        popup.find('div').each(function(){
            var ths = this;
            if($(this).attr('class') == dataT) {
                $(this).fadeIn(300);
            }
        });
    });
    $(".menu_open.big > div").shapeshift({
        minColumns: 4,
        align: 'left',
        paddingX: 22,
        paddingY: 21,
        gutterX: 20,
        gutterY: 26
    });
    $(".add_job").shapeshift({
        minColumns: 3,
        align: 'left',
        paddingX: 5,
        gutterX: 20,
        paddingY: 0,
        gutterY: 20
    });
    $(".ideas_photo").shapeshift({
        minColumns: 4,
        align: 'left',
        paddingX: 2,
        gutterX: 20,
        paddingY: 0,
        gutterY: 20
    });
    if($('section').hasClass('alert')) {
        $('section').css('min-height', $(window).height())
    }
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
    $( ".form_cost" ).accordion({
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
    $('.breadcrumbs').find('a:last').click(function(e){
        e.preventDefault();
        e.stopPropagation();
    });

    jQuery("#slider").slider({
        min: 0,
        max: 10000,
        values: [72,6000],
        range: true,
        stop: function(event, ui) {
            jQuery("input#minCost").val(jQuery("#slider").slider("values",0) + ' руб');
            jQuery("input#maxCost").val(jQuery("#slider").slider("values",1) + ' руб');

        },
        slide: function(event, ui){
            jQuery("input#minCost").val(jQuery("#slider").slider("values",0) + ' руб');
            jQuery("input#maxCost").val(jQuery("#slider").slider("values",1) + ' руб');
        }
    });

    jQuery("input#minCost").change(function(){
        var value1=jQuery("input#minCost").val();
        var value2=jQuery("input#maxCost").val();

        if(parseInt(value1) > parseInt(value2)){
            value1 = value2;
            jQuery("input#minCost").val(value1);
        }
        jQuery("#slider").slider("values",0,value1);
    });


    jQuery("input#maxCost").change(function(){
        var value1=jQuery("input#minCost").val();
        var value2=jQuery("input#maxCost").val();

        if (value2 > 10000) { value2 = 1000; jQuery("input#maxCost").val(10000)}

        if(parseInt(value1) > parseInt(value2)){
            value2 = value1;
            jQuery("input#maxCost").val(value2);
        }
        jQuery("#slider").slider("values",1,value2);
    });
    $(".product_table" ).tabs();
    $('.tabs').tabs();
    //               popup open-close function

    $('#popup a.close').click(function() {
        $('#popup').fadeOut(300);
        this.parent('div').fadeOut(300);
        $('body').css('overflow', 'hidden');
    });

        $('#popup').click(function() {
            $(this).fadeOut(300);
            $('#popup > div').each(function() {
                $(this).fadeOut(300);
                $('body').css('overflow', 'hidden');
            });
        });


    //      end popup function
    var foto = $('.fotorama');
    function ftr() {
        if($(foto)) {
            $('.fotorama').fotorama({
                thumbwidth: 57,
                thumbheight: 57,
                thumbmargin: 5
            });
        }
        else {
            return false;
        }
    }
//    ftr();



});
