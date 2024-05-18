<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UD. ALIYA KALIPUTU</title>
  <?php 
    require "header.php"; 
    require_once "includes/class_autoloader.php";

    // database initialization
    $dbinit = new InitDB();
    $dbinit->initDbExec();
  ?>
</head>
<body>
  <div class="slider" style="width: 9s0%; margin: auto;">
    <ul class="slides">
      <li>
        <img src="./static/images/BG1.gif"> 
        <div class="caption center-align">
          <h3></h3>
          <h3 class="bold page-title">UD. ALIYA KALIPUTU</h3>
          <h5 class="bold page-title">PUSAT JENANG KUDUS DAN OLEH-OLEH KHAS</h5>
        </div>
      </li>
      <li>
        <img src="./static/images/orii.jpg"> 
        <div class="caption center-align">
          <h3 class="bold page-title">JENANG KUDUS ORIGINAL</h3>
        
        </div>
      </li>
      <li>
        <img src="static/images/jk.jpg"> 
        <div class="caption center-align">
          <h3 class="bold page-title">JENANG KUDUS KOMBINASI</h3>
      </li>
      <li>
        <img src="./static/images/MADUORI.jpg"> 
        <div class="caption center-align">
          <h3 class="bold page-title">MADU MONGSO ORIGINAL</h3>
        </div>
      </li>
      <li>
        <img src="./static/images/maduhitam.jpg"> 
        <div class="caption center-align">
        <h3 class="bold page-title">MADU MONGSO HITAM</h3>
        </div>
      </li>
    </ul>
  </div>
  
 <div class="container" style="margin-top: 40px">
  <div class="row">
      <div class="row" style="margin-bottom: 20px">
      <center><<h4 class="bold page-title">LAYANAN KAMI</h4> </center>
      </div>
    <div class="row ">
        <a href="contactUs.php" >
         <center><div class="selectable-card " style="width: 500px; margin: 10px;">
             <img src="static/images/toko.jpg"/>
             <h3 class="white-text center bold hoverable">Toko Kami</h3>
            <br>
            </div></center>
             <h5 class="white-text justify">Menyediakan beraneka macam jenis olahan jenang mulai dari jenang original sampai spesial yang di produksi sendiri. UD. Aliya Kaliputu juga menyediakan madu mongso.
			Untuk melihat detail produk kami bisa langsung mengunjungi Toko Kami, atau juga bisa belanja secara online.</h5> 
          </a>
        </div>
        <h5 class="white-text center bold" >Best Seller</h5>  
        <style>
      .grid-container {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
        grid-gap: 15px;
      }

      .product {
        border: 1px solid #ccc;
        padding: 10px;
        text-align: center;
      }

      .product img {
        max-width: 100%;
        height: auto;
      }
    </style>
  </head>
  <>
    <div class="grid-container">
      <div class="product">
        <img src="./static/images/bes1.jpg" alt="Produk 1" />
        <h5 class="white-text center bold" >Jenang Original</h5>
      </div>
      <div class="product">
      <img src="./static/images/bes2.jpg" alt="Produk 2" />
      <h5 class="white-text center bold" >Jenang Wijen</h5>
      </div> 
      <div class="product">
      <img src="./static/images/bes5.jpg" alt="Produk 3" />
      <h5 class="white-text center bold" >Jenang Durian</h5>
      </div>  
      <div class="product">
      <img src="./static/images/bes3.jpg" alt="Produk 3" />
      <h5 class="white-text center bold" >Jenang Kombinasi</h5>
      </div>
      <div class="product">
      <img src="./static/images/bes8.jpg" alt="Produk 3" />
      <h5 class="white-text center bold" >Madu Mongso Ori</h5>
      </div>
      <div class="product">
      <img src="./static/images/bes7.jpg" alt="Produk 3" />
      <h5 class="white-text center bold" >Madu Mongso Ketan Hitam</h5>
      </div>
      </div>
  </div></body>
  <div class="section" style="margin-top: 0px;">
   
    </div>
  </div>
  
  <script src="https://apps.elfsight.com/p/platform.js" defer></script>
  <div class="elfsight-app-dcc4934e-3eb0-4e18-98af-67fd2f034df1"></div>

  <?php require "footer.php"; ?>
</body>

<script>
  $(document).ready(function(){
    // carousel autoswipe
    $('.slider').slider({full_width: true});

    // counter
    $('.count').each(function () 
    {
      $(this).prop('Counter',0).animate({
        Counter: $(this).text()
      }, {
        duration: 4000,
        easing: 'swing',
        step: function (now) { $(this).text(Math.ceil(now)); }
      });
    });
  });
</script>
</html>