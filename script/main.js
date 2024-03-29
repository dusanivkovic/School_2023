// AOS.init();
const tabs = document.querySelector(".wrapper");
const tabButton = document.querySelectorAll(".tab-button");
const contents = document.querySelectorAll(".content");

window.onscroll = e => {
  const navBar = document.querySelector('nav');
  const distanceFromTop = Math.abs(
    document.body.getBoundingClientRect().top
  );
  const vH = window.innerHeight;
  if (distanceFromTop > 40) {
    navBar.classList.add('navbar-scroll');
  }else {
    navBar.classList.remove('navbar-scroll');
  }
}

const heroHeading = 'Lorem ipsum dolor sit amet.';
var h1 = $('h1');
var i = 0;
function typingHeding() {
  if (i < heroHeading.length) {
    h1.append(heroHeading[i]);
    i++;
    setTimeout(typingHeding, 200);
  }
};

$(typingHeding);

//Counter
$('.counter').counterUp({
  delay: 10,
  time: 2000
});
$('.counter').addClass('animated fadeInDownBig');
$('h3').addClass('animated fadeIn');
//Owl Carousel
$(document).ready(function(){
  var Lowl=$("#owl-demo");
  Lowl.owlCarousel({
      items: 4, //10 items above 1000px browser width
      itemsDesktop: [1000, 2], //5 items between 1000px and 901px
      itemsDesktopSmall: [991, 2], // 3 items betweem 900px and 601px
      itemsTablet: [600, 2], //2 items between 600 and 0;
      //  itemsMobile : false , // itemsMobile disabled - inherit from itemsTablet option
      dots: false, 
      stagePadding: Number, //stagePadding: 50,
      loop: false, 
      margin: 30, 
      rtl: true, 
      pagination: false,
      nav: true,
      navText: ["<div class='nav-button owl-prev'>‹</div>", "<div class='nav-button owl-next'>›</div>"],
      autoplay:true,
      autoplayTimeout:1000,
      autoplayHoverPause:true,
      responsive:{
        0:{
            items:2
        },
        576:{
            items:3
        },
        992:{
            items:4
        }
    }
  })
 
  $(".next").click(function () {
      Lowl.trigger('owl.next');
  });
 
  $(".prev").click(function () {
      Lowl.trigger('owl.prev');
  });
  Lowl.trigger('owl.play', false);
  
  $('.owl-one').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        576:{
            items:2
        },
        992:{
            items:3
        }
    }
  })
});
AOS.init();
