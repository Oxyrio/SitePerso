$(window).scroll(function(){
    $(".navbar").offset().top>50?$(".navbar-fixed-top").addClass("revelant"):$(".navbar-fixed-top").removeClass("revelant");
});

$(document).ready(function () {
    $(document).on("scroll", onScroll);

    //smoothscroll
    $('a[href^="#"]').on('click', function (e) {
        e.preventDefault();

        $('a').each(function () {
            $(this).removeClass('active');
        });
        $(this).addClass('active');

    });
});

function onScroll(event){
    var scrollPos = $(document).scrollTop();
    $('.nav a').each(function () {
        var currLink = $(this);
        var refElement = $(currLink.attr("href"));
        if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
            $('.nav a').removeClass("active");
            currLink.addClass("active");
        }
        else{
            currLink.removeClass("active");
        }
    });
}