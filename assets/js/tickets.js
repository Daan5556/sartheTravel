let kids = document.getElementById("kids")
let volwassenen = document.getElementById("volwassenen")
let vip = document.getElementById("vip")
let button = document.getElementById("checkout-button")
let totalPrice = document.getElementById("totalPrice")

function calculatePrice() {
  if (isNaN(kids.value) || isNaN(volwassenen.value) || isNaN(vip.value)) {
    alert("Voer een getal in");
    return
  }
  if (kids.value > 99) {
    alert("maximale aantal tickets bereikt")
    return
  }
  if (volwassenen.value > 99) {
    alert("maximale aantal tickets bereikt")
    return
  }
  if (vip.value > 5) {
    alert("Je mag niet meer dan 5 vip tickets bestellen")
    return
  }
  if (kids.value < 0 || volwassenen.value < 0 || vip.value < 0) {
    alert("Kan niet minder dan 0 tickets bestellen")
    return false
  }

  let total = kids.value * 10 + volwassenen.value * 25 + vip.value * 50

  totalPrice.innerHTML = total
}

button.addEventListener("click", calculatePrice)
