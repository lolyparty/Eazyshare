AOS.init({
    delay:250,
});

window.addEventListener('load',() => {
    const options = {
        // height:0,
        // stagger:.3,
        right:0,
        width:0,
        duration:2,
    }
    
    gsap.to('.preloader',options);
});
