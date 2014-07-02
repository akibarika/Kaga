/**
 * Created by Akiba on 14-7-1.
 */

$(document).ready(function(){

    //nav-menu
    $('.nav-menu').click(function(event) {
        event.stopPropagation();
        if (!$(this).hasClass('cross')) {
            $(this).addClass('cross');
            $('.selector').addClass('show');
            $('.pop-menu').addClass('show');
            $('.pop-menu').addClass('popup');
        } else {
            $(this).removeClass('cross');
            $('.selector').removeClass('show');
            $('.pop-menu').removeClass('show');
            $('.pop-menu').removeClass('popup');
        }
    });
    $('.pop-menu').mouseenter(function(event) {
        event.stopPropagation();
        $(this).addClass('show');
        $(this).addClass('popup');
    });
    $('.pop-menu').click(function(event) {
        event.stopPropagation();
    });
    $(document).click(
        function(){
            $('.pop-menu').removeClass('show');
            $('.pop-menu').removeClass('popup');
            $('.nav-menu').removeClass('cross');
            $('.selector').removeClass('show');
        }

    );
});