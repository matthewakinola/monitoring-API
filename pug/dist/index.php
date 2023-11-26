<?php

$red="#fe34ba";
$green="#3479f5";

?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Service Status</title>
  <link rel="icon" type="image/png" href="./fav.png">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel='stylesheet' href='./bootstrap.min.css'>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
  <img src="./logo-white.png" alt="logo" width="200px">

  <br><br><br>
<!-- partial:index.partial.html --> 
<div class="container">
  <details open="open">
    <summary>Internal Services Map</summary>
    <div class="folder"> <br><br>
      <!-- <p>9 Services UP</p>
      <p>2 Services Down</p> -->


      <details open="open">
        <summary>Onboarding</summary>
        <div class="folder">

          <details>
            <summary style="background-color:<?php echo $green;?>;">Account Service</summary>
            <div class="folder">
              <p style="color:<?php echo $green;?>;">Reachable</p> 
            </div>
          </details>
          <details open="open">
            <summary style="background-color:<?php echo $green;?>;">Onboarding Service</summary>
            <div class="folder">
              <p style="color:<?php echo $green;?>;">Unreachable</p> 
            </div>
          </details>
          <details>
            <summary style="background-color:<?php echo $green;?>;">MS API Service</summary>
            <div class="folder">
              <p style="color:<?php echo $green;?>;">Reachable</p> 
            </div>
          </details>
          <details>
            <summary style="background-color:<?php echo $green;?>;">Payments Service</summary>
            <div class="folder">
              <p style="color:<?php echo $green;?>;">Reachable</p> 
            </div>
          </details>
          <details>
            <summary style="background-color:<?php echo $green;?>;">Auth Service</summary>
            <div class="folder">
              <p style="color:<?php echo $green;?>;">Reachable</p> 
            </div>
          </details>
          <details>
            <summary style="background-color:<?php echo $green;?>;">Messaging Service</summary>
            <div class="folder">
              <p style="color:<?php echo $green;?>;">Reachable</p> 
            </div>
          </details>
          <details>
            <summary style="background-color:<?php echo $green;?>;">Persons Service</summary>
            <div class="folder">
              <p style="color:<?php echo $green;?>;">Reachable</p> 
            </div>
          </details>
          <details>
            <summary style="background-color:<?php echo $green;?>;">Pricing Service</summary>
            <div class="folder">
              <p style="color:<?php echo $green;?>;">Reachable</p> 
            </div>
          </details>
          <details>
            <summary style="background-color:<?php echo $green;?>;">Verify Service</summary>
            <div class="folder">
              <p style="color:<?php echo $green;?>;">Reachable</p> 
            </div>
          </details>
          <details>
            <summary style="background-color:<?php echo $green;?>;">Openbanking Service</summary>
            <div class="folder">
              <p style="color:<?php echo $green;?>;">Reachable</p> 
            </div>
          </details>
          <details>
            <summary>BankConnect Service</summary>
            <div class="folder">
              <p style="color:<?php echo $red;?>;">Reachable</p> 
            </div>
          </details>
          <details>
            <summary>Card Service</summary>
            <div class="folder">
              <p style="color:<?php echo $red;?>;">Reachable</p> 
            </div>
          </details>




        </div>
      </details>


      <details open="open">
        <summary style="background-color:<?php echo $green;?>;">Login</summary>
        <div class="folder">
          <details>
            <summary style="background-color:<?php echo $green;?>;">Account Service</summary>
            <div class="folder">
              <p  style="color:<?php echo $green;?>;">Reachable</p>
            </div>
          </details>
        </div>
      </details>


    </div>
  </details>
</div>







<br><br><br>
<!-- partial:index.partial.html --> 
<div class="container">
  <details open="open">
    <summary style="background-color:<?php echo $green;?>;">External Services Map</summary>
    <div class="folder"> <br><br>
      <!-- <p>9 Services UP</p>
      <p>2 Services Down</p> -->


      <details open="open">
        <summary style="background-color:<?php echo $green;?>;">Mambu</summary>
      </details>
      <details open="open">
        <summary style="background-color:<?php echo $green;?>;">Comply Advantage</summary>
      </details>
      <details open="open">
        <summary style="background-color:<?php echo $green;?>;">ClearBank</summary>
      </details>
      <details open="open">
        <summary style="background-color:<?php echo $green;?>;">Onfido</summary>
      </details>
      <details open="open">
        <summary style="background-color:<?php echo $green;?>;">Passfort</summary>
      </details>
      <details open="open">
        <summary style="background-color:<?php echo $green;?>;">Postmark</summary>
      </details>
      <details open="open">
        <summary style="background-color:<?php echo $green;?>;">NIBSS</summary>
      </details>
      <details open="open">
        <summary style="background-color:<?php echo $green;?>;">Currency Cloud</summary>
      </details>
      <details open="open">
        <summary style="background-color:<?php echo $green;?>;">PostCoder</summary>
      </details>
      <details open="open">
        <summary style="background-color:<?php echo $green;?>;">Thredd</summary>
      </details>
      <details open="open">
        <summary style="background-color:<?php echo $green;?>;">FCMB</summary>
      </details>
      <details open="open">
        <summary style="background-color:<?php echo $green;?>;">FCM</summary>
      </details>
      <details open="open">
        <summary style="background-color:<?php echo $green;?>;">Fincode</summary>
      </details>
      <details open="open">
        <summary style="background-color:<?php echo $green;?>;">PostCoder</summary>
      </details>
      <details open="open">
        <summary style="background-color:<?php echo $green;?>;">Twilio</summary>
      </details>
      <details open="open">
        <summary style="background-color:<?php echo $green;?>;">Woodcore</summary>
      </details>
      <details open="open">
        <summary style="background-color:<?php echo $green;?>;">PostCoder</summary>
      </details>
      <details open="open">
        <summary style="background-color:<?php echo $green;?>;">Zendesk</summary>
      </details>
      <details open="open">
        <summary style="background-color:<?php echo $green;?>;">Ozone</summary>
      </details>
      <details open="open">
        <summary style="background-color:<?php echo $green;?>;">IPstack</summary>
      </details>
      <details open="open">
        <summary style="background-color:<?php echo $green;?>;">NIP_Wrapper</summary>
      </details>


      <!-- <details open="open">
        <summary style="background-color:<?php echo $green;?>;">Login</summary>
        <div class="folder">
          <details>
            <summary style="background-color:<?php echo $green;?>;">Account Service</summary>
            <div class="folder">
              <p  style="color:<?php echo $green;?>;">Reachable</p>
            </div>
          </details>
        </div>
      </details> -->


    </div>
  </details>
</div>

<!-- <input type="date" name="datetimes" /> -->

<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>





</body>
</html>
