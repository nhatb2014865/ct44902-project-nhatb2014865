function reponsiveScreen() {
    if ($(window).width() >= 1200) {
        $('main').css('padding-left', $('.admin-slidebar').width());
        $('.admin-slidebar').addClass('show');
        $('.logo').css('margin-left', '20%');
    }
    else {
        $('.logo').css('margin-left', $(window).width() / 3 - 100);
        $('main').css('padding-left', '0px');
        $('.admin-slidebar').removeClass('show');
    }

    if ($(window).width() < 426) {
        $('.welcome-text').css('display', 'none');
    }
    if ($(window).width() >= 426) {
        $('.welcome-text').css('display', '');
    }
}
