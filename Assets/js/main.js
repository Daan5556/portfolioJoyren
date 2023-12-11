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

setInterval(updateMenuState, 1);

// script.js
document.addEventListener("DOMContentLoaded", function () {
  const items = document.querySelectorAll(".accordion-item");

  items.forEach((item) => {
    item.addEventListener("click", function () {
      this.classList.toggle("active");
    });
  });

  // Check if there's a hash in the URL
  const hash = window.location.hash.substring(1);

  if (hash) {
    const targetItem = document.getElementById(hash);
    if (targetItem) {
      targetItem.classList.add("active");
    }
  }
});
