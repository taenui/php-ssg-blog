// 스크롤 트리거 플러그인 활성화
gsap.registerPlugin(ScrollTrigger);

const tl1 = gsap.timeline({
  scrollTrigger: {
    trigger:".part1",
    markers:false,
   start:"top 50%",
    end:"bottom top",
    toggleActions: "restart none none none"
  },
});