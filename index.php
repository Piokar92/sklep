<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>REPRESENT</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link href="resources/css/style.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/10eac207b5.js" crossorigin="anonymous"></script>
  <script
  src="https://code.jquery.com/jquery-3.6.1.js"
  integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
  crossorigin="anonymous"></script>
  
</head>

<body>

  <div class="container-fluid">
    <div class="row navigation-bar">
      <div class="col-md-2 brand" style="padding-top:5px;">
        <a href="index.php" class="fw-light logo">REPRESENT</a>
      </div>

      <div class="col-md">
        <button class="btn btn-category dropdown-toggletype" type="button" data-bs-toggle="dropdown"
          aria-expanded="false">
          ABOUT US
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">ABOUT</a></li>
          <li><a class="dropdown-item" href="#">MISSION</a></li>
          <li><a class="dropdown-item" href="#">STORES</a></li>
          <li><a class="dropdown-item" href="#">CONTACT</a></li>
        </ul>
        <button class="btn btn-category dropdown-toggletype" type="button" data-bs-toggle="dropdown"
          aria-expanded="false">
          CATEGORY
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">HOODIES</a></li>
          <li><a class="dropdown-item" href="#">ACCESSORIES</a></li>
          <li><a class="dropdown-item" href="#">T-SHIRTS</a></li>
        </ul>
        <button class="btn btn-category dropdown-toggletype" type="button" data-bs-toggle="dropdown"
          aria-expanded="false">
          <span class="sale">SALE</span>
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">HOODIES</a></li>
          <li><a class="dropdown-item" href="#">ACCESSORIES</a></li>
          <li><a class="dropdown-item" href="#">T-SHIRTS</a></li>
        </ul>
        <button class="btn btn-category dropdown-toggletype" type="button" data-bs-toggle="dropdown"
          aria-expanded="false">
          INSPIRATIONS
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">INFLUENCERS</a></li>
          <li><a class="dropdown-item" href="#">STREET FASHION</a></li>
          <li><a class="dropdown-item" href="#">INSTAGRAM</a></li>
        </ul>
      </div>
      <div class="col-md text-end">
        <a href="#" class="notification">
          <button class="btn general" data-bs-toggle="modal"
                data-bs-target="#basketModal"><i class="fas fa-cart-arrow-down"></i></button>
          <span class="badge" id="badge">0</span>
        </a>
        <a href="views/login.php" class="btn btn-category">SIGN IN</a>
      </div>
    </div>

    <div class="row sale-section" style=" background-color: white">
      <?php
      $clothes =
        [
          ['src' => 'photos/bluza1.jpeg', 'price' => 299, 'name' => 'Grey Represent Hoodie'],
          ['src' => 'photos/bluza2.jpeg', 'price' => 299, 'name' => 'Black Represent Hoodie'],
          ['src' => 'photos/bluza3.jpeg', 'price' => 299, 'name' => 'Eagle Represent Hoodie'],
          ['src' => 'photos/bluza4.jpeg', 'price' => 299, 'name' => 'Orange Represent Hoodie'],
          ['src' => 'photos/bluza5.jpeg', 'price' => 299, 'name' => 'Dog Represent Hoodie'],
          ['src' => 'photos/bluza6.jpeg', 'price' => 299, 'name' => 'Tiger Represent Hoodie'],
          ['src' => 'photos/koszulka1.jpeg', 'price' => 99, 'name' => 'Black Represent T-shirt'],
          ['src' => 'photos/koszulka2.jpeg', 'price' => 99, 'name' => 'Grey Represent T-shirt'],
        ];
      foreach ($clothes as $cloth) {
      ?>
      <div class="col-md-4 text-center p-2">
        <div class="sale-frame p-3">
          <div class="row gy-2">
            <div class="col-12 img-frame">
              <img class="offer-photo" src="<?= $cloth['src']; ?>" height="250" width="auto">
            </div>
            <div class="col-12 p-2">
              <a href="" class="offer-title">
                <?= $cloth['name'] ?>
              </a>
            </div>
            <div class="col-12 text-center">
              <span class="offer-price ms-2 me-2">$ <?= $cloth['price'] ?></span>
              <button type="button" class="btn btn-sm mt-1 cart-button"
              data-src="<?= $cloth['src']; ?>" data-name="<?= $cloth['name'] ?>" data-price="<?= $cloth['price'] ?>"
              >BUY
              </button>
              <button type="button" class="btn btn-sm mt-1" data-bs-toggle="modal"
                data-bs-target="#ClothesSizeModal">DETAILS<i class="fas fa-search ms-1"></i>
              </button>

            </div>
          </div>
        </div>
      </div>

      <?php
      }
      ?>
    </div>

    <div class="modal fade" id="ClothesSizeModal" tabindex="-1" aria-labelledby="CLothesSizeModalLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="Sizechart">SIZE CHART</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <?php
            include "components/size_table.html"
              ?>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CLOSE</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="basketModal" tabindex="-1" aria-labelledby="basketModalLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Your Basket</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <span id="basketMessage">Your Basket is empty...</span>
            <table id="basketTable" class="table w-100 table-bordered border-1 text-center">
                <tbody>
                  <tr class="total-row">
                    <td class="fw-bold">Total: </td>
                    <td>$ <span id="totalBasketPrice">0</span></td>
                  </tr>
                </tbody>
            </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CLOSE</button>
          </div>
        </div>
      </div>
    </div>

    <script src="resources/js/index.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
      crossorigin="anonymous"></script>

</body>

</html>