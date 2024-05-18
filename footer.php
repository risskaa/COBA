<footer class="page-footer" style="margin-top: 120px; box-shadow: 0px 0px 2px white; background-color: rgb(17,17,17)">
  <div class="row wide-container">
  <div class="col s3">
		  <h4 class="white-text bold underline">UD. ALIYA KALIPUTU</h4>
      <p class="grey-text text-lighten-4">Pusat Jenang Kudus dan Oleh-oleh Khas.</p>
    </div>
    <div class="col s2">
		 <h5 class="white-text bold"  style=' text-decoration: underline'>Support Kami</h5>
      <p><a class='dropdown-trigger white-text bold' href='#' data-target='dropdown1'>Layanan Kami
        <i class='material-icons' style=' text-decoration: none !important; display: inline-flex; vertical-align: top;'>arrow_drop_down</i>
      </a></p>
      <ul id='dropdown1' class='dropdown-content white'>
        <li><a href='aboutUs.php' class='black-text bold'>Tentang Kami</a></li>
        <li class='divider' tabindex='-1'></li>
        <li><a href='index.php' class='black-text bold'>Home</a></li>
        <li><a href='contactUs.php' class='black-text bold'>Toko Kami</a></li>
        <li><a href='produkkami.php' class='black-text bold'>Produk Kami</a></li>
      </ul>
    </div>
    <div class="col s2">	
		<h5 class="white-text bold">Toko Buka</h5>
      <p class="bold">
        Senin-Kamis : <br> 08.00am to 8.00pm
      </p>
      <p class="bold">
        Jl. Sosroksrtono gang 4 No. 288, <br>
        Kaliputu, Kudus <br> Jawa Tengah
      </p>
    </div>
    <div class="col s2">
      <h5 class="white-text bold">Ikuti Kami</h5>
      <a href="https://www.instagram.com/jenangkudus_aliya" style="color: #fff" target="_blank">
          <i class="social-icon" data-feather="instagram"></i>
        </a>

        <!-- Include Feather Icons JavaScript (optional if you want to use JavaScript features of Feather Icons) -->
        <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
        <script>
          // Initialize Feather Icons
          feather.replace();

          // Add click event listener to the icon
          document
            .querySelector(".social-icon")
            .addEventListener("click", function () {
              window.open(
                "https://www.instagram.com/jenangkudus_aliya",
                "_blank"
              );
            });
        </script>
      <a href="https://www.facebook.com/jenang.aliya" style="color: #fff" target="_blank">
          <i class="social-icon" data-feather="facebook" ></i></a>
		
		

        <!-- Include Feather Icons JavaScript (optional if you want to use JavaScript features of Feather Icons) -->
        <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
        <script>
          // Initialize Feather Icons
          feather.replace();

          // Add click event listener to the icon
          document
            .querySelector(".social-icon")
            .addEventListener("click", function () {
              window.open("https://www.facebook.com/jenang.aliya", "_blank");
            });
        </script>
      <a href="https://www.youtube.com/@kreatorgabut6577" style="color: #fff" target="_blank">
          <i class="social-icon" data-feather="youtube" data-feather-size="24"></i>
        </a></li>
        <!-- Include Feather Icons JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
        <script>
          // Initialize Feather Icons
          feather.replace();

          // Add click event listener to the icon
          document
            .querySelector(".social-icon")
            .addEventListener("click", function () {
              window.open(
                "https://www.youtube.com/@kreatorgabut6577",
                "_blank"
              );
            });
        </script>
    </div>
    <div class="col s3">
      <h5 class="white-text bold ">Logo Kami</h5>
      <img src="static/images/logo.png" />
    </div>
  </div>

   <center><a href="" style="color: #fff">Created by UD. ALIYA KALIPUTU. &copy|2024. </a> </p>
     </center>
  </div>

  <script>
    $(document).ready(function() {
      $('.dropdown-trigger').dropdown({
        coverTrigger: false
      });

      $('#pagination').pageMe({
        pagerSelector:'#myPager',
        activeColor: 'blue',
        prevText:'Previous',
        nextText:'Next',
        showPrevNext:true,
        hidePageNumbers:false,
        perPage:5
      });
      
    })
  </script>

</footer>