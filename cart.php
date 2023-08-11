<?php
// Start the session
session_start();

// Check if the cart array exists in the session, and if not, create it
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

// Function to add a product to the cart
function addToCart($product) {
    // Check if the product is already in the cart
    if (isset($_SESSION['cart'][$product['ProductID']])) {
        // If yes, increment the quantity
        $_SESSION['cart'][$product['ProductID']]['quantity']++;
    } else {
        // If not, add the product to the cart with quantity 1
        $_SESSION['cart'][$product['ProductID']] = array(
            'name' => $product['ProductName'],
            'price' => $product['ProductPrice'],
            'quantity' => 1
        );
    }
}

// Check if the product ID and quantity are provided in the query parameters
if (isset($_GET['ProductID']) && isset($_GET['quantity'])) {
    // Retrieve the product ID and quantity from the query parameters
    $productID = $_GET['ProductID'];
    $quantity = $_GET['quantity'];

    // Query the database to get the product details
    // Replace "your_database_username", "your_database_password", and "your_database_name" with your actual database credentials
    $conn = new mysqli("localhost", "your_database_username", "your_database_password", "your_database_name");

    // Check for any connection errors
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute the query to retrieve the product details
    $stmt = $conn->prepare("SELECT * FROM product_table WHERE ProductID = ?");
    $stmt->bind_param("i", $productID);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if the product exists in the database
    if ($result->num_rows > 0) {
        $product = $result->fetch_assoc();

        // Add the product to the cart
        addToCart($product);
    }

    // Close the database connection
    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Trial</title>
    <link rel="stylesheet" href="style.css" />
    <script
      src="https://kit.fontawesome.com/dd8ca4d5e5.js"
      crossorigin="anonymous"
    ></script>
</head>
<body>
<section id="header">
      <div class="personal_logo">Sugar Rush</div>

      <div>
        <ul id="navbar">
          <li><a href="index.php">Home</a></li>
          <li><a href="shop.php">Shop</a></li>
          <li><a href="blog.php">Blog</a></li>
          <li><a href="about.php">About</a></li>
          <li><a  href="contact.php">Contact</a></li>
          <li id="lg-bag">
            <a class="active" href="cart.php"
              ><i class="fa fa-shopping-basket" aria-hidden="true"></i
            ></a>
          </li>
          <a href="#" id="close"><i class="far fa-times"></i></a>
        </ul>
      </div>
      <div id="mobile">
        <a href="cart.html"
          ><i class="fa fa-shopping-basket" aria-hidden="true"></i
        ></a>
        <i id="bar" class="fas fa-outdent"></i>
      </div>
     </section>

    <section id="page-header" class="about-header">
      <h2>#Lets Buy</h2>
      <p>Everything you wanted</p>
      
    
</section>

    <section id="cart" class="section-p1">
        <table width="100%">
            <thead>
                <tr>
                    <td>Remove</td>
                    <td>Image</td>
                    <td>Product</td>
                    <td>Price</td>
                    <td>Quantity</td>
                    <td>Subtotal</td>
                </tr>
            </thead>
            <tbody id="data-output">
                <?php
                // Iterate through the products in the cart and display them
                foreach ($_SESSION['cart'] as $productID => $item) {
                    $subtotal = $item['price'] * $item['quantity'];
                    ?>
                    <tr>
                        <td><i class="far fa-times-circle"></i></td>
                        <td><img src="<?php echo $item['ProductImage']; ?>" alt=""></td>
                        <td><?php echo $item['ProductName']; ?></td>
                        <td><?php echo $item['ProductPrice']; ?></td>
                        <td><input type="number" value="<?php echo $item['quantity']; ?>"></td>
                        <td><?php echo $subtotal; ?></td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </section>

    <section id="cart-add" class="section-p1">
        <div id="coupon">
            <h3>Apply Coupon</h3>
            <div>
                <input type="text" placeholder="Enter Your Coupon">
                <button class="normal">Apply</button>
            </div>
        </div>

        <div id="subtotal">
            <h3>Cart Totals</h3>
            <table>
                <tr>
                    <td>Cart Subtotal</td>
                    <td>$ 335</td>
                </tr>
                <tr>
                    <td>Shipping</td>
                    <td>Free</td>
                </tr>
                <tr>
                    <td><strong>Total</strong></td>
                    <td><strong>$ 335</strong></td>
                </tr>
            </table>
            <button class="normal">Proceed to checkout</button>
        </div>
    </section>

    <footer class="section-p1">
      <div class="col">
        <h4>Contact</h4>
        <p><strong>Address:</strong>Drive</p>
        <p><strong>Phone:</strong>Drive</p>
        <p><strong>Hours:</strong>Drive</p>
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
        <h4>Install Sugar Rush</h4>
        <p>From App Store or Google Play</p>
        <div class="row">
          <img src="" alt="" />
          <img src="" alt="" />
        </div>
        <p>Secrured Payment Gatways</p>
        <img src="" alt="" />
      </div>
      <div class="copyright">
        <p>2023, Saishen Pillay</p>
      </div>
    </footer>

    <script src="script.js"></script>
    <script src="script1.js"></script>
</body>
</html>

<?php