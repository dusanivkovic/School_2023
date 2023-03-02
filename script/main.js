const tabs = document.querySelector(".wrapper");
const tabButton = document.querySelectorAll(".tab-button");
const contents = document.querySelectorAll(".content");

tabs.onclick = e => {
  const id = e.target.dataset.id;
  console.log(id)
  if (id) {
    tabButton.forEach(btn => {
      btn.classList.remove("active");
    });
    e.target.classList.add("active");

    contents.forEach(content => {
      content.classList.remove("active");
    });
    const element = document.getElementById(id);
    element.classList.add("active");
  }
}

window.onscroll = e => {
  const navBar = document.querySelector('nav');
  const distanceFromTop = Math.abs(
    document.body.getBoundingClientRect().top
  );
  const vH = window.innerHeight;
  console.log(vH, distanceFromTop, this.scrollY)
  if (distanceFromTop > 40) {
    navBar.classList.add('navbar-scroll');
  }else {
    navBar.classList.remove('navbar-scroll');
  }
  // if (distanceFromTop > vH) {
  //   navBar.classList.add('fixed-top');
  // }else {
  //   navBar.classList.remove('fixed-top');
  // }
}
const heroHeading = 'Lorem ipsum dolor sit amet.';
const h1 = document.querySelector('h1');
let i = 0;
const typingHeding = () => {
  if (i < heroHeading.length) {
    h1.innerHTML += heroHeading[i]
    i++;
    setTimeout(typingHeding, 100);
  }
}
typingHeding();
//Counter
$('.counter').counterUp({
  delay: 10,
  time: 2000
});
$('.counter').addClass('animated fadeInDownBig');
$('h3').addClass('animated fadeIn');
//Owl Carousel
$(document).ready(function(){
  $(".owl-carousel").owlCarousel();
});
$('.owl-carousel').owlCarousel({
  loop:true,
  margin:10,
  nav:true,
  responsive:{
      0:{
          items:1
      },
      600:{
          items:2
      },
      1000:{
          items:3
      }
  }
})
