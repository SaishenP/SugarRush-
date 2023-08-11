<!DOCTYPE html>
<html lang="en">
<?php include "Head.php" ?>
<body>
<?php include "Connection.php";
      include "Nav.php" ?>

    <section id="hero">
        <h4>Trade-in-offer</h4>
        <h2>Super value deals</h2>
        <h1>On all products</h1>
        <p>Save more with coupons & up to 70% off!</p>
        <button>Shop Now</button>
    </section>

    <section id="feature" class="section-p1">
        <div class="fe-box">
            <img src="IMG/Freeshipping.png" alt="">
            <h6>Free Shipping</h6>
        </div>
        <div class="fe-box">
            <img src="IMG/OnlineOrder.png" alt="">
            <h6>Online Order</h6>
        </div>
        <div class="fe-box">
            <img src="IMG/SaveMoney.png" alt="">
            <h6>Save Money</h6>
        </div>
        <div class="fe-box">
            <img src="IMG/Promotions1.png" alt="">
            <h6>Promotions</h6>
        </div>
        <div class="fe-box">
            <img src="IMG/HappySell.png" alt="">
            <h6>Happy Sell</h6>
        </div>
        <div class="fe-box">
            <img src="IMG/247Support.png" alt="">
            <h6>24hr Support</h6>
        </div>
    </section>

    <section id="product1" class="section-p1">
        <h2>Featured Products</h2>
        <p>Summer Collection New Modern Design</p>
        <?php
                //connect to the database
                $host = "localhost";
                $username = "root";
                $password = "";
                $dbname = "sugar_rush";

                //creating the connection to the database
                $connection = mysqli_connect($host, $username, $password, $dbname);

                //checking if the connection works
                if (!$connection) {
                    die("This Connection has Failed!" . mysqli_connect_error());
                }

                //fetching all products from the database
                $allProducts = $connection->query("SELECT productID,ProductName, ProductDescription, ProductImage, ProductPrice FROM product_table");


                //check if any products exist
                if ($allProducts->num_rows > 0) {
                    // Loop through each product
                    while ($product = $allProducts->fetch_assoc()) {
                        // Generate a unique section ID for each product
                        $sectionID = 'product' . $product['productID'];

                    // Displaying the product information using PHP
                        echo '<section id="' . $sectionID . '" class="section-p1">';
                        echo '  <div class="pro-container">';
                        echo '    <div class="pro" onclick="window.location.href=\'sproduct.php?ProductID=' . $product['productID'] . '\';">';
                        echo '      <img src="' . $product['ProductImage'] . '" alt="" />';
                        echo '      <div class="des">';
                        echo '        <span>' . $product['ProductName'] . '</span>'; // Display the product name
                        echo '        <h5>' . $product['ProductDescription'] . '</h5>';
                        echo '        <div class="star">';
                        echo '          <i class="fas fa-star"></i>';
                        echo '          <i class="fas fa-star"></i>';
                        echo '          <i class="fas fa-star"></i>';
                        echo '          <i class="fas fa-star"></i>';
                        echo '        </div>';
                        echo '        <h4>R' . $product['ProductPrice'] . '</h4>';
                        echo '      </div>';
                        echo '      <a href="cart.php?ProductID=' . $product['productID'] . '"><i class="fa fa-shopping-cart cart"></i></a>';
                        echo '    </div>';
                        echo '  </div>';
                        echo '</section>';
                    }
                } else {
                    echo "No products found.";
                }

                //closing the database connection
                $connection->close();
                ?>
                        
    </section>

    <section id="banner" class="section-m1">
        <h4>Do you<span> Love Candy </span>as MUCH AS WE DO?</h4>
        <h2>Up to <span>70% OFF</span> All CANDY AND BEVERAGES </h2>
        <button class="normal">Explore More</button>

    </section>

    <section id="product1" class="section-p1">
        <h2>New Arrivals</h2>
        <p>Summer VIBES, Cool Down with some BEVERAGES</p>
        <?php
            //connect to the database
            $host = "localhost";
            $username = "root";
            $password = "";
            $dbname = "sugar_rush";

            //creating the connection to the database
            $connection = mysqli_connect($host, $username, $password, $dbname);

            //checking if the connection works
            if (!$connection) {
                die("This Connection has Failed!" . mysqli_connect_error());
            }

            //fetching all products from the database
            $allProducts = $connection->query("SELECT productID,ProductName, ProductDescription, ProductImage, ProductPrice FROM product_table");


            //check if any products exist
            if ($allProducts->num_rows > 0) {
                // Loop through each product
                while ($product = $allProducts->fetch_assoc()) {
                    // Generate a unique section ID for each product
                    $sectionID = 'product' . $product['productID'];

                // Displaying the product information using PHP
                    echo '<section id="' . $sectionID . '" class="section-p1">';
                    echo '  <div class="pro-container">';
                    echo '    <div class="pro" onclick="window.location.href=\'sproduct.php?ProductID=' . $product['productID'] . '\';">';
                    echo '      <img src="' . $product['ProductImage'] . '" alt="" />';
                    echo '      <div class="des">';
                    echo '        <span>' . $product['ProductName'] . '</span>'; // Display the product name
                    echo '        <h5>' . $product['ProductDescription'] . '</h5>';
                    echo '        <div class="star">';
                    echo '          <i class="fas fa-star"></i>';
                    echo '          <i class="fas fa-star"></i>';
                    echo '          <i class="fas fa-star"></i>';
                    echo '          <i class="fas fa-star"></i>';
                    echo '        </div>';
                    echo '        <h4>R' . $product['ProductPrice'] . '</h4>';
                    echo '      </div>';
                    echo '      <a href="cart.php?ProductID=' . $product['productID'] . '"><i class="fa fa-shopping-cart cart"></i></a>';
                    echo '    </div>';
                    echo '  </div>';
                    echo '</section>';
                }
            } else {
                echo "No products found.";
            }

            //closing the database connection
            $connection->close();
            ?>
    </section>

    <section id="newsletter" class="section-p1 section-m1">
      <div class="newstext">
        <h4>Sign Up for Newsletters</h4>
        <p>
          Get E-mail Updates about our latest shop and
          <span>Special offers.</span>
        </p>
      </div>
      <div class="form">
        <input type="text" placeholder="Your email address" />
        <button class="normal">Sign Up</button>
      </div>
    </section>

    <footer class="section-p1">
        <div class="col">
            <h4>Contact</h4>
            <p><strong>Address:</strong>Drive </p>
            <p><strong>Phone:</strong>Drive </p>
            <p><strong>Hours:</strong>Drive </p>
            <div class="follow">
                <h4>Follow us</h4>
                <div class="icon">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram-f"></i>
                    <i class="fab fa-youtube"></i>
                </div>
            </div>
        </div>
        <div class="col">
            <h4>About</h4>
            <a href="#">About us</a>
            <a href="#">Delivery information </a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & Conditions</a>
            <a href="#">Conditions Us</a>
        </div>
        <div class="col">
            <h4>My Account</h4>
            <a href="#">Sign In</a>
            <a href="#">View Cart </a>
            <a href="#">My Wishlist</a>
            <a href="#">Track My Order</a>
            <a href="#">Help</a>
        </div>
        <div class="col install">
            <h4>Install Sugar Rush </h4>
            <p>From App Store or Google Play</p>
            <div class="row">
                <img src="IMG/app-store.png" alt="">
                <img src="IMG/play-store.png" alt="">
            </div>
            <p>Secrured Payment Gatways</p>
            <img src="" alt="">
        </div>
        <div class="copyright">
            <p> 2023, Saishen Pillay</p>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>