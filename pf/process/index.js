// 스크롤 트리거 플러그인 활성화
gsap.registerPlugin(ScrollTrigger);

const tl1 = gsap.timeline({
  scrollTrigger: {
    trigger:".part3",
    markers:true,
   start:"top 20%",
    end:"bottom top",
    toggleActions: "restart none none none"
  },
});


tl1.from('.part3 > .circle', {
  y: -100,
  opacity:0,
  duration: .8
});



const tl2 = gsap.timeline({
  scrollTrigger: {
    trigger:".part4",
    markers:true,
   start:"top 20%",
    end:"bottom top",
    toggleActions: "restart none none none"
  },
});


tl2.from('.part4 > .part4-text', {
  x: -100,
  opacity:0,
  duration: .8
});


const tl3 = gsap.timeline({
  scrollTrigger: {
    trigger:".part4 > .about",
    markers:true,
   start:"top 20%",
    end:"bottom top",
    toggleActions: "restart none none none"
  },
});


tl3.from('.part4 .about-text', {
  x: -100,
  opacity:0,
  duration: .8
});



const tl4 = gsap.timeline({
  scrollTrigger: {
    trigger:".part4 > .port",
    markers:true,
   start:"top 20%",
    end:"bottom top",
    toggleActions: "restart none none none"
  },
});


tl3.from('.part4 .port-text', {
  x: -100,
  opacity:0,
  duration: .8
});

const tl5 = gsap.timeline({
  scrollTrigger: {
    trigger:".part4 .Ex",
    markers:true,
   start:"top 20%",
    end:"bottom top",
    toggleActions: "restart none none none"
  },
});


tl5.from('.part4 .Ex-text', {
  x: -100,
  opacity:0,
  duration: .8
});