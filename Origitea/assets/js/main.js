$(document).ready(function(){   
    $(window).scroll(function () {
        if ($(this).scrollTop() > 0) {
            $('.btn_top').fadeIn();
        } else {
            $('.btn_top').fadeOut();
        }
    });
    $('.btn_top').click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 800);
        return false;
    });

    $('.menu-btn').click(function() {
        $('.navbar').toggleClass('active');
        $('.navbar-menu-active_wrapper').toggleClass('active');
    });

    $('.menu-btn_mobile').click(function() {
        $('.navbar').toggleClass('active');
        $('.navbar-menu-active_wrapper').toggleClass('active');
    });

    $('.navbar-menu-active_wrapper').click(function() {
        $('.navbar').toggleClass('active');
        $(this).toggleClass('active');
    });

    $('.navbar-menu li span').click(function() {
        $(this) .parent('li').toggleClass('active');
    })

    $('.questions-content-item span').click(function(){
        $(this) .parent('.questions-content-item').toggleClass('overflow');
    })

    $('#open_modal').click(function() {
        $('.modal-overlay').removeClass('closed');
        $('.modal').removeClass('closed');
    });
    $('.modal-overlay').click(function() {
        $(this).addClass('closed');
        $('.modal').addClass('closed');
    })
    $('.modal_closed').click(function() {
        $('.modal-overlay').addClass('closed');
        $('.modal').addClass('closed');
    })
});