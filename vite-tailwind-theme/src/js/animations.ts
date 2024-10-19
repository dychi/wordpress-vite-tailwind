import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

// wait until DOM is ready
document.addEventListener("DOMContentLoaded", function (_event: Event) {

    console.log("DOM loaded");
    gsap.registerPlugin(ScrollTrigger);

    //wait until images, links, fonts, stylesheets, and js is loaded
    window.addEventListener("load", function (_e: Event) {

        //custom GSAP code goes here
        // This tween will rotate an element with a class of .my-element
        gsap.fromTo('.scroll-trigger',
            {
                x: 0,
                y: 0
            },
            {
                scrollTrigger: {
                    trigger: '.scroll-trigger',
                    start: 'top center',
                    end: 'bottom center',
                    markers: true
                },
                duration: 2,
                ease: 'bounce.out'
            })

        console.log("window loaded");
    }, false);

});
