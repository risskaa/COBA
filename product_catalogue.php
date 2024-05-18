<!DOCTYPE html>
<html lang="en">
<body>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UD. ALIYA KALIPUTU - Product Catalogue</title>
    <?php 
      require_once "header.php";
      require_once "includes/product_catalogue.inc.php";
    ?>
  </head>

  <main >
    <div class="row" style="padding-top: 15px;">
      <div class="col s2 center">

        <div id="rgb_hover" style="position: fixed;">
          <form id="form-filter" action="" method="GET">
            <input type="hidden" name="query" value="<?php if(isset($_GET["query"])) 
              echo($_GET["query"]); ?>">

            <div class="section" style="margin-bottom: 100px;">
              <div class="col unglow">
                <ul id="filter_dropdown" class="dropdown-content black">
                  <li><a class="cyan-text page-title" onclick="select_category(this)">Delete</a></li>
                  <li><a class="cyan-text page-title" onclick="select_category(this)">Jenang</a></li>
                  <li><a class="cyan-text page-title" onclick="select_category(this)">Madu Mongso</a></li>
                  <li><a class="cyan-text page-title" onclick="select_category(this)">Oleh-oleh Khas</a></li>
                </ul>
                <a class="btn dropdown-trigger cyan" data-target="filter_dropdown" style="margin-top: 5px;">
                  <?php
                    $category = -1;
                    if (isset($_GET["category"])) $category = $_GET["category"];

                    if ($category != -1) echo(CATEGORY_NAMES[$category]);
                    else echo(" Kategori");
                    echo("<input type='hidden' name='category' value=$category>");
                  ?>
                  <i class="material-icons right">arrow_drop_down</i>
                </a>
              </div>
            </div>

            <div class="section" style="margin-bottom: 100px">
              <div class="col unglow">
                <ul id="sort_dropdown" class="dropdown-content black">
                  <li><a class="page-title" onclick="select_sort(this)">Delete</a></li>
                  <li><a class="page-title" onclick="select_sort(this)">Harga Terendah</a></li>
                  <li><a class="page-title" onclick="select_sort(this)">Harga Tertinggi</a></li>
                </ul>
                <a class="btn dropdown-trigger" data-target="sort_dropdown" style="margin-top: 5px;">
                  <?php
                    $sort = -1;
                    if (isset($_GET["sort"])) $sort = $_GET["sort"];
                    if ($sort != -1) echo(SORT_NAMES[$sort]);
                    else echo(" Harga");
                    echo("<input type='hidden' name='sort' value=$sort>");
                  ?>
                  <i class="material-icons right">arrow_drop_down</i>
                </a>
              </div>
            </div>

            <div class="section">
              <div class="col unglow">
                <ul id="choose_dropdown" class="dropdown-content black">
                  <li><a class="cyan-text page-title" onclick="select_brand(this)">Delete</a></li>
                  <li><a class="cyan-text page-title" onclick="select_brand(this)">AE</a></li>
                  <li><a class="cyan-text page-title" onclick="select_brand(this)">Aliya</a></li>
                  <li><a class="cyan-text page-title" onclick="select_brand(this)">All It</a></li>
                  <li><a class="cyan-text page-title" onclick="select_brand(this)">Aliza</a></li>
                  <li><a class="cyan-text page-title" onclick="select_brand(this)">Fausta</a></li>
                  <li><a class="cyan-text page-title" onclick="select_brand(this)">Joko SM</a></li>
                  <li><a class="cyan-text page-title" onclick="select_brand(this)">Maura</a></li>
                  <li><a class="cyan-text page-title" onclick="select_brand(this)">Muria</a></li>
                  <li><a class="cyan-text page-title" onclick="select_brand(this)">Sa Bidji</a></li>
                  <li><a class="cyan-text page-title" onclick="select_brand(this)">Sa Niki</a></li>
                  <li><a class="cyan-text page-title" onclick="select_brand(this)">Sarita</a></li>
                  <li><a class="cyan-text page-title" onclick="select_brand(this)">Zayna</a></li>
                  
                </ul>
                <a class="btn dropdown-trigger cyan" data-target="choose_dropdown" style="margin-top: 5px;">
                  <?php
                    $brand = -1;
                    if (isset($_GET["brand"])) $brand = $_GET["brand"];

                    if ($brand != -1) echo(BRAND_NAMES[$brand]);
                    else echo("Select Brand");
                    echo("<input type='hidden' name='brand' value=$brand>");
                  ?>
                  <i class="material-icons right">arrow_drop_down</i>
                </a>
              </div>
            </div>
          </form>
        </div>
      </div>

      <div class="col s9" style="margin-bottom: 80px">
        <!-- item list start -->
        <?php
          searchItems($category, $brand, $sort);
        ?>
      </div>
    </div>
  </main>
</body>

<script>
  $(document).ready(() =>
  {
    form = document.getElementById("form-filter");
    category = document.getElementsByName("category")[0];
    brand = document.getElementsByName("brand")[0];
    sort = document.getElementsByName("sort")[0];
  });

  // dropdown
  var form, category, brand, sort, view;

  var categoryBy = {
    "Delete": -1,
    "Jenang": 0,
    "Madu Mongso": 1,
    "Oleh-oleh Khas": 2
  };

  var brandBy = {
    "Delete": -1,
    "AE":0,
    "Aliya": 1,
    "All It": 2,
    "Aliza": 3,
    "Fausta": 4,
    "Joko SM": 5,
    "Maura": 6,
    "Muria": 7,
    "Sa Bidji": 8,
    "Sa Niki": 9,
    "Sarita": 10,
    "Zayna": 11
  };

  var sortBy = {
    "Delete": -1,
    "Harga Terendah": 0,
    "Harga Tertinggi": 1
  };

  function select_category(selectedItem)
  {
    // get current onclick event index
    var categoryID = categoryBy[selectedItem.textContent];
    // assign current mapped index and output to url with GET method to handle form
    category.value = categoryID;
    form.submit();
  }

  function select_brand(selectedBrand)
  {
    // get current onclick event index
    var brandID = brandBy[selectedBrand.textContent];
    // assign current mapped index and output to url with GET method to handle form
    brand.value = brandID;
    form.submit();
  }

  function select_sort(selectedSort)
  {
    // get current onclick event index
    var sortID = sortBy[selectedSort.textContent];
    // assign current mapped index and output to url with GET method to handle form
    sort.value = sortID;
    form.submit();
  }
</script>
<?php include_once "footer.php"; ?>
</html>