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
                    <a class="dropdown-item" href="#">All</a>
                    <a class="dropdown-item" href="#">Men</a>
                    <a class="dropdown-item" href="#">Women</a>
                    <a class="dropdown-item" href="#">Kids</a>
                    <a class="dropdown-item" href="#">Best Seller</a>
                    {{-- <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a> --}}
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

<!--box category, shop now---------------------------------------------->
<div class="box-container">
    <div class="galleryshopnow">
      <a target="_blank" href="image/men.jpg">
        <img src="image/men.jpg" alt="Men">
      </a>
      <div class="category">Men</div>
      <a href="#"><button class="shopnow-btn">Shop Now</button></a>
    </div>

    <div class="galleryshopnow">
      <a target="_blank" href="image/women.jpg">
        <img src="image/women.jpg" alt="mockup">
      </a>
      <div class="category">Women</div>
      <a href="#"><button class="shopnow-btn">Shop Now</button></a>
    </div>

    <div class="galleryshopnow">
      <a target="_blank" href="image/kids.jpg">
        <img src="image/kids.jpg" alt="company">
      </a>
      <div class="category">Kids</div>
      <a href="#"><button class="shopnow-btn">Shop Now</button></a>
    </div>
</div>

<!-- Product ----------------->
<div class="product" id="product-list">
    <!--text------------->
          <div class="product-text">
              <p>Our Collections</p>
              <p>Best Seller</p>
              <p>Best Seller | Low Price | High Price</p>
          </div>

    <!--box product---------------------------------------------->
      <div class="boxproduct-container">
              <div class="galleryproduct">
                <a target="_blank" href="image/kids1.png">
                  <img src="image/kids1.png" alt="kids1">
                </a>
                <div class="productname">Product Name</div>
                <div class="productprice">Price</div>
              </div>

              <div class="galleryproduct">
                <a target="_blank" href="image/kids2.png">
                  <img src="image/kids2.png" alt="kids2">
                </a>
                <div class="productname">Product Name</div>
                <div class="productprice">Price</div>
              </div>

              <div class="galleryproduct">
                <a target="_blank" href="image/men1.png">
                  <img src="image/men1.png" alt="men1">
                </a>
                <div class="productname">Product Name</div>
                <div class="productprice">Price</div>
              </div>

              <div class="galleryproduct">
                <a target="_blank" href="image/men2.png">
                  <img src="image/men2.png" alt="men2">
                </a>
                <div class="productname">Product Name</div>
                <div class="productprice">Price</div>
              </div>

              <div class="galleryproduct">
                <a target="_blank" href="image/women1.png">
                  <img src="image/women1.png" alt="women1">
                </a>
                <div class="productname">Product Name</div>
                <div class="productprice">Price</div>
              </div>

              <div class="galleryproduct">
                <a target="_blank" href="image/women2.png">
                  <img src="image/women2.png" alt="women2">
                </a>
                <div class="productname">Product Name</div>
                <div class="productprice">Price</div>
              </div>
      </div>
      </div>

    <!-- Free Shipping, best quality, Online support -->
    <div class="row-container">
        <div class="column" style="background-color:#2d2d2b;">
          <br>
          <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
          width="60" height="40"
          viewBox="0 0 172 172"
          style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M17.2,28.66667c-6.33533,0 -11.46667,5.13133 -11.46667,11.46667v80.26667c-2.06765,-0.02924 -3.99087,1.05709 -5.03322,2.843c-1.04236,1.78592 -1.04236,3.99474 0,5.78066c1.04236,1.78592 2.96558,2.87225 5.03322,2.843h11.46667h6.02448c1.4184,9.66302 9.74257,17.2 19.77552,17.2c10.03295,0 18.35712,-7.53698 19.77552,-17.2h40.42448h11.75781c1.4184,9.66302 9.74257,17.2 19.77552,17.2c10.03295,0 18.35712,-7.53698 19.77552,-17.2h11.75781c2.06765,0.02924 3.99087,-1.05709 5.03322,-2.843c1.04236,-1.78592 1.04236,-3.99474 0,-5.78066c-1.04236,-1.78592 -2.96558,-2.87225 -5.03322,-2.843v-28.66667h-34.4v-22.93333c0,-3.1648 2.56853,-5.73333 5.73333,-5.73333h16.38255l-1.93724,-4.51276c-1.806,-4.214 -5.95057,-6.95391 -10.53724,-6.95391h-38.30808v-11.46667c0,-6.33533 -5.13133,-11.46667 -11.46667,-11.46667zM43,120.4c4.81756,0 8.6,3.78244 8.6,8.6c0,4.81756 -3.78244,8.6 -8.6,8.6c-4.81756,0 -8.6,-3.78244 -8.6,-8.6c0,-4.81756 3.78244,-8.6 8.6,-8.6zM134.73333,120.4c4.81756,0 8.6,3.78244 8.6,8.6c0,4.81756 -3.78244,8.6 -8.6,8.6c-4.81756,0 -8.6,-3.78244 -8.6,-8.6c0,-4.81756 3.78244,-8.6 8.6,-8.6z"></path></g></g></svg>
          <h2>Free Shipping</h2>
          <p>Worldwide shipping for free</p>
        </div>
        <div class="column" style="background-color:#b8926a;">
          <br>
          <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
          width="64" height="40"
          viewBox="0 0 172 172"
          style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M85.16016,11.25391c-1.3915,0 -2.51953,1.12803 -2.51953,2.51953c0,1.3915 1.12803,2.51953 2.51953,2.51953c1.3915,0 2.51953,-1.12803 2.51953,-2.51953c0,-1.3915 -1.12803,-2.51953 -2.51953,-2.51953zM155.70703,14.61328c-1.3915,0 -2.51953,1.12803 -2.51953,2.51953c0,1.3915 1.12803,2.51953 2.51953,2.51953c1.3915,0 2.51953,-1.12803 2.51953,-2.51953c0,-1.3915 -1.12803,-2.51953 -2.51953,-2.51953zM38.46419,17.97266l24.98535,44.97429c1.66457,-0.75183 3.37609,-1.41744 5.12633,-1.9966l-23.8765,-42.97769zM48.54231,17.97266l23.33453,42.00137c1.74654,-0.45318 3.52787,-0.81833 5.33891,-1.09245l0.98419,-1.7722c-2.54506,-4.58152 -18.29403,-32.92927 -21.74277,-39.13672zM60.29947,17.97266c2.28572,4.11389 17.31016,31.15724 19.82163,35.67761l3.11726,-5.6112l-16.70371,-30.06641zM103.785,17.97266l-22.47304,40.45357c2.26791,-0.1636 4.26147,-0.17472 6.28046,-0.08267l22.42777,-40.3709zM113.86313,17.97266l-22.59246,40.66746c2.44529,0.28219 4.84103,0.72921 7.17345,1.33457l23.33388,-42.00203zM125.62094,17.97266l-23.8765,42.97769c1.75023,0.57916 3.46209,1.24477 5.12633,1.9966l24.98535,-44.97429zM24.69141,24.69141c-1.3915,0 -2.51953,1.12803 -2.51953,2.51953c0,1.3915 1.12803,2.51953 2.51953,2.51953c1.3915,0 2.51953,-1.12803 2.51953,-2.51953c0,-1.3915 -1.12803,-2.51953 -2.51953,-2.51953zM148.14844,34.76953c-3.70472,0 -6.71875,3.01403 -6.71875,6.71875c0,3.70472 3.01403,6.71875 6.71875,6.71875c3.70472,0 6.71875,-3.01403 6.71875,-6.71875c0,-3.70472 -3.01403,-6.71875 -6.71875,-6.71875zM23.85156,49.88672c-5.55708,0 -10.07812,4.52105 -10.07812,10.07813c0,5.55708 4.52105,10.07813 10.07813,10.07813c5.55708,0 10.07813,-4.52105 10.07813,-10.07812c0,-5.55708 -4.52105,-10.07812 -10.07812,-10.07812zM137.23047,58.28516c-1.3915,0 -2.51953,1.12803 -2.51953,2.51953c0,1.3915 1.12803,2.51953 2.51953,2.51953c1.3915,0 2.51953,-1.12803 2.51953,-2.51953c0,-1.3915 -1.12803,-2.51953 -2.51953,-2.51953zM85.16016,61.64453c-27.32247,0 -49.55078,22.22831 -49.55078,49.55078c0,27.32247 22.22831,49.55078 49.55078,49.55078c27.32247,0 49.55078,-22.22831 49.55078,-49.55078c0,-27.32247 -22.22831,-49.55078 -49.55078,-49.55078zM85.16016,71.72266c21.76539,0 39.47266,17.70727 39.47266,39.47266c0,21.76539 -17.70727,39.47266 -39.47266,39.47266c-21.76539,0 -39.47266,-17.70727 -39.47266,-39.47266c0,-21.76539 17.70727,-39.47266 39.47266,-39.47266zM85.16016,75.08203c-19.9127,0 -36.11328,16.20059 -36.11328,36.11328c0,19.9127 16.20059,36.11328 36.11328,36.11328c19.9127,0 36.11328,-16.20059 36.11328,-36.11328c0,-19.9127 -16.20059,-36.11328 -36.11328,-36.11328zM85.59254,87.49728c0.72764,0 1.37293,0.46866 1.59767,1.16069l4.4164,13.59169h14.29112c0.72764,0 1.37227,0.46866 1.59702,1.16069c0.22441,0.69203 -0.0213,1.45085 -0.6102,1.8785l-11.56163,8.40041l4.41574,13.59169c0.22508,0.69237 -0.0213,1.44986 -0.6102,1.87784c-0.58856,0.42765 -1.38573,0.42765 -1.97429,0l-11.56228,-8.39975l-11.56163,8.39975c-0.29428,0.21399 -0.64046,0.32084 -0.98682,0.32084c-1.13278,0 -1.95242,-1.10823 -1.59767,-2.19868l4.4164,-13.59169l-11.56229,-8.40041c-0.5889,-0.42765 -0.83528,-1.18646 -0.6102,-1.8785c0.22474,-0.69237 0.87003,-1.16069 1.59767,-1.16069h14.29178l4.41574,-13.59169c0.22474,-0.69237 0.87003,-1.16069 1.59767,-1.16069zM85.59189,94.61299l-3.196,9.83601c-0.22474,0.69237 -0.86937,1.16003 -1.59701,1.16003h-10.34254l8.36694,6.07968c0.5889,0.42765 0.83527,1.18581 0.6102,1.87784l-3.196,9.83601l8.36694,-6.07902c0.58856,-0.42765 1.38573,-0.42765 1.97429,0l8.36694,6.07902l-3.196,-9.83601c-0.22508,-0.69203 0.0213,-1.44985 0.6102,-1.87784l8.36694,-6.07968h-10.34189c-0.72663,0 -1.37162,-0.46767 -1.59636,-1.16003zM19.65234,95.23828c-1.3915,0 -2.51953,1.12803 -2.51953,2.51953c0,1.3915 1.12803,2.51953 2.51953,2.51953c1.3915,0 2.51953,-1.12803 2.51953,-2.51953c0,-1.3915 -1.12803,-2.51953 -2.51953,-2.51953zM152.34766,101.95703c-1.3915,0 -2.51953,1.12803 -2.51953,2.51953c0,1.3915 1.12803,2.51953 2.51953,2.51953c1.3915,0 2.51953,-1.12803 2.51953,-2.51953c0,-1.3915 -1.12803,-2.51953 -2.51953,-2.51953zM143.94922,142.26953c-1.3915,0 -2.51953,1.12803 -2.51953,2.51953c0,1.3915 1.12803,2.51953 2.51953,2.51953c1.3915,0 2.51953,-1.12803 2.51953,-2.51953c0,-1.3915 -1.12803,-2.51953 -2.51953,-2.51953zM36.44922,148.98828c-1.3915,0 -2.51953,1.12803 -2.51953,2.51953c0,1.3915 1.12803,2.51953 2.51953,2.51953c1.3915,0 2.51953,-1.12803 2.51953,-2.51953c0,-1.3915 -1.12803,-2.51953 -2.51953,-2.51953z"></path></g></g></svg>
          <h2>Best Quality</h2>
          <p>Offers the best quality and style</p>
        </div>
        <div class="column" style="background-color:#d4c8be;">
          <br>
          <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
          width="64" height="40"
          viewBox="0 0 172 172"
          style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M13.4375,10.75c-1.48427,0 -2.6875,1.20323 -2.6875,2.6875v69.875c0,1.48427 1.20323,2.6875 2.6875,2.6875h43c1.48427,0 2.6875,-1.20323 2.6875,-2.6875v-69.875c0,-1.48427 -1.20323,-2.6875 -2.6875,-2.6875h-8.0625v2.6875c0,2.96853 -2.40647,5.375 -5.375,5.375h-16.125c-2.96853,0 -5.375,-2.40647 -5.375,-5.375v-2.6875zM26.875,10.75v2.6875h16.125v-2.6875zM75.25,18.8125v5.375h5.375v-5.375zM86,18.8125v5.375h5.375v-5.375zM96.75,18.8125v5.375h5.375v-5.375zM107.5,18.8125v5.375h13.4375c1.48427,0 2.6875,1.20323 2.6875,2.6875v12.32471l-3.47485,-3.47485l-3.80029,3.80029l8.0625,8.0625c1.04949,1.04926 2.7508,1.04926 3.80029,0l8.0625,-8.0625l-3.80029,-3.80029l-3.47485,3.47485v-12.32471c0,-4.4528 -3.6097,-8.0625 -8.0625,-8.0625zM21.5,45.6875h5.375v5.375h-5.375zM32.25,45.6875h5.375v5.375h-5.375zM43,45.6875h5.375v5.375h-5.375zM127.17334,53.7605c-7.98671,-0.23267 -15.72748,2.77748 -21.45881,8.34466c-5.73133,5.56718 -8.96508,13.21725 -8.96453,21.20734h5.375c0,-13.35839 10.82911,-24.1875 24.1875,-24.1875c13.35839,0 24.1875,10.82911 24.1875,24.1875h5.375c0.0011,-15.99249 -12.71595,-29.08631 -28.70166,-29.552zM126.39124,72.56775c-7.88944,-0.03384 -14.64204,5.65221 -15.95178,13.43225h12.55042l10.1831,-5.09155c1.03474,-0.51718 2.28433,-0.3142 3.10217,0.50391l4.58765,4.58765h1.34375c-1.30118,-7.72916 -7.97746,-13.39946 -15.81531,-13.43225zM133.84485,86.58264l-9.01782,4.52466c-0.37456,0.18107 -0.78603,0.27271 -1.20203,0.2677h-13.4375v8.0625c-0.00524,5.9387 3.25689,11.39877 8.48888,14.20847c5.23199,2.80971 11.58541,2.51344 16.53322,-0.77097h-8.8971v-5.375h13.94141c1.42838,-2.44697 2.18188,-5.22914 2.18359,-8.0625v-8.0625h-2.6875c-0.71273,-0.00011 -1.39623,-0.28333 -1.90015,-0.78735zM104.8125,88.6875c-2.96853,0 -5.375,2.40647 -5.375,5.375c0,2.96853 2.40647,5.375 5.375,5.375zM147.8125,88.6875v10.75c2.96853,0 5.375,-2.40647 5.375,-5.375c0,-2.96853 -2.40647,-5.375 -5.375,-5.375zM115.5625,94.0625h5.375v5.375h-5.375zM131.6875,94.0625h5.375v5.375h-5.375zM34.89551,104.8125c-0.69815,0.0111 -1.36457,0.29349 -1.85815,0.78735l-8.0625,8.0625l3.80029,3.80029l3.47485,-3.47485v17.69971c0,4.4528 3.6097,8.0625 8.0625,8.0625h13.4375v-5.375h-13.4375c-1.48427,0 -2.6875,-1.20323 -2.6875,-2.6875v-17.69971l3.47485,3.47485l3.80029,-3.80029l-8.0625,-8.0625c-0.51416,-0.51445 -1.21489,-0.79852 -1.94214,-0.78735zM120.9375,120.22888v3.39612c0,2.96853 2.40647,5.375 5.375,5.375c2.96853,0 5.375,-2.40647 5.375,-5.375v-3.39612c-3.52137,0.94242 -7.22863,0.94242 -10.75,0zM116.29736,127.44104l-11.5531,5.13354c-4.85935,2.15296 -7.9931,6.96778 -7.99426,12.28272v16.3927h59.125v-16.3927c-0.0014,-5.31055 -3.13026,-10.12213 -7.98376,-12.27747l-11.5531,-5.13879c-1.56623,4.17708 -5.55932,6.94441 -10.02039,6.94441c-4.46106,0 -8.45416,-2.76733 -10.02039,-6.94441zM59.125,134.375v5.375h5.375v-5.375zM69.875,134.375v5.375h5.375v-5.375zM80.625,134.375v5.375h5.375v-5.375z"></path></g></g></svg>
          <h2>Online Suport 24/7</h2>
          <p>Always ready to service you 24/7</p>
        </div>
    </div>

  <!-- foto-foto -->
  <div class="foto-container">
    <div class="foto-foto">
      <a target="_blank" href="image/gambar1.jpg">
        <img src="image/gambar1.jpg" alt="gambar1">
      </a>
    </div>

    <div class="foto-foto">
      <a target="_blank" href="image/gambar2.jpg">
        <img src="image/gambar2.jpg" alt="gambar2">
      </a>
    </div>
  </div>

<!--Popular This Week-->
<div class="popular-container">
    <p style="font-size:35px">Popular This Week</p>

  <!--box popular--------------------------------------------->
    <div class="boxpopular-container">
      <div class="popularproduct">
        <a target="_blank" href="image/kids1.png">
          <img src="image/kids1.png" alt="kids1">
        </a>
        <div class="productname">Product Name</div>
        <div class="productprice">Price</div>
      </div>

      <div class="popularproduct">
        <a target="_blank" href="image/kids2.png">
          <img src="image/kids2.png" alt="kids2">
        </a>
        <div class="productname">Product Name</div>
        <div class="productprice">Price</div>
      </div>

      <div class="popularproduct">
        <a target="_blank" href="image/men1.png">
          <img src="image/men1.png" alt="men1">
        </a>
        <div class="productname">Product Name</div>
        <div class="productprice">Price</div>
      </div>
    </div>
    </div>
  </div>

  <!--Couple Watches-->
  <div class="couple-container">
    <a target="_blank" href="image/7.png">
      <img src="image/7.png" alt="couple">
    </a>
  </div>

<!--footer-->
<div class="footer-home">
    <p class="tulisankanan">WATCHOUT <br><br><br> Address <br> Store & Office <br> Made, Surabaya <br><br><br>Office Hour<br>Monday - Sunday <br> 10.00-18.00 </p>
    <p class="tulisantengah">GET IN TOUCH<br><br><br>Customer Service<br>4452244<br><br>Phone<br>1474832<br><br>Service Center<br>3593748</p>
    <p class="tulisankiri">SOCIAL MEDIA<br><br><br>Instagram<br>@watchout_co<br><br>Facebook<br>watchout_global<br><br>Twitter<br>watchout_global</p>
  </div>



  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>

</body>
