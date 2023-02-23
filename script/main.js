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
  console.log(navBar)
  if (distanceFromTop > 100) {
    // navBar.style.position = 'absolute';
    navBar.classList.add('fixed-top');
  }
}
