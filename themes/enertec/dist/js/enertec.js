// When the user scrolls the page, execute toggleHeaderSticky
window.onscroll = function () {
  toggleHeaderSticky();
};

function toggleHeaderSticky() {
  const header = document.querySelector("#header");
  let sticky = header.offsetTop;

  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
