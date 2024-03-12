const settingsButton = document.getElementById("settingsbutton");
const settingsWindow = document.getElementById("settings");
const settingsCloseButton = document.getElementById("settingsCloseButton");
const mainContainer = document.getElementById("main-container");

const accountButton = document.getElementById("accountbutton");
const accountWindow = document.getElementById("account");
const accountCloseButton = document.getElementById("accountCloseButton");

settingsButton.addEventListener("click", () => {
  settingsWindow.classList.add("active");
});

settingsCloseButton.addEventListener("click", () => {
  settingsWindow.classList.remove("active");
});

accountButton.addEventListener("click", () => {
  localStorage.setItem('account-active', 'true')
  accountWindow.classList.add('active');
});

accountCloseButton.addEventListener("click", () => {
  localStorage.setItem('account-active', 'false')
  accountWindow.classList.remove('active');
});

const closeWindows = () => {
  settingsWindow.classList.remove(("active"))
  localStorage.setItem('account-active', 'false')

  accountWindow.classList.remove(("active"))
  MENU.classList.remove(("active"))
  MENU_BUTTON.classList.remove("active")
}

mainContainer.addEventListener("click", closeWindows)

addEventListener("keydown", (event) => {
  if (event.key === "Escape") {
    closeWindows()
  }
})

if (localStorage.getItem("account-active") === 'true') {
  accountWindow.classList.add('active');
}

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

