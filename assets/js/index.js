window.onload = (event) => {
    let sections = document.querySelectorAll('.accordion>.section');

    sections.forEach(section => {
        // console.log(sections)
        section.addEventListener('click', event => {
            event.stopPropagation()
            // console.log(this)
            console.log("click")
            let reveal = section.querySelectorAll(".reveal li");
            reveal.forEach((el)=> {
                el.classList.toggle('unrolled');
            })
        }, false)
    });
    


    let hamburger = document.querySelector(".hamburger");
    let hamburgerContainer = document.querySelector(".hamburger-container");
    let nav = document.querySelector(".nav");
    
    hamburgerContainer.addEventListener("click", () =>{
        hamburger.classList.toggle("close")
        nav.classList.toggle("show")
    });
};