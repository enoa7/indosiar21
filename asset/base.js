$(document).ready(function() {

    // instantiate fastclick
    FastClick.attach(document.body);

    // create a function to make el sticky
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

    // function to clone the megamenu so the cloned one is what we stick
    function cloneMegamenu() {
        var megamenu = $("#megamenu-lg");
        $(megamenu).addClass('original').clone().insertAfter(megamenu).addClass('cloned').css('position', 'fixed').css('top', '0').css('margin-top', '0').css('z-index', '500').removeClass('original').hide();
        scrollIntervalID = setInterval(stickIt, 10);
    }

    // call the function
    cloneMegamenu();

    $(".menu-burger").click(function() {
        $('body').toggleClass('sliding-menu-open sliding-menu-close');
    });

    $('#list-artist > .slicky').slick();

    var target = $('.nav-list .menu-list a');
    // console.log(getHref);

    $(target).one("click", function() {
        var getHref = $(this).attr('href').split('#'); //get this el's href
        var newHref = getHref[1];
        $('.main-banner > .container-fluid').append($('<div>').hide().load(newHref + '.html')).fadeIn('500');
    });

    
    // $('.slicky').on('beforeChange', function(event, slick, currentSlide, nextSlide) {
    //     var newTarget = currentSlide + 1;
    //     var child = $('.slicky .slick-artist:nth-child('+newTarget+') span').attr('data-artist');
    //     // var getData = $(child).data('artist');
    //     console.log(child);
    // });

});
