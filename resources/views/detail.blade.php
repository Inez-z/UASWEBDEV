<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>detail</title>
    {{-- <link rel="stylesheet" type="text/css" href="css/style.css"/> --}}
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
    {{-- <link href="" rel="stylesheet" type="text/css" > --}}
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>

<body>
    <section>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <!-- {{-- diganti logo --}} -->
            <a class="navbar-brand" href="/welcome">
                <img src={{asset('image/logo.png')}} width="30" height="30" alt="">

            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/welcome">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Category
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="http://127.0.0.1:8000/all">All</a>
                            <a class="dropdown-item" href="http://127.0.0.1:8000/men">Men</a>
                            <a class="dropdown-item" href="http://127.0.0.1:8000/women">Women</a>
                            <a class="dropdown-item" href="http://127.0.0.1:8000/kids">Kids</a>
                            {{-- <a class="dropdown-item" href="http://127.0.0.1:8000/bestseller">Best Seller</a> --}}
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

            </div>
        </nav>
        <form action="/checkout/{{$i->J_KODE}}" method="POST">
            @csrf
            <div class="container-detail">
                <div class="detail-produk">
                    <input type="hidden" name="namaproduk" value="{{$nama}}">
                    <h1 class="dpnama-jam">{{$nama}}</h1>
                    <input type="hidden" name="hargaproduk" value="{{$i->J_HARGA}}">
                    <h2 class="dpharga-jam">$ {{$i->J_HARGA}}</h2>
                    <h4>Color :</h4>
                    <h11>Size :</h11>
                    <h6>Description :</h6>
                    <div class="dp-isi">
                        <input type="hidden" name="warnaproduk" value="{{$i->J_WARNA}}">
                        <h8 class="dp-color">{{$i->J_WARNA}}</h8>
                        <input type="hidden" name="ukuranproduk" value="{{$i->J_UKURAN}}">
                        <h9 class="dp-size">{{$i->J_UKURAN}}</h9>
                        <input type="hidden" name="deskripsiproduk" value="{{$i->J_DESKRIPSI}}">
                        <h10 class="dp-desc">{{$i->J_DESKRIPSI}}</h10>
                    </div>
                    <div class="btn-actionnew">
                        <button class="btn minus-btn disabled" type="button">-</button>
                        <input type="text" id="quantity" value=1 size="2" min="1" max="{{$i->J_STOK}}"
                            name="jumlahproduk">
                        <button class="btn plus-btn" type="button">+</button>
                    </div>
                    {{-- @if(session('login') != "")
                    <div class="btn-dp">
                        <div class="dp">
                            <a href="/checkout/{{$i->J_KODE}}"><button class="btn-buynow"
                        style="font-family: Poppins"><i class="fas fa-money-bill"></i> Buy Now</button></a>
                </div>
                @endif
            </div> --}}
            </div>
            </div>

            <div class="box-dp">
                <div class="dp-foto-produk">
                    <a target="_blank" href="image/men2.png">
                        <img src={{asset('image/fotoproduk/'.$i->J_KODE);}} alt="Men">
                    </a>
                    {{-- {{ asset('img/photo.jpg'); }} --}}
                </div>
            </div>
            @if(session('login') != "")
            <div class="dp2">
                <a href="/cart/{{$email}}"><button class="btn-add" type="submit" style="font-family: Poppins"><i
                            class="fa fa-shopping-cart"></i> Add to Cart</button></a>
            </div>
            @endif

            <input type="hidden" value="{{$sku}}" name="kode">
        </form>



    </section>
    <script>
        document.querySelector(".minus-btn").setAttribute("disabled", "disabled");
        var valueCount

        document.querySelector(".plus-btn").addEventListener("click", function () {
            valueCount = document.getElementById("quantity").value;
            valueCount++;
            document.getElementById("quantity").value = valueCount

            if (valueCount > 1) {
                document.querySelector(".minus-btn").removeAttribute("disabled");
                document.querySelector(".minus-btn").classlist.remove("disabled")
            }


        })

        document.querySelector(".minus-btn").addEventListener("click", function () {
            valueCount = document.getElementById("quantity").value;
            valueCount--;
            document.getElementById("quantity").value = valueCount

            if (valueCount == 1) {
                document.querySelector(".minus-btn").setAttribute("disabled", "disabled")
            }



        })
    </script>

    <!--footer-->
    <div class="footer-home-detail">
        <p class="tulisankanan">WATCHOUT <br><br><br> Address <br> Store & Office <br> Made, Surabaya <br><br><br>Office
            Hour<br>Monday - Sunday <br> 10.00-18.00 </p>
        <p class="tulisantengah">GET IN TOUCH<br><br><br>Customer
            Service<br>4452244<br><br>Phone<br>1474832<br><br>Service Center<br>3593748</p>
        <p class="tulisankiri">SOCIAL MEDIA<br><br><br>Instagram<br><a style="color:white"
                href="https://www.instagram.com/danielwellington/">@watchout_co</a><br><br>Facebook<br><a
                style="color:white" href="https://www.facebook.com/">watchout_global</a><br><br>Twitter<br><a
                style="color:white" href="https://twitter.com/Twitter">watchout_global</a></p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
        integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous">
    </script>
</body>

</html>
