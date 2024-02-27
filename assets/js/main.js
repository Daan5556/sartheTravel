const settingsButton = document.getElementById("settingsbutton");
const settingsWindow = document.getElementById("settings");
const settingsCloseButton = document.getElementById("settingsCloseButton");

const sponsor1 = document.getElementById("sponsor1");
const sponsor2 = document.getElementById("sponsor2");
const sponsor3 = document.getElementById("sponsor3");

settingsButton.addEventListener("click", () => {
  settingsWindow.classList.add("active");
});

settingsCloseButton.addEventListener("click", () => {
  settingsWindow.classList.remove("active");
});

// darkmode

const darkMode = document.querySelector(".dark-mode");
let isDarkMode = localStorage.getItem("darkMode");
console.log("fetch local dark:" + isDarkMode);

if (isDarkMode === "true") {
  document.body.classList.add("dark-mode-variables");
  darkMode.querySelector("span:nth-child(1)").classList.remove("active");
  darkMode.querySelector("span:nth-child(2)").classList.add("active");
}

darkMode.addEventListener("click", () => {
  // Toggle dark mode class on the body
  document.body.classList.toggle("dark-mode-variables");

  // Toggle active class on dark mode icons
  darkMode.querySelector("span:nth-child(1)").classList.toggle("active");
  darkMode.querySelector("span:nth-child(2)").classList.toggle("active");

  const isDarkModeNow = document.body.classList.contains("dark-mode-variables");
  localStorage.setItem("darkMode", isDarkModeNow.toString());

  if (isDarkModeNow) {
    sponsor1.src = "assets/images/sponsors/mario-dark.png";
    sponsor2.src = "assets/images/sponsors/shot-dark.png";
    sponsor3.src = "assets/images/sponsors/yoshi-dark.png";
  } else {
    sponsor1.src = "assets/images/sponsors/mario.png";
    sponsor2.src = "assets/images/sponsors/shot.png";
    sponsor3.src = "assets/images/sponsors/yoshi.png";
  }
});

const MENU_BUTTON = document.querySelector(".hamburger");
const MENU = document.querySelector(".nav-menu");

MENU_BUTTON.addEventListener("click", () => {
  MENU_BUTTON.classList.toggle("active");
  MENU.classList.toggle("active");
});
