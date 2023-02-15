window.onscroll = function () {
  toggleHeaderSticky();
  toggleActiveLink();
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

function toggleActiveLink() {
  // Get all the links with an ID that starts with 'section'
  const links = document.querySelectorAll('header nav a[href^="#"]');
  if (null === links) {
    return;
  }

  // Get the current scroll position of the window
  const currentScrollPos = window.scrollY + 100;

  // Loop through all the links
  for (let i = 0; i < links.length; i++) {
    const link = links[i];

    // Get the section that the link points to
    const section = document.querySelector(link.hash);

    // If the section is in the viewport, add an 'active' class to the link
    if (
      section.offsetTop <= currentScrollPos &&
      section.offsetTop + section.offsetHeight > currentScrollPos
    ) {
      link.classList.add("active");
    } else {
      link.classList.remove("active");
    }
  }
}

function toggleActiveFormField(ev) {
  let field = ev.target.closest("p input") || ev.target.closest("p textarea");
  if (null === field) {
    return;
  }

  field.closest("p").classList.toggle("active");
}

document.addEventListener("focusin", (ev) => {
  toggleActiveFormField(ev);
});

document.addEventListener("focusout", (ev) => {
  toggleActiveFormField(ev);
});

function handleInputFile(ev) {
  const inputFile = ev.target.closest(".js-file input");
  if (null === inputFile) {
    return;
  }

  const field = inputFile.closest(".js-file");
  const message = field.querySelector(".js-file-message");

  if (message) {
    message.innerHTML = 'Arquivo anexado: ' + inputFile.value;
  }

  field.classList.add("active");
}

document.addEventListener("change", (ev) => {
  handleInputFile(ev);
});
