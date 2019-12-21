<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="Ecommerce,responsive,bootstrap4" />
  <meta name="author" content="Ontrooo(Yogesh Jain)" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css" />

  <title>EKart | Responsive Ecommerce Site &mdash; By Ontrooo</title>
</head>

<body>
  <h1>.</h1>

  <?php //Including menu
  include_once('views/navbarHeader.php');
  ?>

  <main role="main">
    <div class="container">
      <div class="row" style="margin-top: 20px">
      <?php
        include_once('views/productCategories.php');
        ?>
      </div>
      <!-- /.row -->

      <!-- Products -->
      <hr class="featurette-divider" />
      <?php
      if (isset($_SESSION["user"])) {
        //echo $_SESSION["user"];
        $user = $_SESSION["user"];
        if ($user != "Invalid") {
          echo "<div class='alert alert-success' role='alert'>
                Login Success!! Welcome " . $user . "
              </div>";
          echo "<script>
                  document.getElementById('loginBtn').style.display = 'none';
                  document.getElementById('logoutBtn').style.display = 'block';
                  logoutBtn.onclick = function() { window.location='serverScripts/logout.php';};
              </script>";
        } else echo "<div class='alert alert-danger' role='alert'>
                   Login Failed!!
                </div>";
      }
      ?>
      <div class="row" id="productList">
        <?php
        include_once('views/productList.php');
        ?>
      </div>

      <hr class="featurette-divider" />

      <!-- /END THE FEATURETTES -->
    </div>
    <!-- /.container -->

    <!-- FOOTER -->
    <footer class="container">
      <p class="float-right"><a href="#">Back to top</a></p>
      <p>&copy; 2019 Ontrooo &middot; <a href="#">0227</a></p>
    </footer>
  </main>
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="js/jquery-3.4.1.slim.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>