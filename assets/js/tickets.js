let kids = document.getElementById("kids")
let volwassenen = document.getElementById("volwassenen")
let vip = document.getElementById("vip")
let button = document.getElementById("checkout-button")
let totalPrice = document.getElementById("totalPrice")
function calculatePrice(){

if (kids.value > 99) { 
    alert("maximale aantal tickets bereikt")
    if (error){
        alert()
        return
    }
}  
if (vip.value > 5) { 
    alert("Je mag niet meer dan 5 vip tickets b etellen")
    if (error){
        alert()
        return
    }
}  
if (volwassenen.value > 99) { 
    alert("maximale aantal tickets bereikt")
    if (error){
        alert()
        return
    }
}
if (kids.value < 0 || vip.value < 0 || volwassenen.value < 0){
    alert("minimale aantal tickets")
    if (error){
        alert()
        return
    }
}

let total = kids.value * 10 + volwassenen.value * 25 + vip.value * 50
if (isNaN(total)) {
    alert("Voer een getal in");
} else {
   totalPrice.innerHTML=total
}
}

button.addEventListener("click", calculatePrice)
