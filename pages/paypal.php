<?php
require '../php/conexion.php';
$consulta = mysqli_query($conexion, "SELECT * FROM compratemporal");
while ($row = mysqli_fetch_array($consulta)) {
    $id_artesania_Buscar = $row['id_artesania'];
}

$consulta = mysqli_query($conexion, "SELECT * FROM artesania WHERE id_artesania='$id_artesania_Buscar'");
        while ($row = mysqli_fetch_array($consulta)) {
?>
<!DOCTYPE html>
<html>
<body>
  <script src="https://www.paypal.com/sdk/js?client-id=test&currency=MXN"></script>

  <div id="paypal-button-container"></div>

  <script>
    paypal.Buttons({
      createOrder: (data, actions) => {
        return actions.order.create({
          purchase_units: [{
            amount: {
              value: '<?php echo $row['precio'] ?>' // Can also reference a variable or function
            }
          }]
        });
      },
      onApprove: (data, actions) => {
        return actions.order.capture().then(function (orderData) {
          console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
          const transaction = orderData.purchase_units[0].payments.captures[0];
          alert(`Transaction ${transaction.status}: ${transaction.id}\n\nSee console for all available details`);
        });
      }
    }).render('#paypal-button-container');
  </script>
</body>

</html>
<?php
        }
?>