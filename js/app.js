AOS.init({
    delay:200,
});

window.addEventListener('load',() => {
    const options = {
        right:0,
        width:0,
        duration:2,
    }
    
    gsap.to('.preloader',options);
    gsap.to('.loader',{
        delay:1,
        opacity:0,
        display:'none',
    })
    gsap.to('.loaderimg',{
        delay:1,
        opacity:0,
        display:'none',
    })
});
