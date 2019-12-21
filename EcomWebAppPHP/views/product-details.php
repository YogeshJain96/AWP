<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="Ecommerce,responsive,bootstrap4" />
  <meta name="author" content="Ontrooo(Yogesh Jain)" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../css/bootstrap.min.css" />

  <title>EKart | Responsive Ecommerce Site &mdash; By Ontrooo</title>
</head>

<body>
  <h1>.</h1>

  <?php //Including menu
  include_once('navbarHeader.php');
  ?>
  <main role="main">
    <div class="container">
      <div class="row" style="margin-top: 20px">
      </div>
      <!-- /.row -->

      <!-- Product Details -->

      <hr class="featurette-divider" />
      <?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "theone_ecom";

      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);
      // Check connection
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      $pid = $_GET["pid"];
      $sql = "SELECT * FROM products where pid=" . $pid;

      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
      ?>
          <div class="row">
            <div class="col-lg-5 col-md-6 col-sm-12">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="380" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap">
                <rect width="100%" height="100%" fill="#868e96"></rect>
                <text x="30%" y="50%" fill="#dee2e6" dy=".3em">
                  Product image here
                </text>
              </svg>
              <!-- <img src="" class="card-img-top" alt="..." /> -->
            </div>
            <div class="col-lg-7 col-md-6 col-sm-12">
              <h3><?php echo $row["name"] ?></h3>
              <h3><span class="badge badge-dark">Rs.<?php echo $row["price"] ?></span></h3>
              <p class="text-muted">
                <?php echo $row["description"] ?>Product description here. Product
                description here. Product description here. Product description
                here.
              </p>

              <a href="#" class="btn btn-primary">
                Add to Cart
              </a>
              <a href="#" class="btn btn-primary">
                Buy Now
              </a>
              <div class="card" style="width: 18rem; margin-top: 1em">
                <div class="card-header">
                  Product Specifications
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Weight:100gms</li>
                  <li class="list-group-item">1 year Warranty</li>
                  <li class="list-group-item">Eco-Friendly</li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Reviews -->

          <hr class="featurette-divider" />

          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
              <h4>Reviews</h4>
              <ul class="list-unstyled">
                <li class="media">
                  <img src="../img/user.png" class="mr-3" height="30em" alt="..." />
                  <div class="media-body">
                    <h5 class="mt-0 mb-1">Reviewer_Name</h5>
                    <h6>Review_Headline</h6>
                    <div class="row">
                      <div class="col-lg-9 col-md-9 col-sm-12">
                        <p class="text-muted">
                          Review description here. Review description here. Review
                          description here. Review description here. Review
                          description here. Review description here. Review
                          description here. Review description here. Review
                          description here.
                        </p>
                      </div>
                      <div class="col-lg-3 col-md-3 col-sm-12">
                        Was this helpful?<br />
                        <button type="button" class="btn btn-outline-success btn-sm">
                          yes
                        </button>
                        <button type="button" class="btn btn-outline-danger btn-sm">
                          no
                        </button>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="media">
                  <img src="../img/user.png" class="mr-3" height="30em" alt="..." />
                  <div class="media-body">
                    <h5 class="mt-0 mb-1">Reviewer_Name</h5>
                    <h6>Review_Headline</h6>
                    <div class="row">
                      <div class="col-lg-9 col-md-9 col-sm-12">
                        <p class="text-muted">
                          Review description here. Review description here. Review
                          description here. Review description here. Review
                          description here. Review description here. Review
                          description here. Review description here. Review
                          description here.
                        </p>
                      </div>
                      <div class="col-lg-3 col-md-3 col-sm-12">
                        Was this helpful?<br />
                        <button type="button" class="btn btn-outline-success btn-sm">
                          yes
                        </button>
                        <button type="button" class="btn btn-outline-danger btn-sm">
                          no
                        </button>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="media">
                  <img src="../img/user.png" class="mr-3" height="30em" alt="..." />
                  <div class="media-body">
                    <h5 class="mt-0 mb-1">Reviewer_Name</h5>
                    <h6>Review_Headline</h6>
                    <div class="row">
                      <div class="col-lg-9 col-md-9 col-sm-12">
                        <p class="text-muted">
                          Review description here. Review description here. Review
                          description here. Review description here. Review
                          description here. Review description here. Review
                          description here. Review description here. Review
                          description here.
                        </p>
                      </div>
                      <div class="col-lg-3 col-md-3 col-sm-12">
                        Was this helpful?<br />
                        <button type="button" class="btn btn-outline-success btn-sm">
                          yes
                        </button>
                        <button type="button" class="btn btn-outline-danger btn-sm">
                          no
                        </button>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
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
  <script src="../js/jquery-3.4.1.slim.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
</body>

</html>
<?php
        }
      } else {
        echo "No Such Poduct";
      }
      $conn->close();
?>