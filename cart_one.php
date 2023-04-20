<?php
session_start();
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
    <link rel="stylesheet" href="indexx.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  </head>
  <body>
    <style>
      .decrease-btn{
            padding: 0 !important;
    cursor: pointer;
    border-radius: 50%;
    height: 35px;
    width: 35px;
    text-align: center;
    background-color: #1f1f26;
    font-size: 28px;
    /* display: flex; */
    /* justify-content: center; */
    align-items: center;
    color: #fff;
      }
      .increase-btn{
        padding: 0 !important;
    cursor: pointer;
    border-radius: 50%;
    height: 35px;
    width: 35px;
    text-align: center;
    background-color: #1f1f26;
    font-size: 28px;
    /* display: flex; */
    /* justify-content: center; */
    align-items: center;
    color: #fff;
      }
      .number-inputs{
        width: 11% !important;
    margin: 9px;
    padding: 20px;
    text-align: center;
      }
        .header-cart{
            min-height: 10vh;
        }
        .trend-item{
            margin: 40px;
        }
        .title h2{
            text-align: center;
        }
        body{
          background: #fff !important;
        }
        table{
          border-collapse: collapse;
    width: 80vw !important;
    margin: 45px 152px;
   
        }
      #cart-foot{
        position: relative;
          margin-top:300px;
        }
        .order{
    font-weight: 600;
    background:#1f1f26;
    color:#fff;
    padding: 8px 15px;
    /*margin: 10px;
    */margin-top: 10px;
    cursor: pointer;
    /* border: 3px solid blueviolet; */
    border-radius:5px ;
    -webkit-border-radius:5px ;
    -moz-border-radius:5px ;
    -ms-border-radius:5px ;
    -o-border-radius:5px ;
}
.order:hover{
   
    transition: 0.4s;
    -webkit-transition: 0.4s;
    -moz-transition: 0.4s;
    -ms-transition: 0.4s;
    -o-transition: 0.4s;
    color: aliceblue;
    transform: translateX(3px);
    -webkit-transform: translateX(3px);
    -moz-transform: translateX(3px);
    -ms-transform: translateX(3px);
    -o-transform: translateX(3px);
}
button.add-tocart{
    padding: 12px 20px;
    cursor: pointer;
    margin: 20px 0px;
    font-size: 15px;
    font-family:inherit;
    border: none;
    font-weight: 600;
    background-color: #1f1f26;
    color: #fff;
    border-radius: 8px;
}
#order-btn {
   
  position: absolute;
    right: 10%;
    justify-content: flex-end;
    /* margin: 21px 0px; */
    /* bottom:-10%; */
}
#alert{
  position: relative;
  top:-37px;
  display:none;
  background-color: #1f1f26;
  color: #fff;
  border-color: #badbcc;
  padding: 1rem 1rem;
  border-radius: .25rem;
  width: 100%;
  margin: 100px 0px;
  text-align: center;
}
@media(max-width :768px){
    .ul_list_cart{
     display:flex;
     width:140px;
    
    }
    .cart-page{
      margin: 253px 20px;
    }
    .decrease-btn{
      padding: 11px;
    height: 37px;
    cursor: pointer;
    width: 37px;
    margin: 17px 11px;
    }
    .increase-btn{
      padding: 11px;
    height: 37px;
    cursor: pointer;
    width: 37px;
    margin: 17px 11px;
    }
    .number-inputs{
      width: 25% !important ;
    margin: 9px;
    padding: 5px !important;
    text-align: center;
    }
}
th {
    text-align: left;
    padding: 10px 10px; 
    font-weight: normal;
    background: #1f1f26 !important;
    color: #fff;
    height: 9vh;
}
.total-price table{
    border-top: 3px solid #1f1f26;
    width: 100%;
    max-width: 355px;
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
    <div id="alert" class="alert" role="alert">Your order has been placed Successfully!</div>
    
<table>
      <tr class="table_row"id="table_row">
        <!-- <th>Sr No</th> -->
         <th>Product</th>
         <th id="qua">Quantity</th>
         <th>Sub Total</th>
      </tr>
         <?php
        //  $total = 0;
        // $_SESSION['image_store'] = $value['image_store'];
         if(isset($_SESSION['cart_one'])){
          foreach($_SESSION['cart_one'] as $key=> $value){ 
           
                     
          // $sr = $key+1; 
         
          $total = 0;
           
            echo '
           
            <tr class="tb-row">
            
                <td>
                  <div class="cart-info">
             
              
                    <div id="para">
                      
                      <p>'.$value['Item_Name'].'</p>
                      <p>Rs <span class="iprice">'.$value['Price'].'<input type="hidden" value="'.$value['Price'].'"></span></p>
                      <form action="manage_cart_one.php" method="POST">
                        <button name="Remove_Item" class=" add-tocart" style=";
                        padding: 10px 19px;
                        cursor: pointer;
                        margin: 20px 0px;
                        font-size: 15px;
                        border: none;
                        letter-spacing:1px;
                        font-weight: 600;
                        background-color: #1f1f26;
                        color: #fff;
                        border-radius: 8px;">Remove</button>
                        <input type="hidden" name="Item_Name" value='.$value['Item_Name'].'>
                      </form>
                    </div>
                  </div>
                </td>
                <td>
              <ul class="ul_list_cart">
              
               <button class="decrease-btn "  style=padding:7px;cursor:pointer;> - </button>
              <input class="number-inputs" type"text" name"quantity" value="1" style="width:5%; margin:9px;padding:20px; text-align:center; margin:0 , 10px">
              <button class="increase-btn"style=padding:5px;cursor:pointer;> + </button>
             
         
              </ul>

                
                </td>
                <td>
                  <div class="cart-price">
                    <p>Rs <span class="itotal">'.$value['Price'].' <input type="hidden" value="'.$value['Price'].'"></span></p>
                  </div>
                  
                </td>
              </tr>';
  
           
            
          }
         }
         ?>
      
      
   </table>
   <div class="total-price">
      <table>
         <tr>
          
            <td>Sub - Total</td>
            <td></td>
            <!-- <td></td> -->
            <td id="subtotal">
            <?php
$subtotal = 0;
if (isset($_SESSION['cart_one']) && is_array($_SESSION['cart_one'])) {
  foreach ($_SESSION['cart_one'] as $item) {
    $subtotal += (int)$item['Price'];
  }
}
echo $subtotal;

?>


          </td>
           
         </tr>
         <tr>
            <td>Tax</td>
            <td></td>
            <td>Rs <span id="tax">1000</span></td>
         </tr>
         <tr>
            <td> Grand Total</td>
            <td></td>
            <td>Rs <span id="grand-total"><?php $total = $subtotal+'1000';
            echo $total; ?></span></td>
         </tr>
       
      </table>
     
    </div>
    <div id="order-btn">
        <button onclick="orderme()"class="order">Order Now</button>
</div>

    <div class = "underline"></div>

    <footer id="cart-foot" class = "footer container">
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
    <script>
      
function subscribe(){
    butn = document.getElementsByClassName('subscribe-btn');
    window.alert("Subscribed Successfully !")
}

const decreaseBtns = document.querySelectorAll('.decrease-btn');
const increaseBtns = document.querySelectorAll('.increase-btn');
const numberInputs = document.querySelectorAll('.number-inputs');
// const sub = document.getElementById('subtotal');
var itemprice = document.querySelectorAll('.iprice');
var totalPrice = document.querySelectorAll('.itotal');
const grandTotal = document.getElementById('grand-total');
const subtotal = document.getElementById('subtotal');




decreaseBtns.forEach((btn, index) => {
  btn.addEventListener('click', () => {
  
    // Get the corresponding input field and item price for the clicked button
    const inputField = btn.nextElementSibling;
    const price = parseFloat(itemprice[index].innerText);
    
    if(inputField.value <= 1) {
      inputField.value = 1;
      alert("Negative Quantity not allowed");
    } else {
      inputField.value = parseInt(inputField.value) - 1;
      inputField.style.background = '#fff';
      inputField.style.color = 'black';   
      totalPrice[index].innerText = parseFloat(totalPrice[index].innerText) - price;
      subtotal.innerText = parseFloat(subtotal.innerText) - price;
      grandTotal.innerText = parseFloat(grandTotal.innerText) - price;
    }
  });
});



increaseBtns.forEach((btn, index) => {
  btn.addEventListener('click', () => {

    // Get the corresponding input field for the clicked button
    const inputField = btn.previousElementSibling;
    if(inputField.value >=5){
      inputField.value = 5;
      alert('Maximum  5 are allowed');
      inputField.style.background = 'red';
      inputField.style.color = '#fff';
    }
    else{
      inputField.value = parseInt(inputField.value) + 1;
      totalPrice[index].innerText = parseInt(totalPrice[index].innerText) + parseInt(itemprice[index].innerText);
      subtotal.innerText = parseInt(subtotal.innerText) + parseInt(itemprice[index].innerText);
      grandTotal.innerText = parseInt(grandTotal.innerText) + parseInt(itemprice[index].innerText);
    }
  });
});

function orderme(){

var d = document.getElementById('alert')
d.style.display = "block";
d.style.position = "fixed";
// d.style.bottom ="3%"
// d.style.height = "30px"
setTimeout(function() {
  var alertDiv = document.getElementById("alert");
  alertDiv.parentNode.removeChild(alertDiv);
}, 5000);

}
    </script>
  </body>
</html>