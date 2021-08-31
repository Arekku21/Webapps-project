/*----------Olivias part----------------------*/
const tl = gsap.timeline({
    defaults: {
        ease: "power1.out"
    }
});

tl.to(".text", {
    y: "0%",
    duration: 1,
    stagger: 0.25
});
tl.to(".sliderr", {
    y: "-100%",
    duration: 1.5,
    delay: 0.5
});
tl.to(".introo", {
    y: "-100%",
    duration: 1
}, "-=1");
tl.fromTo("nav", {
    opacity: 0
}, {
    opacity: 1,
    duration: 1
});
tl.fromTo(".big-text", {
    opacity: 0
}, {
    opacity: 1,
    duration: 1
}, "-=1");

/*-------Olivia part ends here---------*/

/*----------Nigels part----------------------*/
//highlighted active nav bar
var currentUrl = location.href.split("/");
var navArr = document.getElementsByClassName("main")[0].getElementsByTagName("a");
var i = 0;

var currentPage = currentUrl[currentUrl.length - 1];

for (i; i < navArr.length; i++) {
    var activeNavLink = navArr[i].href.split("/");
    if (activeNavLink[activeNavLink.length - 1] == currentPage) {
        navArr[i].className = "activee";
    }
}
/*-------Nigel part ends here---------*/
