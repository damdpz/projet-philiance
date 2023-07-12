const hamburger = document.querySelector(".hamburger");
const hamburgerContainer = document.querySelector(".hamburger-container");
const nav = document.querySelector(".nav");

hamburgerContainer.addEventListener("click", () =>{
    hamburger.classList.toggle("close")
    nav.classList.toggle("show")
});

const sections = document.querySelectorAll('.accordionSection');

sections.forEach(accordionSection => {
    accordionSection.addEventListener('click', event => {
        if(event.target != accordionSection) return;
        for(let i = 0; accordionSection.children.length > i; i++) {
            accordionSection.children[i].classList.toggle('unrolled');
        }
    })
});

