<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UD. ALIYA KALIPUTU - Payment</title>
  <?php 
    include "header.php"; 
    require_once "includes/class_autoloader.php";
  ?>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
</head>
<body>
  <div class="container">
    <div class="col s12" style="margin-bottom: 50px;">
      <?php include "static/pages/cart_items.php"; ?>
    </div>
    <div class="selectable-card grey darken-4" id="no-hover">
      <div class="row">
        <h4 class="orange-text bold" style="padding-top: 10px;">Payment</h4>
      </div>

      <form class="row white-text"
        action="payment.php?order_id=<?php echo($_GET["order_id"]) ?>&member_id=<?php echo($_GET["member_id"]) ?>&view_order=1"
        method="POST" style="margin-left: 50px;">
        <div class="col s8">
          <div class="row">
            <div class="input-field col s6">
              <i class="material-icons prefix">account_circle</i>
              <input id="name" type="text" placeholder="XXX XXX XXX" name="card_name" class="validate white-text">
              <label class="active cyan-text" for="name">Name </label>
              <span class="helper-text grey-text" data-error="CardHolder Name" data-success="CardHolder Name"></span>
            </div>

        
          <div class="row">
            <div class="input-field col s6">
              <i class="material-icons prefix">contact_phone</i>
              <input id="phone" type="text" name="phone" class="validate white-text">
              <label for="phone">Phone number</label>
              <span class="helper-text grey-text" data-error="Invalid Number" data-success="Valid Number"></span>
            </div>
            <div class="row">
            <div class="input-field col s6">
              <i class="material-icons prefix">home</i>
              <textarea placeholder="Alamat Lengkap" id="home"
                class="materialize-textarea white-text"
                name="address" type="text" class="validate white-text"></textarea>
              <label class="active cyan-text" for="home">Billing Address</label>
              <span class="helper-text grey-text" data-error="Invalid Address" data-success="Valid Address"></span>
            </div>
          </div>
          <div class="errormsg">
            <?php
              if (isset($_GET["error"]))
              {
                if ($_GET["error"] == "empty_input")
                  echo "<p>*Fill in all fields!<p>";
              }
            ?>
          </div>
          <button type="submit" name="payment" class="btn" style="margin-bottom: 20px;">Confirm Payment</button>
        </div>
        
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</body>

<?php
  function EmptyInputPayment($name,$phone,)
  { return empty($name)  || (empty($phone)) ; }

  if (isset($_POST["payment"])) 
  {
    $name = $_POST["card_name"];

    $phone = $_POST["phone"];
  
    if (EmptyInputPayment($name, $phone))
    {
      $orderID = $_GET["order_id"];
      $memberID = $_GET["member_id"];
      echo("<script>location.href = 'payment.php?error=empty_input&order_id=$orderID&member_id=$memberID&view_order=1';</script>");
      exit();
    }

    if (isset($_GET["order_id"]))
    {
      $orderid = $_GET["order_id"];
      $conn = new Dbhandler();

      $itemID = $item->getItemID();
      $item = new Item($itemID);
      $quantityInStock = $item->getQuantityInStock();
      $quantity = $orderItem->getQuantity();

      $item->setQuantityInStock($quantityInStock - $quantity);
      $item->setData();

      $sql = "INSERT INTO Payment(OrderID, PaymentDate)
        VALUES($orderid, CURRENT_TIME)";
      $conn->conn()->query($sql) or die($conn->error);


      $sql = "UPDATE Orders SET CartFlag = 0 WHERE OrderID = $orderid";
      $conn->conn()->query($sql) or die($conn->error);

      $sql = "INSERT INTO Orders(MemberID, CartFlag)
        VALUES($memberID, 1)";
      $conn->conn()->query($sql) or die($conn->error);
      
      echo("<script>location.href = 'payment_done.php';</script>");
      exit();
    }
  }
?>

<?php include "footer.php"; ?>
</html>