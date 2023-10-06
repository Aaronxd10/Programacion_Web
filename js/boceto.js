const prevButton = document.getElementById("prev-slide");
    const nextButton = document.getElementById("next-slide");
    const slides = document.querySelectorAll(".slide");
    let currentSlide = 0;

    // Función para mostrar el siguiente slide automáticamente
    function showNextSlide() {
      slides[currentSlide].style.display = "none";
      currentSlide = (currentSlide + 1) % slides.length;
      slides[currentSlide].style.display = "block";
    }

    // Agregar un intervalo para cambiar automáticamente el slide cada 5 segundos (5000 ms)
    const slideInterval = setInterval(showNextSlide, 5000);

    // Detener el intervalo cuando se hace clic en los botones de navegación
    prevButton.addEventListener("click", () => {
      clearInterval(slideInterval);
      showSlide(currentSlide - 1);
    });

    nextButton.addEventListener("click", () => {
      clearInterval(slideInterval);
      showSlide(currentSlide + 1);
    });

    // Función para mostrar un slide específico
    function showSlide(index) {
      slides[currentSlide].style.display = "none";
      currentSlide = (index + slides.length) % slides.length;
      slides[currentSlide].style.display = "block";
    }

    // Iniciar el carrusel mostrando el primer slide
    slides[currentSlide].style.display = "block";