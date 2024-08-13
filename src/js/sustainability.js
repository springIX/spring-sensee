document.addEventListener('DOMContentLoaded', () => {
  const glacierImg = document.querySelector('.glacier_img');
  let hasMoved = false; // 애니메이션이 이미 적용되었는지 여부를 추적

  const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
          if (entry.isIntersecting && !hasMoved) {
              glacierImg.style.transform = 'translateX(-50rem)';
              hasMoved = true; // 애니메이션이 한 번 적용되었음을 표시
              observer.unobserve(entry.target); // 요소에 대한 관찰을 중지
          }
      });
  }, { threshold: 0.4 });

  const glacierElement = document.querySelector('.sustainability_glacier');
  observer.observe(glacierElement);
});
