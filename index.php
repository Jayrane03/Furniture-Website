<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
  header("location: login2.php");
    exit;

}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Furniture Shop-Tirupati Balaji</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <script src="https://use.fontawesome.com/0787724f3c.js"></script>
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  </head>
  <body>
    <style>
        .alert {
            position: absolute;
            top: 0;
            background-color: #d1e7dd;
            color: #0f5132;
            border-color: #badbcc;
            padding: 1rem 1rem;
            border-radius: .25rem;
            width: 50%;
            text-align: center;
            margin-top: 8px;
        }

        .alert-danger {
            color: #842029;
            background-color: #f8d7da;
            border-color: #f5c2c7;
            border-radius: .25rem;
            padding: 1rem 1rem;
            width: 50%;
            text-align: center;
            margin-top: 8px;
        }
    </style>
    <!-- header -->   
    <header class = "header">
      <div class = "head-top">
        <a href = "index.php" class = "brand-name">
          TIRUPATI
          <span>BALAJI</span>
        </a>
        <div class="icon-list">
          <span class = "head-icon">
            <a href="index.php">  <i class = "fas fa-home"></i></a>
          </span>
        
          <span class = "head-icon log">
           <a href="store_one.php">Store</a>
          </span>
          <span class = "head-icon">
           <a href="cart_one.php"><i class="fa fa-shopping-cart"></i></a>
          </span>
          <span class = "head-icon log">
           <a href="logout.php"> Log-out</a>
          </span>

      
        </div>
      </div>

      <div class = "head-body container">
        <div class = "head-body-content">
         
           <?php  
    echo "<h2 style='text-transform: capitalize;font-size:40px;letter-spacing:1px; margin:20px 0px;'>    welcome    {$_SESSION['username']}</h2>";
  ?>
      <h1> to  Tirupati Balaji furniture</h1>
          <p class = "text">
            Hello Visitors!! We are Startup company of furnitures located in Tirupati 
            We have Varities of furnitures available in our shop so what are u waiting for 
            go and purchase it. Contact Bhuvaneshwar Mudaliar - 8454917075 for more details.
          </p>
          <a href="store_one.php">
  <button type="button" class="btn">
    shop now
  </button>
</a>

        </div>

        <div class = "head-body-img">
          <img src = "./Images/round-chair.png" alt = "header image">
        </div>
      </div>
    </header>
 
    <!-- end of header -->

    <!-- trending product -->
    <section class = "trend">
      <div class = "container">
        <div class = "title">
          <h4>trending now</h4>
          <h2>best selling product</h2>
        </div>

        <div class = "trend-grid">
          <!-- item -->
          <div class = "trend-item">
            <img src = "./Images/best-selling-1.png" alt = "best product">
            <div class = "trend-item-content">
              <h4>Brown Sofa With Pillows</h4>
              <h4>₹20,000/-</h4>
              <div class = "stars">
                <span><i class = "fas fa-star"></i></span>
                <span><i class = "fas fa-star"></i></span>
                <span><i class = "fas fa-star"></i></span>
                <span><i class = "fas fa-star"></i></span>
                <span><i class = "far fa-star"></i></span>
              </div>
              <span class = "chevron-icon">
              <a href="store_one.php"><i class = "fas fa-chevron-right"></i></a>
                
              </span>
              

            </div>
          </div>
          <!-- end of item -->
          <!-- item -->
          <div class = "trend-item">
            <img src = "./Images/best-selling-2.png" alt = "best product">
            <div class = "trend-item-content">
              <h4>Comfortable Pink Sofa</h4>
              <h4>₹30,000/-</h4>
              <div class = "stars">
                <span><i class = "fas fa-star"></i></span>
                <span><i class = "fas fa-star"></i></span>
                <span><i class = "fas fa-star"></i></span>
                <span><i class = "fas fa-star"></i></span>
                <span><i class = "far fa-star"></i></span>
              </div>
              <span class = "chevron-icon">
              <a href="store_one.php"><i class = "fas fa-chevron-right"></i></a>
                
              </span>
              
            </div>
          </div>
          <!-- end of item -->
          <!-- item -->
          <div class = "trend-item">
            <img src = "./Images/best-selling-3.png" alt = "best product">
            <div class = "trend-item-content">
              <h4>Stylish Red Chair</h4>
              <h4>₹15,000/-</h4>
              <div class = "stars">
                <span><i class = "fas fa-star"></i></span>
                <span><i class = "fas fa-star"></i></span>
                <span><i class = "fas fa-star"></i></span>
                <span><i class = "fas fa-star"></i></span>
                <span><i class = "far fa-star"></i></span>
              </div>
              <span class = "chevron-icon">
              <a href="store_one.php"><i class = "fas fa-chevron-right"></i></a>
                
              </span>
              
            </div>
          </div>
          <!-- end of item -->
        </div>
      </div>
    </section>
    <!-- end of trending product -->

    <div class = "underline"></div>

    <!-- featured product -->
    <section class = "featured">
      <div class = "container">
        <!-- item -->
        <div class = "featured-item">
          <div class = "featured-item-img">
            <img src = "./Images/red-sofa-photo.png" alt = "feature image">
          </div>
          <div class = "featured-item-content">
            <div class = "title">
              <h4>featured product </h4>
              <h2>red sofa with pillows</h2>
              <p class = "item-price">₹50,000/-</p>
            </div>
            <p class = "text">
              This sofa is very comfortable for 2-3 members . the Pillows are very soft and spunchy.
            </p>
            <div class = "featured-btns">
              <button type = "button" class = "btn">Explore</button>
              <a href="store_one.php"><button type = "button" class = "btn">Purchase</button></a>
            </div>
          </div>
        </div>
        <!-- end of item -->
        <!-- item -->
        <div class = "featured-item">
          <div class = "featured-item-img">
            <img src = "./Images/single-comfort-sofa-chair.png" alt = "feature image">
          </div>
          <div class = "featured-item-content">
            <div class = "title">
              <h4>featured product </h4>
              <h2>single comfort sofa chair</h2>
              <p class = "item-price">₹10,000/-</p>
            </div>
            <p class = "text">
              This single comfort sofa chair is only for single person who can take rest in this sofa chair.
            </p>
            <div class = "featured-btns">
              <button type = "button" class = "btn">Explore</button>
              <a href="store_one.php"><button type = "button" class = "btn">Purchase</button></a>
            </div>
          </div>
        </div>
        <!-- end of item -->
        <!-- item -->
        <div class = "featured-item">
          <div class = "featured-item-img">
            <img src = "./Images/sofa-png-image.png" alt = "feature image">
          </div>
          <div class = "featured-item-content">
            <div class = "title">
              <h4>featured product </h4>
              <h2>warm brown sofa</h2>
              <p class = "item-price">₹18,000/-</p>
            </div>
            <p class = "text">
              The warm brown sofa is only comfy for 2 persons. The colour touch we have given is very fantastic in looking so what
              are u waiting for go and buy it.
            </p>
            <div class = "featured-btns">
              <button type = "button" class = "btn">Explore</button>
<a href="store_one.php"><button type = "button" class = "btn">Purchase</button></a>
            </div>
          </div>
        </div>
        <!-- end of item -->
        <!-- item -->
        <div class = "featured-item">
          <div class = "featured-item-img">
            <img src = "./Images/wide-sofa.png" alt = "feature image">
          </div>
          <div class = "featured-item-content">
            <div class = "title">
              <h4>featured product </h4>
              <h2>wide comfortable sofa</h2>
              <p class = "item-price">₹40,000/-</p>
            </div>
            <p class = "text">
              The wide comfort sofa is comfortable for all ur family members. In this sofa u can sit and relax with ur family members.
            </p>
            <div class = "featured-btns">
              <button type = "button" class = "btn">Explore</button>
              <a href="store_one.php"><button type = "button" class = "btn">Purchase</button></a>
            </div>
          </div>
        </div>
        <!-- end of item -->
      </div>
    </section>
    <!-- end of featured product -->

    <!-- blog -->
    <section class = "blog">
      <div class = "container">
        <div class = "title">
          <h4>daily update</h4>
          <h2>latest blog</h2>
        </div>

        <div class = "blog-grid">
          <!-- item -->
          <div class = "blog-item">
            <div class = "blog-item-img">
              <img src = "./Images/blog-img-1.jpg" alt = "blog image">
            </div>
            <div class = "blog-item-content">
              <a href = "#">creative ideas for decoration</a>
              <div>
                <span>january 20 | design | furniture</span>
              </div>
            </div>
          </div>
          <!-- end of item -->
          <!-- item -->
          <div class = "blog-item">
            <div class = "blog-item-img">
              <img src = "./Images/blog-img-2.jpg" alt = "blog image">
            </div>
            <div class = "blog-item-content">
              <a href = "#">decorate your home with the most modern furnishings.</a>
              <div>
                <span>january 25 | design | furniture</span>
              </div>
            </div>
          </div>
          <!-- end of item -->
          <!-- item -->
          <div class = "blog-item">
            <div class = "blog-item-img">
              <img src = "./Images/blog-img-3.jpg" alt = "blog image">
            </div>
            <div class = "blog-item-content">
              <a href = "#">furniture designs & contemporary art</a>
              <div>
                <span>january 28 | design | furniture</span>
              </div>
            </div>
          </div>
          <!-- end of item -->
        </div>
      </div>
    </section>
    <!-- end of blog -->

    <!-- newsletter -->
    <section class = "newsletter">
      <div class = "container">
        <div class = "newsletter-content">
          <div class = "title">
            <h4>subscribe to our newsletter</h4>
            <h2>Newsletter</h2>
          </div>
          
          <form>
            <div class = "form-group">
              <input type = "email" class = "form-control" placeholder="Enter your email address">
              <button type = "submit" class = "subscribe-btn" onclick="subscribe()">
                subscribe
                <i class = "fas fa-chevron-right"></i>
              </button>
            </div>
          </form>

          <div class = "circle-box circle-1"></div>
          <div class = "circle-box circle-2"></div>
        </div>
      </div>
    </section>
    <!-- end of newsletter-->

    <!-- footer -->
    <footer class = "footer container">
      <div class = "footer-item">
        <h2 class = "brand-name">
          TIRUPATI <span>BALAJI</span>
        </h2>
        <p>Address:- Tirupati,AndhraPradesh near sv puram
          Bus stop 517501.
        </p>
        <br>
     
      </div>

      <div class = "footer-item">
        <h3>links</h3>
        <ul>
          <li><a href = "#">home</a></li>
          <li><a href = "#">download</a></li>
          <li><a href = "#">pricing</a></li>
          <li><a href = "#">about</a></li>
        </ul>
      </div>

      <div class = "footer-item">
        <h3>products</h3>
        <ul>
          <li><a href = "#">chair</a></li>
          <li><a href = "#">sofa</a></li>
          <li><a href = "#">pillow</a></li>
          <li><a href = "#">cushion</a></li>
        </ul>
      </div>

      <div class = "footer-item">
        <h3>support</h3>
        <ul>
          <li><a href = "#">FAQ</a></li>
          <li><a href = "#">how it works</a></li>
          <li><a href = "#">features</a></li>
          <li><a href = "#">contact</a></li>
        </ul>
      </div>
    </footer>
    <!-- end of footer -->
    <script>
      
function subscribe(){
    butn = document.getElementsByClassName('subscribe-btn');
    window.alert("Subscribed Successfully !")
}
    </script>
  </body>
</html>