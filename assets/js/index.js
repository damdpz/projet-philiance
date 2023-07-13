const hamburger = document.querySelector(".hamburger");
const hamburgerContainer = document.querySelector(".hamburger-container");
const nav = document.querySelector(".nav");

hamburgerContainer.addEventListener("click", () =>{
    hamburger.classList.toggle("close")
    nav.classList.toggle("show")
});

const sections = document.querySelectorAll('.accordionSection');

sections.forEach(section => {
    section.addEventListener('click', event => {
        if(event.target != section) return;
        for(let i = 0; section.children.length > i; i++) {
            section.children[i].classList.toggle('unrolled');
        }
    })
});

