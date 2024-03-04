
document.getElementById('ticket-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent form submission
    
    // Get selected ticket type and its price
    var ticketType = document.getElementById('ticket-type').value;
    var ticketPrice = getPrice(ticketType);
    
    // Get quantity of tickets
    var quantity = parseInt(document.getElementById('aantal').value);
    
    // Calculate total price
    var totalPrice = ticketPrice * quantity;

    // Update Checkout box with selected ticket info
    document.getElementById('selected-ticket').textContent = quantity;
    document.getElementById('total-price').textContent = totalPrice;
});

// Function to get ticket price based on ticket type
function getPrice(ticketType) {
    switch (ticketType) {
        case 'kids':
            return 10;
        case 'normal':
            return 20;
        case 'vip':
            return 50;
        default:
            return 0;
    }
}