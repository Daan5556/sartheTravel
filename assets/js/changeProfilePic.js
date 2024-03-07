const blue = document.getElementById('blue')
const green = document.getElementById('green')
const yellow = document.getElementById('yellow')
const red = document.getElementById('red')
const purple = document.getElementById('purple')
const pink = document.getElementById('pink')

const profilePic = document.getElementById('profile-pic')

let selectedColor;
let colorClasses = document.querySelectorAll(".color-to-pick")

const changeProfileColor = color => {
  selectedColor = color
  let colors = ['blue', 'green', 'yellow', 'red', 'purple', 'pink']
  colorClasses.forEach(element => {
    colors.forEach(colorToRemove => {
      element.classList.remove("active")
      profilePic.classList.remove(colorToRemove)
    })
    if (element.id == color) {
      element.classList.add("active")
    }
  })
  profilePic.classList.add(color)
}

blue.addEventListener("click", () => {
  changeProfileColor("blue")
})
green.addEventListener("click", () => {
  changeProfileColor("green")
})
yellow.addEventListener("click", () => {
  changeProfileColor("yellow")
})
red.addEventListener("click", () => {
  changeProfileColor("red")
})
purple.addEventListener("click", () => {
  changeProfileColor("purple")
})
pink.addEventListener("click", () => {
  changeProfileColor("pink")
})

