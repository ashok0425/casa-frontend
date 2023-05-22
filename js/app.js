// Recenctly Viewed Slider
var myEle = document.getElementById("recentlyViewed--slider");
if (myEle) {
  new Splide("#recentlyViewed--slider", {
    gap: 30,
    perPage: 4,
    arrows: false,
    pagination: false,
    autoplay: true,
    pauseOnHover: true,
    focus: "center",
    breakpoints: {
      992: {
        perPage: 3,
        gap: 25,
      },
      768: {
        perPage: 2,
        gap: 25,
      },
      576: {
        perPage: 1,
        gap: 20,
      },
    },
  }).mount();
}

// Around Slider
var myEle = document.getElementById("aroundYou--slider");
if (myEle) {
  new Splide("#aroundYou--slider", {
    gap: 30,
    perPage: 4,
    arrows: false,
    pagination: false,
    autoplay: true,
    pauseOnHover: true,
    breakpoints: {
      992: {
        perPage: 3,
        gap: 25,
      },
      768: {
        perPage: 2,
        gap: 25,
      },
      576: {
        perPage: 1,
        gap: 20,
      },
    },
  }).mount();
}

// Featured Slider
var myEle = document.getElementById("featured--slider");
if (myEle) {
  new Splide("#featured--slider", {
    gap: 30,
    perPage: 3,
    arrows: false,
    pagination: false,
    autoplay: true,
    pauseOnHover: true,
    breakpoints: {
      992: {
        gap: 25,
      },
      768: {
        perPage: 2,
        gap: 25,
      },
      576: {
        perPage: 1,
        gap: 20,
      },
    },
  }).mount();
}

// Similar Blog Slider
var myEle = document.getElementById("blog--slider");
if (myEle) {
  new Splide("#blog--slider", {
    gap: 30,
    perPage: 3,
    arrows: false,
    pagination: false,
    autoplay: true,
    pauseOnHover: true,
    breakpoints: {
      768: {
        perPage: 2,
        gap: 25,
      },
      576: {
        perPage: 1,
        gap: 20,
      },
    },
  }).mount();
}
