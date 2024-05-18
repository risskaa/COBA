<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UD. ALIYA KALIPUTU - Admin View Orders</title>
</head>
<?php
  include "header.php";
  include "static/pages/side_nav.html";
  include "static/pages/admin_nav.php";
?>
<body>
  <!-- manage users -->
  <div class="container" style="margin-top: 150px">
    <h3 class="page-title white-text">View Customers Cart/Orders </h3>
    <div class="row" style="padding-bottom: 10px;">
      <div class="rounded-card-parent">
        <div class="card rounded-card">
          <div class="card-content white-text">
            <span class="orange-text center" style="font-size: 24px">
              Customers Orders List - Sorted by latest 
              <small style="font-size: 20px; margin-top: 10px">(Autosync table)</small>
            </span>
           <div class="input-field col s3 white-text">
                <input name="search_members" id="search_members" type="text" class="validate; white-text" maxlength="20">
                <label for="search_members">Search by Name/Email</label>
                <span class="helper-text" data-error="text only" data-success="correct"></span>
              </div>
             <center><table class='responsive-table' style='table-layout: fixed; width: 70%;' id='pagination'></center>
            <form action="admin_view_orders.php" method="POST" style="margin: 0px;">
              </form>
            <thead class="text-primary center">
            <tr><th>Username</th><th>Email</th><th>Order Id</th>
          <th>Payment Date</th></tr>
            </thead>
           <tbody>
                <?php 
                  $admin = new adminContr(); 
                  $admin->showSearchMember();
                ?>
              </tbody>
            </table>

            <div class='col-md-12 center text-center'>
              <span class='left' id='total_reg'></span>
              <ul class='pagination pager' id='myPager'></ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- view cart/order details selected by admin -->
    <?php if (isset($_GET["view_order"])) { ?>
    <div class="rounded-card-parent">
      <div class="card rounded-card">
        <div class="card-content">
          <span class="card-title cyan-text bold">
            Cart/Order Details
            <?php echo("[".$_GET["username"]."]");?>
          </span>
            <?php
              // View Selected Customer Cart/Orders 
              if (isset($_GET["view_order"]))
              {
                $uid = $_GET["view_order"];
                include_once "static/pages/cart_items.php";
                include_once "static/pages/order_items.php";
              }  
            ?>
        </div>
      </div>
    </div>
  <?php } ?>
  </div>
</body>

<script type="text/javascript">
  window.onload = function() {
    var elems  = document.querySelectorAll("input[type=range]");
    M.Range.init(elems);
  };
</script>
<?php include "footer.php"; ?>
</html>