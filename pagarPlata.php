<!-- <?php include("config.php"); ?> -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-witdhm initial-scale=1.0" />
    <title>Prueba</title>

    <link rel="stylesheet" href="css/style_pagar.css" />
    <script src="https://www.paypal.com/sdk/js?client-id=AQMkhkZzjANZLkN018fnmoijv3_GphRm4ScQ85KTCFT3sfMWRW6j6o5FZkVC_jT14pdVRD-j_weY-P9K&vault=true&intent=subscription" data-sdk-integration-source="button-factory"></script>  </head>

  <body>
    <div class="container">
      <h1>¡Gracias por elegirnos!</h1>
      <p>Para poder completar la suscripción de PLATA, deberás abonar con paypal.</p>
      <div id="paypal-button-container-P-2BB32069P4051413JMLHV4EA"></div>
    </div>
    
    <script>
      paypal.Buttons({
          style: {
              shape: 'pill',
              color: 'blue',
              layout: 'vertical',
              label: 'subscribe'
          },
          createSubscription: function(data, actions) {
            return actions.subscription.create({
              /* Creates the subscription */
              plan_id: 'P-2BB32069P4051413JMLHV4EA'
            });
          },
          onApprove: function(data, actions) {
            alert(data.subscriptionID); // You can add optional success message for the subscriber here
            window.location.href = "registerPlata.php";
          }
      }).render('#paypal-button-container-P-2BB32069P4051413JMLHV4EA'); // Renders the PayPal button
  </script>  
</body>
</html>
