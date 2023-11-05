<?php
session_start();
?>
<!DOCTYPE html>

<html>

<head>

   <meta name="viewpoint" content="width=device-width,initial-scale=1.0">

   <meta http-equiv="content-type" content="text/html; charset=utf-8" />

   <title>NAVBAR</title>


   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=FontName" />


   <script src="https://kit.fontawesome.com/31e4361ee7.js" crossorigin="anonymous"></script>

</head>

<style>
   *{

margin: 0px;

padding: 0px;

font-family: sans-serif;

box-sizing: border-box;

}

body{

margin: 0px;
padding: 0px;

font-family: 'FontName', sans-serif;
font-size: 16px;
font-weight: normal;


}

ul{

list-style: none;

}

a{

text-decoration: none;

}

.Navigation{

display: flex;

justify-content: space-between;

align-items: center;

padding: 20px 10%;

margin: auto;

position: fixed;

left: 0px;

top: 0px;

width: 100%;

z-index: 100;

background-color: #ffffff;

border: 1px solid rgba(0,0,0,0.03);

}

.Menu{

display: flex;

}
.Menu li{
 position: relative;
 float:left;
}

.Menu li a{ 
 font-weight: 800;
 padding: 5px 20px;
 color: black;
 display: block;
}

.Menu.active{

opacity: 2;

}

.Menu li a:hover{

opacity: 1;

transition: all ease 0.35;
color:#e74444;
}

.Menu li ul{ 
 position: absolute;
 left:0;
 width: 200px;
 background:#ffffff;
 display: none;
}

.Menu li ul li ul{
 left: 200px;
 top: 0; 

}

.Menu li:focus-within > ul,
.Menu li:hover > ul{
 display: initial;
}

.logo{

font-size: 2.1rem;

color: #414141;

text-transform: uppercase;

letter-spacing: 0.5px;

font-weight: 600;
font-style: italic;

}

.right-elements{

display: flex;

justify-content: center;

align-items: center;

}

.right-elements a{

margin: 10px;

}

.right-elements a i{
display: inline;
color: red;

}

.right-elements a:hover i{

color: blue;

transition: all ease 0.3s;

}
.right-elements .search{
   display: flex;
    }
.right-elements .srch {
    font-family: 'Times New Roman';
    width: 200px;
    height: 35px;
    background: transparent;
    border: 1px solid #e74444;
    margin-top: 0px;
    margin-bottom: 5px;
    /* border-right: none; */
    font-size: 16px;
    float: left;
    padding: 2px;
    border-bottom-left-radius: 10px;
    border-top-left-radius: 10px
  }

  .right-elements .btn i{
      color: white;
   }
  
  .right-elements .btn {
     width: 80px;
     height: 35px;
     background: #e74444;
     border: 1px solid #e74444;
     margin-top: 0px;
     margin-bottom: 5px;
     color: #fff;
     font-size: 15px;
     border-bottom-right-radius: 10px;
     border-top-right-radius: 10px;
     border-top-left-radius: 2px;     
     border-bottom-left-radius: 2px;     
     cursor: pointer;
     margin-left: -10px; 
   }
   .right-elements .btn:hover{
     color: blue;
   }
   .right-elements .btn:focus{
     outline: none;
   }
   
   .right-elements .srch:focus{
     outline: none;
   }
  

.cart{
   position:relative;
   display: inline-block;
}

.cart-count{
   position: absolute;
   top: -8px;
   right: -8px;
   border-radius: 50%;
   width:20px;
   height: 20px;
   text-align: center;
   font-size: 14px;
   color:#e74444;
   font-weight: bold;

}

</style>


<body>



   <nav class="Navigation">



      <a href="../HomeP/home.php" class="logo">Thrifty</a>





      <ul class="Menu">



         <li><a href="../HomeP/home.php" class="active">Home</a></li>

         <li><a href="../Shop/shop.php">Shop</a></li>

         <li>
            <a href="Category">Categories <i class="fa fa-caret-down"></i></a>
            
              <ul>
                  <li> <a href="#">Men's Clothing</a></li>
                  <li> <a href="#">Women's Clothing </a></li>
               </ul>
            
         
         </li>

         <li><a href="Contacts">Contacts</a></li>



      </ul>



      <div class="right-elements">



         <a class="search">
         <input class="srch" type="search" name="" placeholder="   Search in Thrifty" >
         <button type="submit" class="btn"><i class="fa-solid fa-magnifying-glass"></i></button>  
            

         </a>


            

         

         <div>
            <?php
            $count=0;
            if(isset($_SESSION['cart'])){
               $count=count($_SESSION['cart']);
            }

            ?>
         <a href="./cart.php" class="cart">
            
            <i class="fa-solid fa-cart-shopping"></i>
             <span class="cart-count">
               <?php
               echo $count;
               ?>
             </span>      <!--   later remove 0 -->

         </a>
         </div>






         <a id="user" href="../SignIn/login.php" class="user">


            <i class="fa-solid fa-user"></i>

         </a>

         

         

         <a href="#" class="love">
            <i class="fa-solid fa-heart"></i>
         </a>
      </div>

   </nav>
   
   <!-- <script src="./navbar.js"></script> -->
  
  
  <script>
      // Get the cart icon and count span
const cartIcon = document.querySelector('.cart');
const cartCount = document.querySelector('.cart-count');

// Initialize the count
let itemCount = 0;

// Function to update the count
function updateCartCount(count) {
  itemCount = count;
  cartCount.textContent = count;
}

// Example: Add an item to the cart
function addItemToCart() {
  itemCount++;
  updateCartCount(itemCount);
}

// Example: Remove an item from the cart
function removeItemFromCart() {
  if (itemCount > 0) {
    itemCount--;
    updateCartCount(itemCount);
  }
}
</script>


</body>
</html>