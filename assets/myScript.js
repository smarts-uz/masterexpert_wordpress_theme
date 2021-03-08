var swiper = new Swiper('.swiper-container', {
    slidesPerView: 1,
    centeredSlides: true,
    spaceBetween: 30,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
  });

  var swiper = new Swiper('.swiper-container2', {
    lazy: {
      loadPrevNext: true,
    },
    cubeEffect: {
      slideShadows: true,
    },
    scrollbar: {
      el: '.swiper-scrollbar',
      hide: true,
    },
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
  });

  const allLinks = document.querySelectorAll('a');
  allLinks.forEach(item => {
   var hrefValue = item.getAttribute('href');
    if(hrefValue == '#') {
      item.preventDefault()
    }
  })