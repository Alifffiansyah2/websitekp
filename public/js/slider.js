let slideIndex = 0;
showSlides();

function showSlides() {
  const slides = document.getElementsByClassName("slider");
  for (let i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) { slideIndex = 1; }
  slides[slideIndex - 1].style.display = "block";
  setTimeout(showSlides, 4000); // Ganti tiap 4 detik
}
