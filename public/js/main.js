let myVar;
let slideIndex = 0;

const header = document.querySelector(".header");
const footer = document.querySelector("footer");
const navToggle = document.querySelector(".nav-toggle");
const navLinks = document.querySelectorAll("#nav a");
const popUp = document.querySelector("#popUp");
const slides = document.getElementsByClassName("mySlides");
const dots = document.getElementsByClassName("dot");
const workSampleSliders = document.querySelectorAll(".work-samples-slider");

let sticky = header ? header.offsetTop : 0;
let workSampleSlidersInitialized = false;

function myFunction() {
    if (!header) {
        return;
    }

    if (window.pageYOffset >= sticky) {
        header.classList.add("sticky");
    } else {
        header.classList.remove("sticky");
    }
}

function pageLoader() {
    myVar = setTimeout(showPage, 2500);
}

function showPage() {
    const loader = document.querySelector(".loader");
    const main = document.querySelector("main");

    if (loader) {
        loader.style.display = "none";
    }

    if (main) {
        main.style.display = "block";
    }

    if (header) {
        header.classList.remove("display-none");
        sticky = header.offsetTop;
    }

    if (footer) {
        footer.classList.remove("display-none");
    }

    initializeWorkSampleSliders();
}

function setNavOpen(isOpen) {
    if (!header || !navToggle) {
        return;
    }

    header.classList.toggle("nav-open", isOpen);
    navToggle.setAttribute("aria-expanded", String(isOpen));
}

function modelFunctionClose() {
    if (popUp) {
        popUp.style.display = "none";
    }

    const heading = document.querySelector(".heading-home");
    if (heading) {
        heading.classList.add("moveFromLeft");
    }
}

function showSlides() {
    if (!slides.length) {
        return;
    }

    for (let i = 0; i < slides.length; i += 1) {
        slides[i].style.display = "none";
    }

    slideIndex += 1;
    if (slideIndex > slides.length) {
        slideIndex = 1;
    }

    for (let i = 0; i < dots.length; i += 1) {
        dots[i].className = dots[i].className.replace(" active", "");
    }

    slides[slideIndex - 1].style.display = "block";
    if (dots[slideIndex - 1]) {
        dots[slideIndex - 1].className += " active";
    }

    setTimeout(showSlides, 2000);
}

function moveSlides(sliderElement, direction) {
    if (!sliderElement) {
        return;
    }

    const slidesContainer = sliderElement.querySelector(".slides-container");
    const slide = sliderElement.querySelector(".slide");

    if (!slidesContainer || !slide) {
        return;
    }

    const slideStyles = window.getComputedStyle(slide);
    const slideMarginRight = parseFloat(slideStyles.marginRight) || 0;
    const slideMarginLeft = parseFloat(slideStyles.marginLeft) || 0;
    const slideWidth = slide.getBoundingClientRect().width + slideMarginLeft + slideMarginRight;
    const maxScrollLeft = slidesContainer.scrollWidth - slidesContainer.clientWidth;

    if (direction > 0 && slidesContainer.scrollLeft + slideWidth >= maxScrollLeft) {
        slidesContainer.scrollLeft = 0;
        return;
    }

    if (direction < 0 && slidesContainer.scrollLeft - slideWidth <= 0) {
        slidesContainer.scrollLeft = maxScrollLeft;
        return;
    }

    slidesContainer.scrollLeft += slideWidth * direction;
}

function initializeWorkSampleSliders() {
    if (workSampleSlidersInitialized) {
        return;
    }

    workSampleSliders.forEach((sliderElement, index) => {
        const sliderSection = sliderElement.previousElementSibling;
        const prevButton = sliderSection ? sliderSection.querySelector(".slide-arrow-prev") : null;
        const nextButton = sliderSection ? sliderSection.querySelector(".slide-arrow-next") : null;
        const slidesContainer = sliderElement.querySelector(".slides-container");
        const autoDirection = index === 0 ? 1 : -1;
        let autoSlideInterval;

        if (prevButton) {
            prevButton.addEventListener("click", () => moveSlides(sliderElement, -1));
        }

        if (nextButton) {
            nextButton.addEventListener("click", () => moveSlides(sliderElement, 1));
        }

        if (!slidesContainer) {
            return;
        }

        if (autoDirection < 0) {
            slidesContainer.scrollLeft = slidesContainer.scrollWidth - slidesContainer.clientWidth;
        }

        const startAutoSlide = () => {
            window.clearInterval(autoSlideInterval);
            autoSlideInterval = window.setInterval(() => {
                moveSlides(sliderElement, autoDirection);
            }, 3000);
        };

        const stopAutoSlide = () => {
            window.clearInterval(autoSlideInterval);
        };

        sliderElement.addEventListener("mouseenter", stopAutoSlide);
        sliderElement.addEventListener("mouseleave", startAutoSlide);
        sliderElement.addEventListener("focusin", stopAutoSlide);
        sliderElement.addEventListener("focusout", startAutoSlide);

        startAutoSlide();
    });

    workSampleSlidersInitialized = true;
}

if (navToggle) {
    navToggle.addEventListener("click", () => {
        const isOpen = !header.classList.contains("nav-open");
        setNavOpen(isOpen);
    });
}

navLinks.forEach((link) => {
    link.addEventListener("click", () => {
        if (window.innerWidth <= 1007) {
            setNavOpen(false);
        }
    });
});

window.addEventListener("resize", () => {
    if (window.innerWidth > 1007) {
        setNavOpen(false);
    }

    if (header) {
        sticky = header.offsetTop;
    }
});

window.addEventListener("scroll", myFunction);
showSlides();
