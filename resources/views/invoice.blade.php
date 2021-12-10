<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style2.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>
    <div class="body-invoice">
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
        <div class="container-invoice">
            <h4 id="title-invoice">INVOICE</h4>
            <h5 id="date-invoice">10/12/2021</h5>
            <div class="subtitle-top">
                <p>Invoice Number</p>
                <p>Customer Name</p>
                <p>Address</p>
            </div>
            <div class="subtitle-top-value">
                <p>: INV/466/HJ</p>
                <p>: Zefanya Okta</p>
                <p>: Jalan Raya Indah 21 Jakarta</p>
            </div>
            <div class="table-invoice">
                <tr>
                    <th>Product Name</th>
                    <th>Size</th>
                    <th>Color</th>
                    <th>Price</th>
                    <th>Qty</th>
                    <th>Subtotal</th>
                </tr>
            </div>
            </div>

            <div class="container2-invoice">
                <div class="subtitle-bottom">
                    <p>Total</p>
                    <p>Discount</p>
                    <p>Grand Total</p>
                </div>
                <div class="subtitle-bottom-value">
                    <p>: $289</p>
                    <p>: 5%</p>
                    <p>: $280</p>
                </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>

</body>
</html>
