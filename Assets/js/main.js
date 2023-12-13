const MENU_BUTTON = document.querySelector(".hamburger");
const MENU = document.querySelector("nav");

// Function to check if the page is scrolled to the top
function isScrolledToTop() {
  return window.scrollY === 0;
}

// Function to check if button was pressed
let buttonPressed = false;

MENU_BUTTON.addEventListener("click", () => {
  buttonPressed = !buttonPressed; // Toggle the state
  updateMenuState();
});

// Function to update menu state based on conditions
function updateMenuState() {
  if (isScrolledToTop() && buttonPressed) {
    MENU.classList.add("is-active");
    MENU_BUTTON.classList.add("is-active");
  } else {
    MENU.classList.remove("is-active");
    MENU_BUTTON.classList.remove("is-active");
  }
}

function changeImage() {
  timeoutId = setTimeout(function () {
    document.getElementById("logo").src = "Assets/images/LogoDistorted.png";
  }, 5000);
}

function restoreImage() {
  clearTimeout(timeoutId);
}

setInterval(updateMenuState, 1);
