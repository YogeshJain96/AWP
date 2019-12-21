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
    $sql = "SELECT * FROM products";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      // output data of each row
      while ($row = $result->fetch_assoc()) {
        echo "
          <div class='col-lg-4 col-md-6 col-sm-12'>
            <div class='card' style='width: 18rem; margin:auto; margin-bottom: 2em; '>
              <svg class='bd-placeholder-img card-img-top' width='100%' height='180' xmlns='http://www.w3.org/2000/svg' preserveAspectRatio='xMidYMid slice' focusable='false' role='img' aria-label='Placeholder: Image cap'>
                <rect width='100%' height='100%' fill='#868e96'></rect>
                <text x='20%' y='50%' fill='#dee2e6' dy='.3em'>
                  Product image here
                </text>
              </svg>
              <!-- <img src=' class='card-img-top' alt='...' /> -->
              <div class='card-body'>
                <h5 class='card-title'>" . $row["name"] . "</h5>
                <p class='card-text card-subtitle text-muted'>
                " . $row["description"] . "ription" . $row["category"] . "
                </p>
                <p class='text-right '>
                  <span class='badge badge-dark'>Rs." . $row["price"] . "</span>
                </p>
                <hr />
                <div class='text-center'>
                  <a href='#' class='btn btn-primary' style='margin-right: 0.5em'>
                    Add to Cart
                  </a>
                  <a href='/AWP_0227_0234/EcomWebApp/views/product-details.php?pid=" . $row["pid"] . "' class='btn btn-primary'>
                    View Details
                  </a>
                </div>
              </div>
            </div>
          </div>";
      }
    } else {
      echo "No Categories";
    }
    $conn->close();
    ?>