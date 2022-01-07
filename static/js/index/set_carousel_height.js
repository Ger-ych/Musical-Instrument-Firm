// getting the necessary objects

let top_header = document.querySelector(".top-header");
let bot_header = document.querySelector(".bot-header");
let carousel = document.querySelector(".carousel");


function set_carousel_height() {
    // getting header height
    let header_height = top_header.getBoundingClientRect().height + bot_header.getBoundingClientRect().height;
    
    // getting necessary carousel height
    let carousel_height = window.innerHeight - header_height;
    carousel.style.height = carousel_height + "px";
}


set_carousel_height();

// create event listener
window.addEventListener("resize", set_carousel_height);
