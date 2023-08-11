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
          <li><a href="index.php">HOME</a></li>
          <li><a class="active" href="shop.php">Shop</a></li>
          <li><a href="blog.php">Blog</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li id="lg-bag">
            <a href="cart.php"
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

    <section id="prodetails" class="section-p1">
        <div class="single-pro-image">
            <img src="IMG/Prime-Blueberry.webp" width="100%" id="MainImg" alt="" />

            <div class="small-img-group">
                <div class="small-img-col">
                    <img src="IMG/Prime-Blueberry.webp" width="200%" class="small-img" alt="" />
                </div>
                <div class="small-img-col">
                    <img src="IMG/Prime-Metamoon-removebg-preview.png" width="200%" class="small-img" alt="" />
                </div>
                <div class="small-img-col">
                    <img src="IMG/Prime-Ice-Pop.webp" width="200%" class="small-img" alt="" />
                </div>
                <div class="small-img-col">
                    <img src="IMG/Prime-Fruit-Punch.webp" width="200%" class="small-img" alt="" />
                </div>
            </div>
        </div>

        <div class="single-pro-details">
            <h6>Home /Prime</h6>
            <h4>PRIME Hydratioin Drink</h4>
            <h2>R45</h2>
            <input type="number" id="quantity" min="1" value="1">
            <button id="addtoCartBtn" class="normal">Add to Cart</button>
            <h4>Product Details</h4>
            <span>PRIME was developed to fill the void where great taste meets function. 
              With bold, thirst-quenching flavors to help you refresh, <br>replenish, and refuel, 
              PRIME is the perfect boost for any endeavor. </span>
        </div>
    </section>

    <section id="product1" class="section-p1">
        <h2>Featured Products</h2>
        <p>Summer Collection New morden Design</p>
        <div class="pro-container">
            <div class="pro">
                <img src="IMG/Prime-Blueberry-Energy-removebg-preview.png" alt="">
                <div class="des">
                    <span>PRIME</span>
                    <h5>BLUE RASBERRY FLAVOURED</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>R45</h4>
                </div>
                <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="IMG/Prime-Orange-Energy-removebg-preview.png" alt="">
                <div class="des">
                    <span>PRIME</span>
                    <h5>ORANGE MANGO FLAVOURED</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>R45</h4>
                </div>
                <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="IMG/MikeandIke-Berry_Blast-removebg-preview.png" alt="">
                <div class="des">
                    <span>MIKEANDIKE</span>
                    <h5>BERRY BLAST</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>R 35</h4>
                </div>
                <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="IMG/SourPatch-BlueRaspberry-removebg-preview.png" alt="">
                <div class="des">
                    <span>SOUR PATCH</span>
                    <h5>BLUE RASPBERRY</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>R50</h4>
                </div>
                <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
            </div>
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
        <div class="personal_logo">Sugar Rush</div>
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

    <script>
      var MainImg = document.getElementById("MainImg");
      var smallimg = document.getElementsByClassName("small-img");

      smallimg[0].onclick = function(){
        MainImg.src = smallimg[0].src;
      }
      smallimg[1].onclick = function(){
        MainImg.src = smallimg[1].src;
      }
      smallimg[2].onclick = function(){
        MainImg.src = smallimg[2].src;
      }
      smallimg[3].onclick = function(){
        MainImg.src = smallimg[3].src;
      }

        // Function to add the product to the cart
        function addToCart() {
        // Retrieve the product ID and quantity
        var productID = <?php echo $productID; ?>;
        var quantity = document.getElementById("quantity").value;

        // Redirect to the cart page with the product ID and quantity as query parameters
        window.location.href = "cart.php?product_id=" + productID + "&quantity=" + quantity;
    }
        // Attach click event listener to the "Add to Cart" button
        var addToCartBtn = document.getElementById("addtoCartBtn");
        addToCartBtn.addEventListener("click", addToCart);
    </script>

    <script src="script.js"></script>
  </body>
</html>
