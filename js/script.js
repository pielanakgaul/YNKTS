const scroll = document.querySelector(".scroll-to-top");

window.addEventListener("scroll", () => {
    if(window.pageYOffset > 100){
        scroll.classList.add("active");
    }else{
        scroll.classList.remove("active");
    }
})
