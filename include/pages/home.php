<?php
include "include/phpconfig.php";
include "include/tickets_query.php";
?>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bungee+Outline&display=swap" rel="stylesheet">

<div class="container-home">
  <div>
    <span class="text">GET READY</span>
  </div>
  <div class="widgetsContainer">
    <a href="?page=tickets" class="widgets">
      <div class="textWidgets">
        <span>T<br />‎ I<br />C<br />K<br />E<br />T<br />S</span>
      </div>
      <div class="tickets-widget">
        <span class="widgetText">Volgende Race: 12 Mei</span>
        <br />
        <span class="widgetText">Uw Tickets:
          <?php echo $totalTicketsAmount ?>
        </span>
        <span class="widgetText">Kinder Tickets:
          <?php echo $kidsAmount ?>
        </span>
        <span class="widgetText">Volwassene Tickets:
          <?php echo $volwassenAmount ?>
        </span>
        <span class="widgetText">VIP Tickets:
          <?php echo $vipAmount ?>
        </span>
        <br />
        <span class="widgetText">Beschikbare Plaatsen: 12</span>
      </div>
    </a>
    <a href="?page=blog" class="widgets">
      <div class="textWidgets">
        <span>B<br />L<br />O<br />G</span>
      </div>
      <div class="blog">
        <div class="post">
          <img class="imageBlog" src="./assets/images/blogfoto.jpg" alt="blog" />
          <div class="postText">
            <h3>Wortels in racebaan?</h3>
            <span class="textPost">
              Op een zonnige dag besloten de wortels uit de moestuin een eigen avontuur te beleven op de racebaan. Met
              hun knapperige oranje tinten en groene loof rolden ze soepel over het gladde asfalt. De wortels daagden
              elkaar uit in een snelle en competitieve race. Met wapperend loof bereikten ze uiteindelijk voldaan de
              finishlijn, terwijl de andere groenten vanaf de zijlijn verbaasd toekeken.</span>
          </div>
        </div>
      </div>
    </a>
    <a href="?page=contact" class="widgets">
      <div class="textWidgets">
        <span>C<br />O<br />N<br />T<br />A<br />C<br />T</span>
      </div>
      <div class="contact">
        <div class="contactText">
          <img class="imageContact" src="./assets/images/DieterBollen.png" alt="blog" />
          <h3>Gwen Bollen</h3>
          <span class="contactIcons"><span class="material-symbols-outlined"> mail </span><span
              class="material-symbols-outlined"> call </span><span class="material-symbols-outlined"> fax </span></span>
        </div>
      </div>
    </a>
  </div>
</div>