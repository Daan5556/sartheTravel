const blue = document.getElementById('blue')
const green = document.getElementById('green')
const yellow = document.getElementById('yellow')
const red = document.getElementById('red')
const purple = document.getElementById('purple')
const pink = document.getElementById('pink')

const profilePic = document.getElementById('profile-pic')

colors = ["blue", "green", "yellow", "red", "purple", "pink"]
const changeProfileColor = color => {
  colors.forEach((selectedColor) => {
    profilePic.classList.remove((selectedColor))
  })
  profilePic.classList.add(color)
}

blue.addEventListener("click", () => {
  changeProfileColor("blue")
  localStorage.setItem("profile-color", "blue")
})
green.addEventListener("click", () => {
  changeProfileColor("green")
  localStorage.setItem("profile-color", "green")
})
yellow.addEventListener("click", () => {
  changeProfileColor("yellow")
  localStorage.setItem("profile-color", "yellow")
})
red.addEventListener("click", () => {
  changeProfileColor("red")
  localStorage.setItem("profile-color", "red")
})
purple.addEventListener("click", () => {
  changeProfileColor("purple")
  localStorage.setItem("profile-color", "purple")
})
pink.addEventListener("click", () => {
  changeProfileColor("pink")
  localStorage.setItem("profile-color", "pink")
})
