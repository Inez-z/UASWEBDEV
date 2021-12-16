<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WatchOut</title>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

</head>

<body> <!-- header -->
    <section>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            {{-- diganti logo --}}
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
                    <a class="dropdown-item" href="http://127.0.0.1:8000/bestseller">Best Seller</a>
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
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>

            </div>
          </nav>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="image/satu.png" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="image/Daniel Wellington.png" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="image/Christmas.png" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
    </section>

<!-- Product ----------------->
    <!--dropdown------------->
    <div class="dropdownmen">
        <button class="dropbtn">Sort By</button>
        <div class="dropdown-content">
        <a href="#">Low Price</a>
        <a href="#">High Price</a>
        </div>
      </div>

      <!-- Product ----------------->
    <!--dropdown------------->
    <div class="dropdownmen">
        <button class="dropbtn">Sort By</button>
        <div class="dropdown-content">
        <a href="#">Low Price</a>
        <a href="#">High Price</a>
        </div>
      </div>

<!--Category---->
<div class="categorymen">
<p>Category</p>
<button class="btncatmen">All</button><br>
<button class="btncatmen">Men</button><br>
<button class="btncatmen">Women</button><br>
<button class="btncatmen">Kids</button><br>
<a href="bestseller.html"><button class="btncatmen">Best Seller</button></a>
</div>

<div class="productmen" id="product-list">
<!--box product---------------------------------------------->
<div class="boxproduct-container">
      <div class="galleryproductmen">
        <a target="_blank" href="image/kids1.png">
          <img src="image/kids1.png" alt="kids1">
        </a>
        <div class="productname">Product Name</div>
        <div class="productprice">Price</div>
      </div>

      <div class="galleryproductmen">
        <a target="_blank" href="image/kids2.png">
          <img src="image/kids2.png" alt="kids2">
        </a>
        <div class="productname">Product Name</div>
        <div class="productprice">Price</div>
      </div>

      <div class="galleryproductmen">
        <a target="_blank" href="image/men1.png">
          <img src="image/men1.png" alt="men1">
        </a>
        <div class="productname">Product Name</div>
        <div class="productprice">Price</div>
      </div>

      <div class="galleryproductmen">
        <a target="_blank" href="image/men2.png">
          <img src="image/men2.png" alt="men2">
        </a>
        <div class="productname">Product Name</div>
        <div class="productprice">Price</div>
      </div>

      <div class="galleryproductmen">
        <a target="_blank" href="image/women1.png">
          <img src="image/women1.png" alt="women1">
        </a>
        <div class="productname">Product Name</div>
        <div class="productprice">Price</div>
      </div>

      <div class="galleryproductmen">
        <a target="_blank" href="image/women2.png">
          <img src="image/women2.png" alt="women2">
        </a>
        <div class="productname">Product Name</div>
        <div class="productprice">Price</div>
      </div>
</div>
<div>
<button class="seemoremen">See More</button>
</div>
</div>

<!--footer-->
<div class="footer-home">
<p class="tulisankanan">WATCHOUT <br><br><br> Address <br><br> Store & Office <br> Made, Surabaya <br><br><br><br>Office Hour <br><br>Monday - Sunday <br> 10.00-18.00 </p>
<p class="tulisantengah"><br><br><br><br>GET IN TOUCH<br><br><br>Customer Service<br>4452244<br><br><br>Phone<br>1474832<br><br><br>Service Center<br>3593748</p>
<p class="tulisankiri"><br><br><br><br>SOCIAL MEDIA<br><br><br>Instagram<br>@watchout_co<br><br><br>Facebook<br>watchout_global<br><br><br>Twitter<br>watchout_global</p>
</div>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>




</body>