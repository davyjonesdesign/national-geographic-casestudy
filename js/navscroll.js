$(document).ready(function () {
    $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        if (scroll > 0) {
            $(".navbar-container").css("background-image", "none");
            $(".navbar__sticky").css("background", "white");
            $(".navbar__sticky").css("color", "black");
            $(".logomark__text").css("color", "black");
            $(".nav-list").css("color", "black");
            $(".account--description").css("color", "black");
            $(".fa-user").css("color", "black");
            $(".fa-bars").css("color", "black");

        }

        else {
            $(".navbar-container").css("background-image", "linear-gradient(rgba(0, 0, 0, 0.75) 0%, rgba(0, 0, 0, 0.25) 50%, rgba(0, 0, 0, 0) 100%)");
            $(".navbar__sticky").css("background", "none");
            $(".navbar__sticky").css("color", "white");
            $(".logomark__text").css("color", "white");
            $(".nav-list").css("color", "white");
            $(".account--description").css("color", "white");
            $(".fa-user").css("color", "white");
            $(".fa-bars").css("color", "white");

        }
    })
})