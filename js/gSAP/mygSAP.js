var tlcirc1 = gsap.timeline({ defaults: { duration: 1, ease: "bounce", delay: 0.8 } })
var tlcirc2 = gsap.timeline({ defaults: { duration: 6.5, ease: "linear" } })
var tlcirc3 = gsap.timeline({ defaults: { duration: 0.4, ease: "back" } })
var tlcirc4 = gsap.timeline({ defaults: { duration: 0.2, ease: "bounce" } })

tlcirc1.from("img.img-fluid.img-profile.rounded-circle.mx-auto.mb-2", { scale: 0 })
tlcirc1.from("body .ml8 .circle-dark-dashed", { scale: 0, ease: "back" }, "-=0.8")
tlcirc2.to("body .ml8 .circle-dark-dashed", { rotation: 360, ease: 'power2' }, "-=0.8")
// for making infinite loop
// tlcirc2.to("body .ml8 .circle-dark-dashed", { rotation: 360, repeat: -1 }, "-=0.8")


// for sideNav navigations (MOBILE)
document.querySelector(".navGroup").addEventListener("click", navIconChange);
tlcirc3.to(".menuCloseIcon .threeSpans span:nth-child(2)", { x: 500, duration: 0.3 });
tlcirc3.to(".menuCloseIcon .threeSpans span:nth-child(1)", { left: '12px', top: '-1px', transform: 'rotate(45deg) translateY(16px)' }, '-=0.5');
tlcirc3.to(".menuCloseIcon .threeSpans span:nth-child(3)", { left: '12px', top: '2px', transform: 'rotate(-45deg) translateY(-16px)' }, '-=0.4');
tlcirc3.to(".menuCloseIcon .threeSpans span", { backgroundColor: '#ffffff', duration: 0.3 });
tlcirc3.to("#sideNav", { left: '0' }, '-=0.4');

tlcirc3.reversed(true);
function navIconChange() {
    tlcirc3.reversed(!tlcirc3.reversed());
}

