<?php
session_start();
// session_destroy();

if($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['add-to-cart'])) {
    
        if(isset($_SESSION['cart_one'])) {
            $my_items = array_column($_SESSION['cart_one'], 'Item_Name');
           
            
            if(in_array($_POST['Item_Name'], $my_items)) {
                echo "<script>
                        alert('Item Already Added');
                        window.location.href = 'store_one.php';
                      </script>";
            } else {
                $count = count($_SESSION['cart_one']);
                    $_SESSION['cart_one'][$count] = array('Item_Name'=>$_POST['Item_Name'], 'Price'=>$_POST['Price'], 'Quantity'=>1);
                echo "<script>
                        alert('Item Added');
                        window.location.href = 'store_one.php';
                      </script>";
            }
        } else {
            $_SESSION['cart_one'][0] = array('Item_Name'=>$_POST['Item_Name'], 'image'=>$_POST['image_store'], 'Price'=>$_POST['Price'], 'Quantity'=>1);

            echo "<script>
                    alert('Item Added');
                    window.location.href = 'store_one.php';
                  </script>";
        }
    }


  
if(isset($_POST['Remove_Item']) && isset($_POST['Item_Name'])) 
{
    if(isset($_SESSION['cart_one']))
    {
        foreach($_SESSION['cart_one'] as $key => $value){
            if($value['Item_Name'] != $_POST['Item_Name'])
            {
                unset($_SESSION['cart_one'][$key]);
                $_SESSION['cart_one']=array_values($_SESSION['cart_one']);
                echo "<script>
                      alert('Item Removed');
                      window.location.href = 'cart_one.php';
                      </script>";
                break;
            }
        }
    }
}
        
       
        
        }

?>