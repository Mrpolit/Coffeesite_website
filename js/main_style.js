gsap.registerPlugin(ScrollTrigger);
  gsap.to(".box", {
    rotate : -300,
    duration : 1,
    ScrollTrigger:{
        horizontal : true,
        triger:".box",
        start : "top center",
        markers : true,
        toggeleActions:"play none none reverse",
    }
  });