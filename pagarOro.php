<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-witdhm initial-scale=1.0" />
    <title>Pagar</title>

    <link rel="stylesheet" href="css/style_pagar.css" />
    <script src="https://www.paypal.com/sdk/js?client-id=AVvIrgTKDHTgZxR20L5GV3GOJ1fzJCHLxFPazzRQB_xJaDYw7ZgmKpEVnhGHRknjbMpCvX1up9ez46d3"></script>
  </head>

  <body>
    <div class="container">
      <h1>¡Gracias por elegirnos!</h1>
      <p>
        Para poder completar la suscripción de ORO, deberás abonar con paypal.
      </p>
      <div id="paypal-button-container"></div>
    </div>

    <script>
      paypal
        .Buttons({
          style: {
            color: "blue",
            shape: "pill",
            label: "pay",
          },
          createOrder: function (data, actions) {
            return actions.order.create({
              purchase_units: [
                {
                  amount: {
                    value: 0.5,
                  },
                },
              ],
            });
          },
          onApprove: function (data, actions) {
            actions.order.capture().then(function (detalles) {
              console.log(detalles);

              let url = "pagadoOro.php";
              return fetch(url, {
                method: "post",
                headers: {
                  "content-type": "application/json",
                },
                body: JSON.stringify({
                  detalles: detalles,
                }),
              }).then(function (response) {
                window.location.href = "registerOro.php";
              });
            });
          },
          onCancel: function (data) {
            alert("pago cancelado");
            console.log(data);
          },
        })
        .render("#paypal-button-container");
    </script>
  </body>
</html>

