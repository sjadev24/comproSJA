'use strict';

/**
 * Easy selector helper function
 */
const select = (el, all = false) => {
  el = el.trim();
  if (all) {
    return [...document.querySelectorAll(el)];
  } else {
    return document.querySelector(el);
  }
};

/**
 * Easy event listener function
 */
const on = (type, el, listener, all = false) => {
  const selectEl = select(el, all);
  if (selectEl) {
    if (all) {
      selectEl.forEach((e) => e.addEventListener(type, listener));
    } else {
      selectEl.addEventListener(type, listener);
    }
  }
};

/**
 * Init swipers
 */
const heroSwiper = select('.hero-swiper');
const partnersSwiper = select('.partners-swiper');
const customersSwiper = select('.customers-swiper');
const instafeedSwiper = select('.instafeed-swiper');

if (heroSwiper) {
  new Swiper('.hero-swiper', {
    speed: 1300,
    parallax: true,
    autoplay: false,
    loop: true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    on: {
      init: function () {
        const self = this;
        for (let i = 0; i < self.slides.length; i++) {
          self.slides[i]
            .querySelector('.hero-slide-img')
            .setAttribute('data-swiper-parallax', 0.75 * self.width);
        }
      },
      resize: function () {
        this.update();
      },
    },
  });
}

if (partnersSwiper) {
  new Swiper('.partners-swiper', {
    speed: 800,
    autoplay: {
      delay: 2000,
    },
    breakpoints: {
      0: {
        slidesPerView: 3,
        slidesPerGroup: 1,
        spaceBetween: 10,
      },
      480: {
        slidesPerView: 4,
        slidesPerGroup: 1,
        spaceBetween: 12,
      },
      768: {
        slidesPerView: 5,
        slidesPerGroup: 1,
        spaceBetween: 20,
      },
      992: {
        slidesPerView: 6,
        slidesPerGroup: 1,
        spaceBetween: 32,
      },
      1200: {
        slidesPerView: 6,
        slidesPerGroup: 1,
        spaceBetween: 40,
      },
    },
  });
}

if (customersSwiper) {
  new Swiper('.customers-swiper', {
    speed: 1000,
    autoplay: {
      delay: 2000,
    },
    breakpoints: {
      0: {
        slidesPerView: 3,
        slidesPerGroup: 1,
        spaceBetween: 10,
      },
      480: {
        slidesPerView: 4,
        slidesPerGroup: 1,
        spaceBetween: 10,
      },
      768: {
        slidesPerView: 5,
        slidesPerGroup: 1,
        spaceBetween: 10,
      },
      992: {
        slidesPerView: 6,
        slidesPerGroup: 1,
        spaceBetween: 24,
      },
    },
  });
}

if (instafeedSwiper) {
  new Swiper('.instafeed-swiper', {
    speed: 600,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    breakpoints: {
      0: {
        slidesPerView: 3,
        slidesPerGroup: 1,
        spaceBetween: 12,
      },
      768: {
        slidesPerView: 4,
        slidesPerGroup: 1,
        spaceBetween: 16,
      },
      992: {
        slidesPerView: 5,
        slidesPerGroup: 1,
        spaceBetween: 24,
      },
    },
  });
}

/**
 * Init isotope and filter
 */
window.addEventListener('load', () => {
  const processGrid = select('.process-grid');

  if (processGrid) {
    const processIsotope = new Isotope(processGrid, {
      itemSelector: '.process-item',
    });
    const processFilterButtons = select(
      '.process-filters-btn-group button',
      true
    );

    on(
      'click',
      '.process-filters-btn-group button',
      function (e) {
        e.preventDefault();

        processFilterButtons.forEach(function (el) {
          el.classList.remove('active');
        });
        this.classList.add('active');

        processIsotope.arrange({
          filter: this.getAttribute('data-filter'),
        });

        processIsotope.on('arrangeComplete', function () {
          AOS.refresh();
        });
      },
      true
    );
  }
});

/**
 * Init lightboxes
 */
const lightboxSelectors = [
  'intro-lightbox',
  'certification-lightbox',
  'product-lightbox',
  'process-lightbox',
  'facility-lightbox',
];

lightboxSelectors.forEach((item) => {
  const el = '.' + item;

  if (select(el)) {
    GLightbox({
      selector: el,
    });
  }
});

/**
 * Animation on scroll
 */
window.addEventListener('load', () => {
  AOS.init({
    duration: 1000,
    easing: 'ease-in-out',
    once: true,
  });
});

/**
 * Animation on scroll
 */
const tabLinkEls = document.querySelectorAll('.nav-link');

tabLinkEls.forEach(function (el) {
  el.addEventListener('click', function (event) {
    const targetTabId = event.target
      .getAttribute('data-bs-target')
      .substring(1)
      .replace('-content', '');

    const currentUrl = new URL(window.location);
    currentUrl.searchParams.set('tab', targetTabId);
    window.history.pushState({}, '', currentUrl);
  });
});
