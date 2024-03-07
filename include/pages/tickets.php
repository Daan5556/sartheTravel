<div class="containertickets">
  <h2>Race Tickets</h2>
  <div class="tickets-upper">
    <div class="flexTickets">
      <label for="kids">kids €10,-</label>
      <input id="kids" type="number" name="kids" placeholder="0 tickets">
      <label for="volwassenen">volwassenen €25,-</label>
      <input id="volwassenen" type="number" name="volwassenen" placeholder="0 tickets">
      <label for="vip">VIP €50,-</label>
      <input id="vip" type="number" name="vip" placeholder="0 tickets">
      <button id="checkout-button">Checkout</button>
    </div>
    <img id="track-image" src="../../assets/images/racetrack.png" alt="Race Map">
  </div>
</div>

<a href="#">
  <div class="Checkout-box">
    <h2>Checkout</h2>
    <p>You have selected <span id="selected-ticket"></span> ticket(s). Total Price: €<span id="totalPrice"></span></p>
  </div>
</a>
<script src="assets/js/tickets.js"></script>
