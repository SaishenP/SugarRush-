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
          <li><a href="shop12.php">Shop</a></li>
          <li><a href="blog.php">Blog</a></li>
          <li><a href="about.php">About</a></li>
          <li><a class="active" href="contact.php">Contact</a></li>
          <li id="lg-bag">
            <a href="cart.php"
              ><i class="fa fa-shopping-basket" aria-hidden="true"></i
            ></a>
          </li>
          <a href="#" id="close"><i class="far fa-times"></i></a>
        </ul>
      </div>
      <div id="mobile">
        <a href="cart.php"
          ><i class="fa fa-shopping-basket" aria-hidden="true"></i
        ></a>
        <i id="bar" class="fas fa-outdent"></i>
      </div>
    </section>

    <section id="page-header" class="about-header">
      <h2>#Lets Tallk</h2>
      <p>Leave a message</p>
    </section>

    <section id="contact-details" class="section-p1">
      <div class="details">
        <span>GET IN TOUCH</span>
        <h2>Visit one of our agency locations or contact us today</h2>
        <h3>Head Office</h3>
        <div>
          <li>
            <i class="fa fa-map"></i>
            <p>56 Glassford Street Glasglow New York</p>
          </li>
          <li>
            <i class="fa fa-envelope"></i>
            <p>Contact@example.com</p>
          </li>
          <li>
            <i class="fa fa-phone-alt"></i>
            <p>074 556 3675</p>
          </li>
          <li>
            <i class="fa fa-clock"></i>
            <p>Monday to Saturday: 9:00am to 16:00pm</p>
          </li>
        </div>
      </div>

      <div class="map">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3580.5007807491747!2d28.114633876310503!3d-26.180383163006034!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e95120165555555%3A0x4f4213be4ebbe2ee!2sEastgate%20Shopping%20Centre!5e0!3m2!1sen!2sza!4v1684133081014!5m2!1sen!2sza"
          width="600"
          height="450"
          style="border: 0"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
        ></iframe>
      </div>
    </section>

    <section id="form-details">
      <form action="">
        <span>Leave A MESSAGE</span>
        <h2>We love to hear from you</h2>
        <input type="text" placeholder="Your Name" />
        <input type="text" placeholder="E-mail" />
        <input type="text" placeholder="Subject" />
        <textarea
          name=""
          id=""
          cols="30"
          rows="10"
          placeholder="Your Message"
        ></textarea>
        <button class="normal">Submit</button>
      </form>

      <div class="people">
        <div>
          <img src="IMG/Person3.jpg" alt="" />
          <p><span>John Doe</span>Senior Marketing Manager<br />Phone:+ 011 123
             7788 <br/>Email:JohnDoe@Example.com</p>
        </div>
        <div>
          <img src="IMG/Person2.jpg" alt="" />
          <p><span>William Smith</span>Senior Stock Manager<br />Phone:+ 011 321
             7878 <br />Email: William@example.com</p>
        </div>
        <div>
          <img src="IMG/Person1.jpg" alt="" />
          <p><span>Emma Stone</span>Senior Branch Manager<br />Phone:+ 011 231
             8787 <br />Email: Emma@Example.com</p>
        </div>
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
           <img src="IMG/app-store.png" alt="">
            <img src="IMG/play-store.png" alt="">
        </div>
        <p>Secrured Payment Gatways</p>
        <img src="" alt="" />
      </div>
      <div class="copyright">
        <p>2023, Saishen Pillay</p>
      </div>
    </footer>

    <script src="script.js"></script>
  </body>
</html>
