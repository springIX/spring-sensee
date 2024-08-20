$(function () {
  /* ABOUT VALUE */
  let aboutValue = gsap.timeline({
    scrollTrigger: { 
      trigger: '.about_value',
      start: "top top",
      end: "bottom bottom",
      scrub: true,
    },
  });
  
  aboutValue
  .to('.about_value .value_tit',1,{scale:1,})
  .to('.about_value .value_cont',1.5,{clipPath:"circle(100%)",})
  .to('.about_value .value_cont',1,{className:'value_cont sceneA',})
  .to('.about_value .value_cont',1,{className:'value_cont sceneB',})
  .to('.about_value .value_cont',1,{className:'value_cont sceneC',})
  
  /* BRAND MOVIE POPUP */
  let vidPop = $('[data-view="brand_movie"]');
  vidPop.find('video').get(0).pause();
  $('[data-btn="brand_movie"]').click(function () { 
    if (vidPop.hasClass('on')) {
      vidPop.find('video').get(0).play();
    } else { 
      vidPop.find('video').get(0).pause();
    }
  });
});