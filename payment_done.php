<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UD. ALIYA KALIPUTU - Thank you</title>
  <?php include "header.php"; ?>
</head>
<body>
  <div class="container center-align" style="margin-top: 100px;">
    <div class="rounded-card-parent" style="margin-right: 200px; margin-left: 200px;">
      <div class="rounded-card card-content">
        <h4 class="page-title green-text">Terima kasih sudah melakukan pembayaran.</h4>
        <p>Terimakasih Sudah Berbelanja di UD. ALIYA KALIPUTU, Pesananmu sedang diproses silahkan tunggu barangmu dirumah ya.. :).</p>
        <div class="card-action" style='margin-top: 50px'>
          <a class="white-text btn" href="index.php">Kembali ke Halaman Utama</a>
          <a style='margin-left: 20px' class="white-text btn" href='cart.php?member_id=<?php echo($memberID); ?>'>Cek Order</a>
          <br>
          <a style='margin-top: 20px' class="white-text btn" href="https://wa.link/uh2ugq." target="_blank" style="display: inline-block; background-color: #25D366; color: #fff; padding: 10px 20px; border-radius: 5px; text-decoration: none; font-size: 16px;">
          <b>Konfirmasi Pesanan!!</b></a>
        
        <!-- Sertakan Font Awesome CDN untuk ikon WhatsApp -->
          <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

        </div>
      </div>
    </div>
  </div>

</body>
<?php include "footer.php"; ?>
</html>