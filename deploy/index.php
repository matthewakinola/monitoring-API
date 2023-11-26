<?php

$reds="#fe34ba";
$greens="#3479f5";
$services = [
  'account',
  'onboarding',
  'dashboard',
  'msapi',
  'onboarding',
];

$rn=rand(2,10);

if ($rn<=3) {
  $clr=$reds;
}else {
  $clr=$greens;
}
echo $rn;
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Service Status</title>
  <link rel="icon" type="image/png" href="../pug/dist/fav.png">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel='stylesheet' href='../pug/dist/bootstrap.min.css'>
  <link rel="stylesheet" href="../pug/dist/style.css">

</head>
<body>
  <img src="../pug/dist/logo-white.png" alt="logo" width="200px">

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
            <summary style="background-color:<?php echo $clr;?>;">Account Service</summary>
            <div class="folder">
              <p style="color:<?php echo $clr;?>;">Reachable</p> 
            </div>
          </details>
          <details open="open">
            <summary style="background-color:<?php echo $clr;?>;">Onboarding Service</summary>
            <div class="folder">
              <p style="color:<?php echo $clr;?>;">Unreachable</p> 
            </div>
          </details>
          <details>
            <summary style="background-color:<?php echo $clr;?>;">MS API Service</summary>
            <div class="folder">
              <p style="color:<?php echo $clr;?>;">Reachable</p> 
            </div>
          </details>
          <details>
            <summary style="background-color:<?php echo $clr;?>;">Payments Service</summary>
            <div class="folder">
              <p style="color:<?php echo $clr;?>;">Reachable</p> 
            </div>
          </details>
          <details>
            <summary style="background-color:<?php echo $clr;?>;">Auth Service</summary>
            <div class="folder">
              <p style="color:<?php echo $clr;?>;">Reachable</p> 
            </div>
          </details>
          <details>
            <summary style="background-color:<?php echo $clr;?>;">Messaging Service</summary>
            <div class="folder">
              <p style="color:<?php echo $clr;?>;">Reachable</p> 
            </div>
          </details>
          <details>
            <summary style="background-color:<?php echo $clr;?>;">Persons Service</summary>
            <div class="folder">
              <p style="color:<?php echo $clr;?>;">Reachable</p> 
            </div>
          </details>
          <details>
            <summary style="background-color:<?php echo $clr;?>;">Pricing Service</summary>
            <div class="folder">
              <p style="color:<?php echo $clr;?>;">Reachable</p> 
            </div>
          </details>
          <details>
            <summary style="background-color:<?php echo $clr;?>;">Verify Service</summary>
            <div class="folder">
              <p style="color:<?php echo $clr;?>;">Reachable</p> 
            </div>
          </details>
          <details>
            <summary style="background-color:<?php echo $clr;?>;">Openbanking Service</summary>
            <div class="folder">
              <p style="color:<?php echo $clr;?>;">Reachable</p> 
            </div>
          </details>
          <details>
            <summary>BankConnect Service</summary>
            <div class="folder">
              <p style="color:<?php echo $clr;?>;">Reachable</p> 
            </div>
          </details>
          <details>
            <summary>Card Service</summary>
            <div class="folder">
              <p style="color:<?php echo $clr;?>;">Reachable</p> 
            </div>
          </details>




        </div>
      </details>


      <details open="open">
        <summary style="background-color:<?php echo $clr;?>;">Login</summary>
        <div class="folder">
          <details>
            <summary style="background-color:<?php echo $clr;?>;">Account Service</summary>
            <div class="folder">
              <p  style="color:<?php echo $clr;?>;">Reachable</p>
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
    <summary style="background-color:<?php echo $clr;?>;">External Services Map</summary>
    <div class="folder"> <br><br>
      <!-- <p>9 Services UP</p>
      <p>2 Services Down</p> -->


      <details open="open">
        <summary style="background-color:<?php echo $clr;?>;">Mambu</summary>
      </details>
      <details open="open">
        <summary style="background-color:<?php echo $clr;?>;">Comply Advantage</summary>
      </details>
      <details open="open">
        <summary style="background-color:<?php echo $clr;?>;">ClearBank</summary>
      </details>
      <details open="open">
        <summary style="background-color:<?php echo $clr;?>;">Onfido</summary>
      </details>
      <details open="open">
        <summary style="background-color:<?php echo $clr;?>;">Passfort</summary>
      </details>
      <details open="open">
        <summary style="background-color:<?php echo $clr;?>;">Postmark</summary>
      </details>
      <details open="open">
        <summary style="background-color:<?php echo $clr;?>;">NIBSS</summary>
      </details>
      <details open="open">
        <summary style="background-color:<?php echo $clr;?>;">Currency Cloud</summary>
      </details>
      <details open="open">
        <summary style="background-color:<?php echo $clr;?>;">PostCoder</summary>
      </details>
      <details open="open">
        <summary style="background-color:<?php echo $clr;?>;">Thredd</summary>
      </details>
      <details open="open">
        <summary style="background-color:<?php echo $clr;?>;">FCMB</summary>
      </details>
      <details open="open">
        <summary style="background-color:<?php echo $clr;?>;">FCM</summary>
      </details>
      <details open="open">
        <summary style="background-color:<?php echo $clr;?>;">Fincode</summary>
      </details>
      <details open="open">
        <summary style="background-color:<?php echo $clr;?>;">PostCoder</summary>
      </details>
      <details open="open">
        <summary style="background-color:<?php echo $clr;?>;">Twilio</summary>
      </details>
      <details open="open">
        <summary style="background-color:<?php echo $clr;?>;">Woodcore</summary>
      </details>
      <details open="open">
        <summary style="background-color:<?php echo $clr;?>;">PostCoder</summary>
      </details>
      <details open="open">
        <summary style="background-color:<?php echo $clr;?>;">Zendesk</summary>
      </details>
      <details open="open">
        <summary style="background-color:<?php echo $clr;?>;">Ozone</summary>
      </details>
      <details open="open">
        <summary style="background-color:<?php echo $clr;?>;">IPstack</summary>
      </details>
      <details open="open">
        <summary style="background-color:<?php echo $clr;?>;">NIP_Wrapper</summary>
      </details>


      <!-- <details open="open">
        <summary style="background-color:<?php echo $clr;?>;">Login</summary>
        <div class="folder">
          <details>
            <summary style="background-color:<?php echo $clr;?>;">Account Service</summary>
            <div class="folder">
              <p  style="color:<?php echo $clr;?>;">Reachable</p>
            </div>
          </details>
        </div>
      </details> -->


    </div>
  </details>
</div>

<!-- <input type="date" name="datetimes" /> -->

    <title>API Requests Status</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            function updateStatus() {
                $.ajax({
                    url: 'get_last_api_request.php',
                    method: 'GET',
                    success: function (data) {
                        var response = JSON.parse(data);
                        var statusColor = response.response_code === 200 ? 'green' : 'red';
                        $('#status').text(response.response_code).css('color', statusColor);
                    }
                });
            }

            // Initial update
            updateStatus();

            // Periodically refresh every minute
            setInterval(updateStatus, 1000);
        });
    </script>
</head>

    <h1>Last API Request Status: <span id="status"></span></h1>



<!-- partial -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>


</body>

</html>


