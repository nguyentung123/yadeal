import  { contextFadeIn, contextInit } from './utils';

export default class Sensor {
    /* ===================================
     *  CONSTRUCTOR
     * =================================== */
    constructor(){
        this.$context = $('.g5-smart-sensor-section');
        this.$phoneImg = this.$context.find('.phone-img-holder img');

        this.$bikeSetting = this.$context.find('.feature-block.bike-setting');
        this.$batteryStatus = this.$context.find('.feature-block.battery-status');
        this.$travelLog = this.$context.find('.feature-block.travel-log');

        this.allowIndicate = true;

        this.bindEvents();
    }


    /* ===================================
     *  EVENTS
     * =================================== */
    bindEvents(){
        this.DoParticleEffect();
        this.SetupSection();

        g5Listener.on('smart-sensor-anim', () => {
            contextFadeIn(this.$context, () => {
                if(window.innerWidth > 768){
                    TweenMax.staggerTo(
                        [ this.$bikeSetting, this.$batteryStatus, this.$travelLog],
                        0.5,
                        {opacity: 1, scale: 1, delay: 0.05},
                        0.2,
                        ()=>{
                            this.SetupShowInformation();
                        }
                    )
                }
            }, [this.$phoneImg]);

            this.SetupShowInformation();
        })
    }



    /* ===================================
     *  METHODS
     * =================================== */
    SetupSection() {
        $('.feature-block.bike-setting').addClass('show-content');
        TweenMax.set(this.$phoneImg, {y: 40});
        contextInit(this.$context);
        if(window.innerWidth > 768){
            TweenMax.set(this.$batteryStatus, {transformOrigin: '50% 300%', opacity: 0, scale: 0.25});
            TweenMax.set(this.$bikeSetting, {transformOrigin: '200% 250%', opacity: 0, scale: 0.25});
            TweenMax.set(this.$travelLog, {transformOrigin: '-120% 250%', opacity: 0, scale: 0.25});
        }
    }

    DoParticleEffect(){
        particlesJS('particle-bg-holder',
            {
                "particles": {
                    "number": {
                        "value": 35,
                        "density": {
                            "enable": true,
                            "value_area": 800
                        }
                    },
                    "color": {
                        "value": "#c0c6c8"
                    },
                    "shape": {
                        "type": "circle",
                        "stroke": {
                            "width": 0,
                            "color": "#000000"
                        },
                        "polygon": {
                            "nb_sides": 3
                        },
                        "image": {
                            "src": "img/github.svg",
                            "width": 100,
                            "height": 100
                        }
                    },
                    "opacity": {
                        "value": 0.5,
                        "random": false,
                        "anim": {
                            "enable": false,
                            "speed": 1,
                            "opacity_min": 0.1,
                            "sync": false
                        }
                    },
                    "size": {
                        "value": 3,
                        "random": false,
                        "anim": {
                            "enable": false,
                            "speed": 40,
                            "size_min": 0.1,
                            "sync": false
                        }
                    },
                    "line_linked": {
                        "enable": true,
                        "distance": 208,
                        "color": "#c0c6c8",
                        "opacity": 0.42490419612936353,
                        "width": 1.5
                    },
                    "move": {
                        "enable": true,
                        "speed": 6,
                        "direction": "none",
                        "random": false,
                        "straight": false,
                        "out_mode": "out",
                        "bounce": false,
                        "attract": {
                            "enable": false,
                            "rotateX": 600,
                            "rotateY": 1200
                        }
                    }
                },
                "interactivity": {
                    "detect_on": "canvas",
                    "events": {
                        "onhover": {
                            "enable": false,
                            "mode": "repulse"
                        },
                        "onclick": {
                            "enable": false,
                            "mode": "push"
                        },
                        "resize": true
                    },
                    "modes": {
                        "grab": {
                            "distance": 400,
                            "line_linked": {
                                "opacity": 1
                            }
                        },
                        "bubble": {
                            "distance": 400,
                            "size": 40,
                            "duration": 2,
                            "opacity": 8,
                            "speed": 3
                        },
                        "repulse": {
                            "distance": 200,
                            "duration": 0.4
                        },
                        "push": {
                            "particles_nb": 4
                        },
                        "remove": {
                            "particles_nb": 2
                        }
                    }
                },
                "retina_detect": true
            },
            function() {
                console.log('callback - particles.js config loaded');
            });
    }

    SetupShowInformation(){
        $('.feature-block').on('mouseover', (e) => {
            let parent = $(e.target).parents('.feature-block');
            $('.feature-block.show-content').removeClass('show-content');
            parent.addClass('show-content');
        });
    }
}