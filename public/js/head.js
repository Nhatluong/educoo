$(document).ready(function () {

    $('.btn_open_menu').click(function () {
        console.log('AAA')
        if ($(this).hasClass('open')) {
            $(this).removeClass('open');
            // $('.nav_menu > ul').css('display', 'none');
        } else {
            $(this).addClass('open');
            // $('.nav_menu > ul').css('display', 'block');
        }
        showHideOpenLeftMenu()
    });

    $(document).on('click', function (e) {
        if ($(e.target).closest(".nav_menu").length === 0 && $(e.target).closest(".btn_open_menu").length === 0) {
           if ($('.btn_open_menu').hasClass('open')) {
               console.log('vap')
               $('.btn_open_menu').removeClass('open')
               // $('.nav_menu > ul').css('display', 'none')
               showHideOpenLeftMenu()
           } else {

           }
        }
    });

    function showHideOpenLeftMenu() {
        $('.nav_menu > ul').toggle({animate: "toggle"})
    }

});