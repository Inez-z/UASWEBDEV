<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>cart</title>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    </head>

    <body>
        <section>
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <!-- {{-- diganti logo --}} -->
                    <a class="navbar-brand" href="#">
                        <img src="image/logo.png" width="30" height="30" alt="">
                      </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Category
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">All</a>
                            <a class="dropdown-item" href="#">Men</a>
                            <a class="dropdown-item" href="#">Women</a>
                            <a class="dropdown-item" href="#">Kids</a>
                            <a class="dropdown-item" href="#">Best Seller</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                          </div>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">About Us</a>
                        </li>
                      </ul>
                        <div class="flex-grow-1 d-flex">
                            <form class="form-inline flex-nowrap bg-light mx-0 mx-lg-auto rounded p-1">
                                 <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                        </div>

                    </div>
                  </nav>
            <div class="small-container cart page">
                     <div class="container">
                            <h1>My Shopping Cart</h1>
                            <div class="card" style="background-color: transparent">
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
                        <div class="card" style="background-color: transparent">
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
                </div>
                </div>
            </section>
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
     <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    </body>
</html>
