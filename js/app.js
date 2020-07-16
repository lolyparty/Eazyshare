AOS.init({
    // offset:0,
    // duration: 3000,
    delay:500,
});

// scrollOut();


window.addEventListener('load',() => {
    const options = {
        // height:0,
        // stagger:.3,
        right:0,
        width:0,
        duration:1.5,
    }
    
    gsap.to('.preloader',options);
})


