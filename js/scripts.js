/*!
    * Start Bootstrap - Resume v6.0.1 (https://startbootstrap.com/template-overviews/resume)
    * Copyright 2013-2020 Start Bootstrap
    * Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-resume/blob/master/LICENSE)
    */
(function ($) {
    "use strict"; // Start of use strict

    // Smooth scrolling using jQuery easing
    $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function () {
        if (
            location.pathname.replace(/^\//, "") ==
            this.pathname.replace(/^\//, "") &&
            location.hostname == this.hostname
        ) {
            var target = $(this.hash);
            target = target.length
                ? target
                : $("[name=" + this.hash.slice(1) + "]");
            if (target.length) {
                $("html, body").animate(
                    {
                        scrollTop: target.offset().top,
                    },
                    1000,
                    "easeInOutExpo"
                );
                return false;
            }
        }
    });

    // Closes responsive menu when a scroll trigger link is clicked
    $(".js-scroll-trigger").click(function () {
        $(".navbar-collapse").collapse("hide");
    });

    // Activate scrollspy to add active class to navbar items on scroll
    $("body").scrollspy({
        target: "#sideNav",
    });

    // menu toggle
    $(document).ready(function () {
        $(".navGroup>a.menu").click(function () {
            $(this).parent().toggleClass("show");
            $("body").toggleClass("overflow");
        });
    });

    // work expand
    $(document).ready(function () {
        $(".workCategories .categoryGroup .category figure").click(function () {
            $(this).parent().parent().addClass("active");
            $(this).parent().parent().siblings().addClass("minWidth");
            $(this).parent().parent().siblings().removeClass("active");
        });
        $(".workCategories .categoryGroup .category span.close").click(function () {
            $(this).parent().parent().removeClass("active");
            $(this).parent().parent().siblings().removeClass("minWidth");
        });
        $(".workCategories .categoryGroup .category a.title").click(function () {
            $(this).parent().parent().addClass("active");
            $(this).parent().parent().removeClass("mobileActive");
            $(this).parent().parent().siblings().removeClass("active");
            $(this).parent().parent().siblings().removeClass("mobileActive");
        });
    });

    // skills
    $(document).ready(function () {
        $("section#skills .resume-section-content article").click(function () {
            $(this).toggleClass("active");
            $(this).siblings().removeClass("active");
        });
    });

})(jQuery); // End of use strict

// animation text
// Wrap every letter in a span
// var textWrapper = document.querySelector('.ml10 .letters');
// textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

// anime.timeline({ loop: false })
//     .add({
//         targets: '.ml10 .letter',
//         rotateY: [-270, 0],
//         duration: 1800,
//         delay: (el, i) => 50 * i
//     })