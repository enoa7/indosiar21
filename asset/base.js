$(document).ready(function() {

    console.log('start');
    FastClick.attach(document.body);

    function stickIt() {

        var orgElementPos = $('.original').offset();
        orgElementTop = orgElementPos.top;

        if ($(window).scrollTop() >= (orgElementTop)) {
            // scrolled past the original position; now only show the cloned, sticky element.

            // Cloned element should always have same left position and width as original element.     
            orgElement = $('.original');
            coordsOrgElement = orgElement.offset();
            leftOrgElement = coordsOrgElement.left;
            widthOrgElement = orgElement.css('width');
            $('.cloned').css('left', leftOrgElement + 'px').css('top', 0).css('width', widthOrgElement).show();
            $('.original').css('visibility', 'hidden');
        } else {
            // not scrolled past the menu; only show the original menu.
            $('.cloned').hide();
            $('.original').css('visibility', 'visible');
        }  


    }

    function cloneMegamenu() {
        var megamenu = $("#megamenu-lg");
        $(megamenu).addClass('original').clone().insertAfter(megamenu).addClass('cloned').css('position', 'fixed').css('top', '0').css('margin-top', '0').css('z-index', '500').removeClass('original').hide();

        scrollIntervalID = setInterval(stickIt, 10);

        
    }

    cloneMegamenu();


    $(".menu-burger").click(function() {
        $('body').toggleClass('sliding-menu-open sliding-menu-close');
    });

    $('#list-artist > div').slick();

    var target = $('.nav-list .menu-list a');
    // console.log(getHref);

    $(target).one("click", function(){
        var getHref = $(this).attr('href').split('#'); //get this el's href
        var newHref = getHref[1];
        $('.main-banner > .container-fluid').append($('<div>').hide().load(newHref + '.html')).fadeIn('500');
        // .hide().load("tx.php").fadeIn('500');
    });
    // for (i = 0; i < target.length; i++) {
    //     var getHref = $(target[i]).attr('href');
    //     console.log(getHref);
    // }
    
    // $.each(target, function(){
    //    var getHref = $(this).attr('href');
    //     console.log(getHref);
    // });
    // $('.main-banner').load('tst.html');
});
