<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WatchOut</title>
    <link rel="stylesheet" type="text/css" href="stylecart.css"/>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

</head>
<body>
    <section>
        <nav> 
        <!--logo----------------->
            <img src="image/logo.png" class="logo">
        <!--menu----------------->
            <ul>
                <li><a href="#" class="nav-active">Home</a></li>
                <li><a href="#">Category</a></li>
                <li><a href="#">About</a></li>
                <div class="search-container">
                    <form action="/action_page.php">
                      <input type="text" placeholder="Search.." name="search" size="35">
                    </form>
                  </div>
                <li><a href="#"><i class="fa fa-search"></i></a></li>
                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                <li><a href="#"><i class="fa fa-user"></i></a></li>
            </ul>
        </nav>
    </section>
 <div class="small-container cart page">
     <table>
                 <div class="container">
                        <h1>My Shopping Cart</h1>
                        <div class="card">
                            <div class="cart-info">
                                <img src="image/men2.png" width="150">
                                <div>
                                    <h2 class="Product-name">Daniel Wellington Classic</h2>
                                    <h3 class="Product-size">Size 28 color Brown</h3>
                                    <h4 class="Product-price">$229</h4>
                                </div>
                            </div>
                      
                        <div class="card-action">
                            <button class="btn" onclick="handleCounterPlus()">+</button>
                            <input type="text" id="counter" class="counter" value="1">
                            <button class="btn" onclick="handleCounterMin()">-</button>
                        </div>
                        
                        <div class="Product-remove">
                            <i class="far fa-trash-alt"></i>
                        </div>
                        <h5>$229</h5>
                    </div>
                    <div class="card">
                        <div class="cart-info">
                                   <img src="image/women1.png" width="150">
                                   <div>
                                       <h2 class="Product-name">Daniel Wellington Petite</h2>
                                       <h3 class="Product-size">Size 28 color Brown</h3>
                                       <h4 class="Product-price">$159</h4>
                                   </div>
                               </div>
                         
                           <div class="card-action">
                               <button class="btn" onclick="handleCounterPlus()">+</button>
                               <input type="text" id="counter" class="counter" value="1">
                               <button class="btn" onclick="handleCounterMin()">-</button>
                           </div>
                           
                           <div class="Product-remove">
                               <i class="far fa-trash-alt"></i>
                           </div>
                           <h5>$159</h5>
                       </div>
                    </div>
                    
            
            
            <div class="total-price">
                    <h6>$388</h6>
                    <h7>Disc : 5%</h7>
                <p>
                    <span>Subtotal</span>
                    <span>$366</span>
                </p>
                <div class="btn-con">
                    <div class="item">
                        <button class="btn-decor-outline">Continue Shopping</button>
                    </div>
                    <div class="item2">
                        <button class="btn-decor">Checkout</button>
                    </div>
                </div>
            </table>
        </div>
    </div>
</body>
     <script>
         const counter = document.getElementById("counter");
         let countervalue = counter.value;

         function handleCounterPlus() {
             counter.value = ++countervalue;
         }

         function handleCounterMin() {
             counter.value = --countervalue;
         }
     </script>

