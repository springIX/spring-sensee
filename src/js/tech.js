$(function () {

  gsap.registerPlugin(ScrollTrigger);

  gsap.utils.toArray(".existing_value strong").forEach(box => {
    var tler =  gsap.from(box, {
      textContent: "0",
      duration: 1,
      ease: "power1.inOut",
      modifiers: {
        textContent: value => formatNumber(value, 0)
      },
      scrollTrigger: {
        trigger: box,
        start: "top bottom",
        end: "+=100",
        toggleActions: "play none none reverse",
      }
    }); })
  
  function formatNumber(value, decimals) {
    let s = (+value).toLocaleString('en-US').split(".");
    return decimals ? s[0] + "." + ((s[1] || "") + "00000000").substr(0, decimals) : s[0];
  }

  let tech_together = gsap.timeline({
    scrollTrigger: { 
      trigger: '.tech_together_visual',
      start: "top 20%",
      end: "200%",
      toggleClass:{targets:'.tech_together',className:'on'},
      scrub: true,
    },
  });

  // let color_arr = ['red','blue','green','yellow'];
  // for (var i = 0; i <= 24; i++){
  //   let color_rand = Math.floor(Math.random() * color_arr.length );
  //   let size_rand = Math.floor(Math.random() * 32) + 16;
  //   let x_rand = Math.floor(Math.random() * 100) + 1;
  //   let y_rand = Math.floor(Math.random() * 100) + 1;
  //   $(".tech_together_visual").append(`<i class="ball ${color_arr[color_rand]}" style="width: ${size_rand}rem; height: ${size_rand}rem; left: ${x_rand}%; top: ${y_rand}%;"></i>`);
	// }
});