<!DOCTYPE html>
<html>
    <head>
        <title>About</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    </head>

        <body>
            <nav>
                <section>
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        {{-- diganti logo --}}
                        <a class="navbar-brand" href="http://127.0.0.1:8000/welcome">
                            <img src="image/logo.png" width="30" height="30" alt="">
                          </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                          <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                              <a class="nav-link" href="http://127.0.0.1:8000/welcome">Home <span class="sr-only">(current)</span></a>
                            </li>
                            {{-- <li class="nav-item">
                              <a class="nav-link" href="#">Link</a>
                            </li> --}}
                            <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Category
                              </a>
                              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="http://127.0.0.1:8000/all">All</a>
                                <a class="dropdown-item" href="http://127.0.0.1:8000/men">Men</a>
                                <a class="dropdown-item" href="http://127.0.0.1:8000/women">Women</a>
                                <a class="dropdown-item" href="http://127.0.0.1:8000/kids">Kids</a>
                                {{-- <a class="dropdown-item" href="http://127.0.0.1:8000/bestseller">Best Seller</a> --}}
                                {{-- <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a> --}}
                              </div>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="http://127.0.0.1:8000/about">About Us</a>
                            </li>
                          </ul>
                            <div class="flex-grow-1 d-flex">
                                <form class="form-inline flex-nowrap bg-light mx-0 mx-lg-auto rounded p-1">
                                     <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                    <button class="btn-search" type="submit">Search</button>
                                </form>
                            </div>
                            @if(session('login') != "")
                            <div class="nav-cart">
                        <a class="fas fa-shopping-cart" style="color:black" href="http://127.0.0.1:8000/cart"><a>
                        </div>
                        <div class="nav-profile">
                          <a class="far fa-user" style="color:black" href="http://127.0.0.1:8000/profile"></a>
                        </div>
                        @endif
                        @if(session('login') == "")
                        <div class="nav-profile">
                          <!-- <a class="far fa-user" style="color:black" href="http://127.0.0.1:8000/profile"></a> -->
                          <a class="nav-link" style="color:black" href="http://127.0.0.1:8000/sign-in">Sign In </a>
                        </div>
                        @endif

                </nav>
                <div class="bg">
                    <img src="image/about (3).png">
                </div>
                <div class="desc">
                    <img src="image/about_desc.png">
                </div>
                <div class="box-abt">
                    <img src="image/Vision.png">
                </div>
                <div class="box-team">
                    <img src="image/OurTeam.png">
                </div>

                <button class="btnScrollTop" id="btnScrollTop" onclick="scrollToTop()">
                    {{-- <img src="../image/up.png" width="30" height="30"> --}}
                    <i class="fas fa-arrow-up"></i>
                  </button>

                  <script> var btnScrollTop = document.getElementById(btnScrollTop)
                var rootElement = document.documentElement
                function scrollToTop(){
                  rootElement.scrollTo({
                    top: 0,
                    behavior: "smooth"
                  })
                }
                btnScrollTop.addEventListener("click", scrollToTop)
                </script>
<!--footer-->
<div class="footer-home-about">
    <p class="tulisankanan">WATCHOUT <br><br><br> Address <br> Store & Office <br> Made, Surabaya <br><br><br>Office Hour<br>Monday - Sunday <br> 10.00-18.00 </p>
    <p class="tulisantengah">GET IN TOUCH<br><br><br>Customer Service<br>4452244<br><br>Phone<br>1474832<br><br>Service Center<br>3593748</p>
    <p class="tulisankiri">SOCIAL MEDIA<br><br><br>Instagram<br><a style="color:white" href="https://www.instagram.com/danielwellington/">@watchout_co</a><br><br>Facebook<br><a style="color:white" href="https://www.facebook.com/">watchout_global</a><br><br>Twitter<br><a style="color:white" href="https://twitter.com/Twitter">watchout_global</a></p>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>

        </body>
