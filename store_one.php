<?php
 session_start();
//  session_destroy();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Furniture Shop-Tirupati Balaji</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  </head>
  <body>
    <style>
        .header-cart{
            min-height: 10vh;
        }
        .trend-item{
            margin: 40px;
        }
        .title h2{
            text-align: center;
        }
        button.add-tocart{
    padding: 12px 20px;
    cursor: pointer;
    margin: 20px 0px;
    font-size: 15px;
    border: none;
    font-weight: 600;
    background-color: #1f1f26;
    color: #fff;
    border-radius: 8px;
}
.trend-item{
  margin: 40px 31px;
    height: 66vh;
    width: 22vw;
}
.trend-grid {
    display: flex;
    flex-direction: row;
    justify-content: space-evenly;
    align-items: center;
}
    </style>
    <!-- header -->   
    <header class = "header header-cart">
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


    </header>
    <section class = "trend">
        <div class = "container">
          <div class = "title">
            <!-- <h4>Products</h4> -->
            <h2>Products</h2>
          </div>
         
          <div class = "trend-grid">
            <!-- item -->
            <form action="manage_cart_one.php" method="POST">
            <div class = "trend-item">
              <img src = "./Images/round-chair.png" alt = "best product">
              <div class = "trend-item-content">
                <h4>Round Chair</h4>
                <h4>₹10,000/-</h4>
                <div class = "stars">
                  <span><i class = "fas fa-star"></i></span>
                  <span><i class = "fas fa-star"></i></span>
                  <span><i class = "fas fa-star"></i></span>
                  <span><i class = "fas fa-star"></i></span>
                  <span><i class = "far fa-star"></i></span>
</div>
             
               <button type="submit" class="add-tocart" name="add-to-cart"onclick="addtoCart('id')" >Add to Cart</button >
        <input class="itemName"type="hidden" name="Item_Name" value="Round Chair">
        <input class="priceName" type="hidden" name="Price" value="10000" >
      </div>
</div>
   </form>
            
            <!-- end of item -->
            <!-- item -->
            <form action="manage_cart_one.php" method="POST">
            <div class = "trend-item">
              <img src = "./Images/red-sofa-photo.png" alt = "best product">
              <div class = "trend-item-content">
                <h4>Red Sofa With Pillows</h4>
                <h4>₹50,000/-</h4>
                <div class = "stars">
                  <span><i class = "fas fa-star"></i></span>
                  <span><i class = "fas fa-star"></i></span>
                  <span><i class = "fas fa-star"></i></span>
                  <span><i class = "fas fa-star"></i></span>
                  <span><i class = "far fa-star"></i></span>
</div>
             
               <button type="submit" class="add-tocart" name="add-to-cart"onclick="addtoCart('id')" >Add to Cart</button >
        <input class="itemName"type="hidden" name="Item_Name" value="Red Sofa With Pillows">
        <input class="priceName" type="hidden" name="Price" value="50000" >
      </div>
</div>
   </form>
            <!-- end of item -->
            <!-- item -->
            <form action="manage_cart_one.php" method="POST">
            <div class = "trend-item">
              <img src = "./Images/single-comfort-sofa-chair.png" alt = "best product">
              <div class = "trend-item-content">
                <h4>Single Comfort Sofa Chair</h4>
                <h4>₹10,000/-</h4>
                <div class = "stars">
                  <span><i class = "fas fa-star"></i></span>
                  <span><i class = "fas fa-star"></i></span>
                  <span><i class = "fas fa-star"></i></span>
                  <span><i class = "fas fa-star"></i></span>
                  <span><i class = "far fa-star"></i></span>
</div>
             
               <button type="submit" class="add-tocart" name="add-to-cart"onclick="addtoCart('id')" >Add to Cart</button >
        <input class="itemName"type="hidden" name="Item_Name" value="Single Comfort Sofa Chair">
        <input class="priceName" type="hidden" name="Price" value="10000" >
      </div>
</div>
   </form>
            <!-- end of item -->
          </div>
          
          <div class = "trend-grid">
            <!-- item -->
            <form action="manage_cart_one.php" method="POST">
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
             
               <button type="submit" class="add-tocart" name="add-to-cart"onclick="addtoCart('id')" >Add to Cart</button >
        <input class="itemName"type="hidden" name="Item_Name" value="Brown Sofa With Pillows">
        <input class="priceName" type="hidden" name="Price" value="20000" >
      </div>
</div>
   </form>
            <!-- end of item -->
            <!-- item -->
            <form action="manage_cart_one.php" method="POST">
            <div class = "trend-item">
              <img src = "./Images/best-selling-2.png" alt = "best product">
              <div class = "trend-item-content">
                <h4>Pink Sofa With Pillows</h4>
                <h4>₹15,000/-</h4>
                <div class = "stars">
                  <span><i class = "fas fa-star"></i></span>
                  <span><i class = "fas fa-star"></i></span>
                  <span><i class = "fas fa-star"></i></span>
                  <span><i class = "fas fa-star"></i></span>
                  <span><i class = "far fa-star"></i></span>
</div>
             
               <button type="submit" class="add-tocart" name="add-to-cart"onclick="addtoCart('id')" >Add to Cart</button >
        <input class="itemName"type="hidden" name="Item_Name" value="Pink Sofa With Pillows">
        <input class="priceName" type="hidden" name="Price" value="15000" >
      </div>
</div>
   </form>
            <!-- end of item -->
            <!-- item -->
            <form action="manage_cart_one.php" method="POST">
            <div class = "trend-item">
              <img src = "./Images/best-selling-3.png" alt = "best product">
              <div class = "trend-item-content">
                <h4>Red Chair</h4>
                <h4>₹10,000/-</h4>
                <div class = "stars">
                  <span><i class = "fas fa-star"></i></span>
                  <span><i class = "fas fa-star"></i></span>
                  <span><i class = "fas fa-star"></i></span>
                  <span><i class = "fas fa-star"></i></span>
                  <span><i class = "far fa-star"></i></span>
</div>
             
               <button type="submit" class="add-tocart" name="add-to-cart"onclick="addtoCart('id')" >Add to Cart</button >
        <input class="itemName"type="hidden" name="Item_Name" value="Red Chair">
        <input class="priceName" type="hidden" name="Price" value="10000" >
      </div>
</div>
   </form>
            <!-- end of item -->
          </div>
          
          <div class = "trend-grid">
            <!-- item -->
            <form action="manage_cart_one.php" method="POST">
            <div class = "trend-item">
              <img src = "./Images/sofa-png-image.png" alt = "best product">
              <div class = "trend-item-content">
                <h4>Warm Brown Sofa</h4>
                <h4>₹18,000/-</h4>
                <div class = "stars">
                  <span><i class = "fas fa-star"></i></span>
                  <span><i class = "fas fa-star"></i></span>
                  <span><i class = "fas fa-star"></i></span>
                  <span><i class = "fas fa-star"></i></span>
                  <span><i class = "far fa-star"></i></span>
</div>
             
               <button type="submit" class="add-tocart" name="add-to-cart"onclick="addtoCart('id')" >Add to Cart</button >
        <input class="itemName"type="hidden" name="Item_Name" value="Warm Brown Sofa">
        <input class="priceName" type="hidden" name="Price" value="18000" >
      </div>
</div>
   </form>
            <!-- end of item -->
            <!-- item -->
            <form action="manage_cart_one.php" method="POST">
            <div class = "trend-item">
              <img src = "./Images/wide-sofa.png" alt = "best product">
              <div class = "trend-item-content">
                <h4>Wide Sofa</h4>
                <h4>₹40,000/-</h4>
                <div class = "stars">
                  <span><i class = "fas fa-star"></i></span>
                  <span><i class = "fas fa-star"></i></span>
                  <span><i class = "fas fa-star"></i></span>
                  <span><i class = "fas fa-star"></i></span>
                  <span><i class = "far fa-star"></i></span>
</div>
             
               <button type="submit" class="add-tocart" name="add-to-cart"onclick="addtoCart('id')" >Add to Cart</button >
        <input class="itemName"type="hidden" name="Item_Name" value="Wide Sofa ">
        <input class="priceName" type="hidden" name="Price" value="40000" >
      </div>
</div>
   </form>
            <!-- end of item -->
            <!-- item -->
            <form action="manage_cart_one.php" method="POST">
            <div class = "trend-item">
              <img src = "./Images/round-chair.png" alt = "best product">
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
             
               <button type="submit" class="add-tocart" name="add-to-cart"onclick="addtoCart('id')" >Add to Cart</button >
        <input class="itemName"type="hidden" name="Item_Name" value="Brown Sofa With Pillows">
        <input class="priceName" type="hidden" name="Price" value="20000" >
      </div>
</div>
   </form>
            <!-- end of item -->
          </div>
          
          <div class = "trend-grid">
            <!-- item -->
            <form action="manage_cart_one.php" method="POST">
            <div class = "trend-item">
              <img src = "./Images/round-chair.png" alt = "best product">
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
             
               <button type="submit" class="add-tocart" name="add-to-cart"onclick="addtoCart('id')" >Add to Cart</button >
        <input class="itemName"type="hidden" name="Item_Name" value="Brown Sofa With Pillows">
        <input class="priceName" type="hidden" name="Price" value="20000" >
      </div>
</div>
   </form>
            <!-- end of item -->
            <!-- item -->
            <form action="manage_cart_one.php" method="POST">
            <div class = "trend-item">
              <img src = "./Images/round-chair.png" alt = "best product">
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
             
               <button type="submit" class="add-tocart" name="add-to-cart"onclick="addtoCart('id')" >Add to Cart</button >
        <input class="itemName"type="hidden" name="Item_Name" value="Brown Sofa With Pillows">
        <input class="priceName" type="hidden" name="Price" value="20000" >
      </div>
</div>
   </form>
            <!-- end of item -->
            <!-- item -->
            <form action="manage_cart_one.php" method="POST">
            <div class = "trend-item">
              <img src = "./Images/round-chair.png" alt = "best product">
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
             
               <button type="submit" class="add-tocart" name="add-to-cart"onclick="addtoCart('id')" >Add to Cart</button >
        <input class="itemName"type="hidden" name="Item_Name" value="Brown Sofa With Pillows">
        <input class="priceName" type="hidden" name="Price" value="20000" >
      </div>
</div>
   </form>
            <!-- end of item -->
          </div>
          
        </div>
      </section>
 

    <div class = "underline"></div>

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
          <li><a href = "index.php">home</a></li>
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
    <script src="./script.js"></script>
  </body>
</html>