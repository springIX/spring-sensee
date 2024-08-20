document.addEventListener('DOMContentLoaded', () => {
  gsap.registerPlugin(ScrollTrigger);

  ScrollTrigger.matchMedia({
    // Default animation for screens wider than 750px
    "(min-width: 751px)": function() {
      const tl = gsap.timeline({
        scrollTrigger: {
          trigger: ".sustainability_inner",
          start: "top top",
          end: "+=700%",
          scrub: true,
          pin: true,
          markers: false,
        }
      });

      tl.to("#content1", 1,{ opacity: 0, duration: 2 })
        .to("#content2", 1,{ opacity: 1, duration: 2 },)
        .to("#content2", 1,{ 
          opacity: 0, 
          scale: 0.4,
          duration: 2 
        })
        .to("#content3", 1,{ opacity: 1, duration: 2 }, "-=0.5")
        .to("#content4", 1,{ opacity: 1, duration: 2 }, "+=0.5")
        .to("#content3", 1,{ opacity: 0, duration: 2 })
        .to("#esg_img_wrap", {
          left: "50%",
          y: "350rem",
          scale: 10,
          duration: 2
        })
        .to("#leaf_img_01", 1,{ opacity: 1, duration: 2 }, "+=0.5")
        .to("#leaf_img_02", 1,{ opacity: 1, duration: 2 }, "+=0.5")
        .to("#leaf_img_03", 1,{ opacity: 1, duration: 2 }, "+=0.5")
        .to("#leaf_img_04", 1,{ opacity: 1, duration: 2 }, "+=0.5")
        .to("#leaf_img_05", 1,{ opacity: 1, duration: 1 }, "+=1")
        .to("#leaf_img_06", 1,{ opacity: 1, duration: 1 }, "+=1")
        .to("#contents.sustainability_container, .sustainability_inner", 1,{ backgroundColor:"#000" }, "group1")
        .to("#esg_img_wrap", 10,{ opacity: .4,}, "group1")
        .to(".sustainability_leaf_img", 10,{ opacity: 0,}, "group1")
        .to(".sustainability_leaf_img", 10,{ opacity: 0,}, "group1");


      const tl1 = gsap.timeline({
        scrollTrigger: {
          trigger: ".sustainability_info",
          start: "top bottom",
          end: "+=20%",
          scrub: true,
        }
      });

      tl1.to("#contents.sustainability_container, .sustainability_inner",{ backgroundColor:"#fff" },"group1")
          .to("#esg_img_wrap",{ opacity: 1,}, "group1")
    },

    // Animation for screens 750px wide or less
    "(max-width: 750px)": function() {
      const tl = gsap.timeline({
        scrollTrigger: {
          trigger: ".sustainability_inner",
          start: "top top",
          end: "+=200%", // Adjusted length for smaller screens
          scrub: true,
          pin: true,
          markers: false,
        }
      });

      // Different or simplified animations for smaller screens
      tl.to("#content1", { opacity: 0, duration: 1 })
        .to("#content2", { opacity: 1, duration: 1 }, "-=0.5")
        .to("#content2", { 
          opacity: 0, 
          scale: 0.6, // Smaller scaling for smaller screens
          duration: 1 
        })
        .to("#content3", { opacity: 1, duration: 1 }, "-=0.5")
        .to("#content4", { opacity: 1, duration: 1 }, "+=0.5")
        .to("#content3", { opacity: 0, duration: 1 })
        .to("#esg_img_wrap", {
          left: "50%",
          scale: 5, // Smaller scaling for smaller screens
          duration: 1
        })
        .to("#leaf_img_01", { opacity: 1, duration: 1 }, "+=0.5")
        .to("#leaf_img_02", { opacity: 1, duration: 1 }, "+=0.5")
        .to("#leaf_img_03", { opacity: 1, duration: 1 }, "+=0.5")
        .to("#leaf_img_04", { opacity: 1, duration: 1 }, "+=0.5")
        .to("#leaf_img_05", { opacity: 1, duration: 0.5 }, "+=0.5")
        .to("#leaf_img_06", { opacity: 1, duration: 0.5 }, "+=0.5");
    }
  });
});
