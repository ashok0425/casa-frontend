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
  }).mount();
}
