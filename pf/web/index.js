
gsap.registerPlugin(ScrollTrigger);

const tl = gsap.timeline({
  scrollTrigger: {
    trigger:".part2",
    markers:false,
   start:"top center",
    end:"bottom top",
    toggleActions: "restart none none none"
  },
});



tl.from('.text-box > img:first-child', {
  y: -100,
  opacity:0,
  duration: .8
});

tl.from('.text-box > img:nth-child(2)', {
  y:-100,
  opacity:0,
  duration: 1
});



const tl6 = gsap.timeline({
  scrollTrigger: {
    trigger:".part6",
    markers:false,
   start:"top center",
    end:"bottom top",
    toggleActions: "restart none none none"
  },
});


tl6.from('.part6-text__box', {
  y:-100,
  opacity:0,
  duration: .8
});



const tl7 = gsap.timeline({
  scrollTrigger: {
    trigger:".part7",
    markers:false,
   start:"top center",
    end:"bottom top",
    toggleActions: "restart none none none"
  },
});


tl7.from('.part7-pic__box', {
  y:-100,
  opacity:0,
  duration: .8
});


const tl8 = gsap.timeline({
  scrollTrigger: {
    trigger:".part8",
    markers:false,
   start:"top bottom",
    end:"bottom bottom",
    toggleActions: "restart none none none"
  },
});


tl8.from('.part8-text > img ', {
  x:-200,
  opacity:0,
  duration: .8
});

