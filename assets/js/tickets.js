let kids = document.getElementById("kids")
let volwassenen = document.getElementById("volwassenen")
let vip = document.getElementById("vip")
let button = document.getElementById("checkout-button")
let totalPrice = document.getElementById("totalPrice")
function calculatePrice(){
    console.log('func')
    console.log(kids.value)
    console.log(volwassenen.value)
    console.log(vip.value)  
if (kids.value > 99) { 
    alert("maximale aantal tickets bereikt")
}  
if (vip.value > 5) { 
    alert("Je mag niet meer dan 5 vip tickets b etellen")
}  
if (volwassenen.value > 99) { 
    alert("maximale aantal tickets bereikt")
}          
let total = kids.value * 10 + volwassenen.value * 25 + vip.value * 50
if (isNaN(total)) {
    alert("Voer een getal in");
} else {
   totalPrice.innerHTML=total
}
}

button.addEventListener("click", calculatePrice)
