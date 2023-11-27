let curr = 0;
const amount = document.querySelectorAll('.carousel-item').length;

function showSlide(index) {
  const carousel = document.querySelector('.carousel-inner');
  const slideWidth = document.querySelector('.carousel-item').clientWidth;
  const transforVal = -index * slideWidth + 'px';
  carousel.style.transform = 'translateX(' + transforVal + ')';
}

function nextSlide() {
  curr = (curr + 1) % amount;
  showSlide(curr);
}

function prevSlide() {
  curr = (curr - 1 + amount) % amount;
  showSlide(curr);
}

document.querySelector("#prev").onclick = prevSlide;
document.querySelector("#next").onclick = nextSlide;

setInterval(nextSlide, 3000);