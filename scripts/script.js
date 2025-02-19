//Lap tetejére görgetés
const scrollToTopBtn = document.getElementById('scrollToTopBtn');


window.addEventListener('scroll', () => {
    if (window.scrollY > 200) { 
        scrollToTopBtn.style.display = 'block';
    } else {
        scrollToTopBtn.style.display = 'none';
    }
});


scrollToTopBtn.addEventListener('click', () => {
    window.scrollTo({
        top: 0,
        behavior: 'smooth' 
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const hamburgerBtn = document.querySelector(".toggle-btn");
    const mobileMenu = document.querySelector(".dropdown-menu");
    const icon = hamburgerBtn.querySelector("i");
    const dropdownToggles = document.querySelectorAll(".dropdown-toggle");

    hamburgerBtn.addEventListener("click", function (event) {
        event.preventDefault();

        // Ha a menü rejtett (nem tartalmazza az "open" osztályt), akkor megjelenítjük
        if (!mobileMenu.classList.contains("open")) {
            mobileMenu.classList.add("open");
            mobileMenu.style.display = "block"; // Ez biztosítja, hogy megjelenik
        } else {
            mobileMenu.classList.remove("open");
            mobileMenu.style.display = "none"; // Bezáráskor eltűnik
        }

        // Ikon váltása (hamburger ↔ X)
        icon.classList.toggle("fa-bars");
        icon.classList.toggle("fa-times");
    });

    dropdownToggles.forEach(toggle => {
        toggle.addEventListener("click", function (event) {
            event.preventDefault(); // Megakadályozza az ugrást
            this.nextElementSibling.classList.toggle("open"); // Nyitás-zárás osztály
        });
    });
});


let slideIndex = 0;
showSlides(slideIndex);

function changeSlide(n) {
    showSlides(slideIndex += n);
}

function showSlides(n) {
    let slides = document.getElementsByClassName("slide");
    if (n >= slides.length) { slideIndex = 0 }
    if (n < 0) { slideIndex = slides.length - 1 }
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slides[slideIndex].style.display = "block";
}

// Automatikus váltás 5 másodpercenként
setInterval(() => {
    changeSlide(1);
}, 15000);
