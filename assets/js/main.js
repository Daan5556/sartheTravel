const settingsButton = document.getElementById("settingsbutton");
const settingsWindow = document.getElementById("settings");
const settingsCloseButton = document.getElementById("settingsCloseButton");

settingsButton.addEventListener("click", () => {
  settingsWindow.classList.add("active");
});

settingsCloseButton.addEventListener("click", () => {
  settingsWindow.classList.remove("active");
});

// darkmode

const darkMode = document.querySelector(".dark-mode");
let isDarkMode = localStorage.getItem("darkMode");

if (isDarkMode === "true") {
  document.body.classList.add("dark-mode-variables");
  darkMode.querySelector("span:nth-child(1)").classList.remove("active");
  darkMode.querySelector("span:nth-child(2)").classList.add("active");
}

let isDarkModeNow;

darkMode.addEventListener("click", () => {
  // Toggle dark mode class on the body
  document.body.classList.toggle("dark-mode-variables");

  // Toggle active class on dark mode icons
  darkMode.querySelector("span:nth-child(1)").classList.toggle("active");
  darkMode.querySelector("span:nth-child(2)").classList.toggle("active");

  isDarkModeNow = document.body.classList.contains("dark-mode-variables");
  localStorage.setItem("darkMode", isDarkModeNow.toString());

  updateSponsorContrast();
});

const updateSponsorContrast = () => {
  isDarkModeNow = document.body.classList.contains("dark-mode-variables");
  let sponsors = document.getElementsByClassName("sponsor");

  for (i = 0; i < sponsors.length; i++) {
    currentSponsorSource = sponsors[i].src;

    if (isDarkModeNow) {
      currentSponsorSource = currentSponsorSource.replace(".png", "-dark.png");
    } else {
      currentSponsorSource = currentSponsorSource.replace("-dark.png", ".png");
    }
    sponsors[i].src = currentSponsorSource;
  }
};

updateSponsorContrast();

const MENU_BUTTON = document.querySelector(".hamburger");
const MENU = document.querySelector(".nav-menu");

MENU_BUTTON.addEventListener("click", () => {
  MENU_BUTTON.classList.toggle("active");
  MENU.classList.toggle("active");
});
