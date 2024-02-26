<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Race Tickets</title>
</head>
<body>
    <div class="container">
        <h2>Race Tickets</h2>
        <img src="../../images/Le-Mans-Sarthe76.png" alt="Race Map">
        <form id="ticket-form">
            <label for="ticket-type">Select Ticket Type:</label>
            <select name="ticket-type" id="ticket-type">
                <option value="kids">Kids ($10)</option>
                <option value="normal">Normal ($20)</option>
                <option value="vip">VIP ($50)</option>
            </select>
            <input type="number" id="aantal" name="aantal" value="1" min="1">
            <input type="submit" value="Add to cart">
        </form> 
    </div>

    <div class="Checkout-box">
        <h2>Checkout</h2>
        <p>You have selected <span id="selected-ticket"></span> ticket(s). Total Price: $<span id="total-price"></span></p>
    </div>

    <script>
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
    </script>
</body>
</html>
