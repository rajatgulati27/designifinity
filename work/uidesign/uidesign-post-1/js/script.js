var tl1 = gsap.timeline({ defaults: { duration: 0.6, ease: "back" } })
var tl2 = gsap.timeline({ defaults: { duration: 1, ease: "back" } })
var tl3 = gsap.timeline({ defaults: { duration: 0.4, ease: "none" } })

// tl2.from("div#girly-designifinity .homePage", { scale: 0, transformOrientation: 'center', delay: 0.6 })
$("div#girly-designifinity .homePage .leftArticle .tiles li.card.active").on("click", function () {
    tl3.to("div#girly-designifinity .homePage", { opacity: 0 })
    tl1.to(".brundha", { left: 0 })
    tl2.from(".brundha .infoCard",{bottom: "-110%"}, "+=0.6")
    tl1.to(".brundha",{backgroundPositionY: -85},"+=0.2")
});
$(".brundha span#back").on("click", function () {
    tl1.to(".brundha", { left: "-110%" })
    tl3.to("div#girly-designifinity .homePage", { opacity: 1 })
    tl1.to(".brundha", { backgroundPositionY: 0 }, "-=0.6")
});
$(".brundha span#downButton").on("click", function () {
    tl2.to(".brundha .infoCard", { bottom: "-110%" })
    tl2.to(".brundha", { backgroundPositionY: -20, backgroundSize: "360px 657px" }, "-=1.2")
    tl3.to(".brundha span#upButton", { scale: 1 }, "-=0.15")
});
$(".brundha span#upButton").on("click", function () {
    tl3.to(".brundha span#upButton", { scale: 0, delay: 0.01})
    tl2.to(".brundha .infoCard", { bottom: "0px" }, "-=0.3")
    tl1.to(".brundha", { backgroundPositionY: -50, backgroundSize: "333px 599px"},"+=0.1")
});

