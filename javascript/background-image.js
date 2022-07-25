const images = ["auditorium.jpg", "left-garden.jpg", "vpimsr-front5.jpg", "left-garden2.jpg", "memorial1.jpg", "parking2.jpg", "vpimsr-front.jpg"];

const main = document.querySelector('main');

let imagePointer = 0;

function changeBackground() {
  main.style.backgroundImage = `linear-gradient(rgba(4, 9, 30, 0.7), rgba(4, 9, 30, 0.7)), url(src/college/${images[imagePointer]})`

  imagePointer = (imagePointer + 1) % images.length;
}

window.addEventListener("load", function () {
  setInterval(changeBackground, 5000);
}); 