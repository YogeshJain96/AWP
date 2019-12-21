<div class="col-lg-12 col-md-12 col-sm-12">
    <div class="list-group list-group-horizontal-lg list-group-horizontal-md">
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

        $sql = "SELECT * FROM categories";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
        ?>

                <button type="button" class="list-group-item list-group-item-action">
                    <?php echo $row["name"];
                    ?>
                </button>

        <?php   }
        } else {
            echo "No Categories";
        }
        $conn->close();
        ?>
    </div>
</div>