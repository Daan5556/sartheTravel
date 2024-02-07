const settingsButton = document.getElementById("settingsbutton");
const settingsWindow = document.getElementById("settings");

settingsButton.addEventListener("click", () => {
  settingsWindow.classList.toggle("active");
});

settingsWindow.addEventListener("mouseleave", () => {
  settingsWindow.classList.remove("active");
});

// darkmode

const darkMode = document.querySelector(".dark-mode");
const isDarkMode = localStorage.getItem("darkMode");

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
});
