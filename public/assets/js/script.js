AOS.init();



const pre_carremento = document.querySelector(".pre-carregamento");

function preCarregamento(){
    pre_carremento.style.opacity = "0";
    pre_carremento.style.display = "none";
    setTimeout(() => {
        pre_carremento.style.display = "none";
    }, 5000);
}


var swiper = new Swiper(".mySwiper", {
    spaceBetween: 30,
    autoplay:true,
    loop:true,
    effect: "fade",
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });




  
const menuToggle = document.querySelector('.menu-toggle');
const navLinks = document.querySelector('.nav-links');


menuToggle.addEventListener('click', () => {
    navLinks.classList.toggle('show'); 
});





// Script para ativar mudanças no floatDiv após rolar 30 pixels
document.addEventListener("scroll", () => {
    const floatDiv = document.getElementById("floatDiv");
    if (window.scrollY > 150) {
        floatDiv.style.opacity = "0";
        floatDiv.style.visibility = "hidden";
    } else {
        floatDiv.style.opacity = "1";
        floatDiv.style.visibility = "visible";
    }
});





let counters = [
    { element: document.getElementById('counter1'), isCounting: false, count: 0, target: 10 },   
    { element: document.getElementById('counter2'), isCounting: false, count: 0, target: 4 },   
 
];

function startCounting(counter) {
    counter.count = 0;
    counter.element.textContent = counter.count;
    counter.isCounting = true;

    let interval = setInterval(function () {
        if (counter.count < counter.target) {
            counter.count++;
            counter.element.textContent = counter.count;
        } else {
            clearInterval(interval);
            counter.isCounting = false; 
        }
    }, 80); 
}

window.addEventListener('scroll', function () {
    counters.forEach(function(counter) {
        let counterPosition = counter.element.getBoundingClientRect().top;
        let screenPosition = window.innerHeight;

        if (counterPosition < screenPosition && !counter.isCounting) {
            startCounting(counter);
        }
    });
});

