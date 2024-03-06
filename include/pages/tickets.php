<div class="containertickets">
  <h2>Race Tickets</h2>
  <img
    id="track-image"
    src="../../assets/images/racetrack.png"
    alt="Race Map"
  />
  <div class="headContainer">
    <div class="flexTickets">
      <label for="kids">kids €10,-</label>
      <input id="kids" type="number" name="kids" />
      <label for="volwassenen">volwassenen €25,-</label>
      <input id="volwassenen" type="number" name="kids" />
      <label for="vip">VIP €50,-</label>
      <input id="vip" type="number" name="kids" />
      <button role="button" id="checkout-button">Checkout</button>
      </div>
      <div class="info-tickets">
        
        <ol>
          Kids tickets: 0 t/m 17 jaar<br />
          Kinderwagens achterlaten op aangewezen plaats aub<br />

          <br />18 t/m 65+ jaar<br />
          nog geen 21 jaar, ID laten zien<br />

          <br />Speciale vip plaatsen gereserveerd en toegang tot de VIP tent<br />
          VIP Lounge<br />
          Tour
        </ol>
      </div>
</div>
</div>
<div class="Checkout-box">
  <h2>Checkout</h2>
  
  <p>
    You have selected <span id="selected-ticket"></span> ticket(s). Total Price:
    €<span id="totalPrice"></span>
  </p>
</div>


<script src="assets/js/tickets.js"></script>
>
