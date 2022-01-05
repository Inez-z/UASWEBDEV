<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Checkout</title>
        {{-- <link rel="stylesheet" type="text/css" href="css/checkout.css"/> --}}
        <link href="{{ asset('css/checkout.css') }}" rel="stylesheet" type="text/css" >
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    </head>

    <body>
        <section>
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <!-- {{-- diganti logo --}} -->
                    <a class="navbar-brand" href="http://127.0.0.1:8000/">
                        <img src={{asset('image/logo.png')}} width="30" height="30" alt="">
                      </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                          <a class="nav-link" href="http://127.0.0.1:8000/">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Category
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="http://127.0.0.1:8000/all">All</a>
                            <a class="dropdown-item" href="http://127.0.0.1:8000/men">Men</a>
                            <a class="dropdown-item" href="http://127.0.0.1:8000/women">Women</a>
                            <a class="dropdown-item" href="http://127.0.0.1:8000/kids">Kids</a>
                            <a class="dropdown-item" href="http://127.0.0.1:8000/bestseller">Best Seller</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                          </div>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="http://127.0.0.1:8000/about">About Us</a>
                        </li>
                      </ul>
                        <div class="flex-grow-1 d-flex">
                            <form class="form-inline flex-nowrap bg-light mx-0 mx-lg-auto rounded p-1">
                                 <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                        </div>
                        <div class="nav-cart">
                        <a class="fas fa-shopping-cart" style="color:black" href="http://127.0.0.1:8000/cart"><a>
                        </div>
                        <div class="nav-profile">
                        <a class="far fa-user" style="color:black" href="http://127.0.0.1:8000/profile"></a>
                        </div>

                    </div>
                  </nav>

                  <h1>Checkout</h1>
                  <div class="small-container cart page">
                        @for ($j = 0; $j < 1; $j++)
                        {{-- <tr> --}}
                        <div class="container">
                                <div class="card" style="background-color: transparent">
                                    <div class="cart-info">
                                        <img src={{asset('image/fotoproduk/'.$i->J_KODE);}} width="150">
                                        <div>
                                            <h2 class="Product-name">{{$i->J_MERK}}</h2>
                                            <h3 class="Product-size">{{$i->J_WARNA}}/{{$i->J_UKURAN}}</h3>
                                            <h4 class="Product-price">${{$i->J_HARGA}}</h4>
                                        </div>
                                    </div>
                                    <h5>x1</h5>
                                </div>
                            </div>
                        {{-- </tr> --}}
                        @endfor
                    <div class="detailco">
                        <div class="co-info" >
                            <div>
                                <br>
                                <h2>Detail Order</h2>
                                <br>
                                <h3>Total :</h3>
                                <h3>Disc :</h3>
                                <h3>Subtotal :</h3>
                                <br>
                                <br>
                                <h3>______________________________</h3>

                                <h3>Grand Total :</h3>
                            </div>
                        </div>
                    <div class="data-info" >
                        <div>
                            <br>
                            <br>
                            <br>
                            <h3>Total</h3>
                            <h3>Disc</h3>
                            <h3>Subtotal</h3>
                            <br>
                            <br>
                            <h3>____</h3>
                            <h3>Grand Total</h3>

                        </div>
                    </div>
                  </div>


            <div class="small-container cart page">
                     <div class="container">
                            {{-- <h1>Checkout</h1> --}}

                            {{-- <div class="card" style="background-color: transparent">
                                <div class="cart-info">
                                    <img src="image/men2.png" width="150">
                                    <div>
                                        <h2 class="Product-name">Daniel Wellington Classic</h2>
                                        <h3 class="Product-size">Size 28 color Brown</h3>
                                        <h4 class="Product-price">$229</h4>
                                    </div>
                                </div>
                            <h5>x1</h5>
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
                                <h5>x1</h5>
                            </div>
                            </div> --}}




                        </div>


                        <button class="paybutton">Pay Now</button>
                        <br>
                        <br>
                        <br>

                    </div>
                </div>
                </div>
            </section>
            <!--footer-->
<div class="footer-home">
    <p class="tulisankanan">WATCHOUT <br><br><br> Address <br> Store & Office <br> Made, Surabaya <br><br><br>Office Hour<br>Monday - Sunday <br> 10.00-18.00 </p>
  </div>
  <div class="footer-home2">
    <p class="tulisantengah">GET IN TOUCH<br><br><br>Customer Service<br>4452244<br><br>Phone<br>1474832<br><br>Service Center<br>3593748</p>
  </div>
  <div class="footer-home3">
    <p class="tulisankiri">SOCIAL MEDIA<br><br><br>Instagram<br>@watchout_co<br><br>Facebook<br>watchout_global<br><br>Twitter<br>watchout_global</p>
  </div>


     <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    </body>
</html>

