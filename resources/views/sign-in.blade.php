<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style2.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

</head>

<body>
    <div class="body-sign-in">
        <div class="container-signin-right">
        </div>
        @if(Session::get('authentication2'))
      <div class="alert show" role="alert">
        {{Session::get('authentication')}}
        <span class="msg">You have successfully created your account! Please Login.</span>
        </div>
      @endif
        <br>
        <br>
        <div class="container-signin-left">
            <img src={{asset('image/signin.jpg')}} width="300" height="350" alt="" style="margin-top:27px; margin-left:17px; border-radius: 5%">
        </div>
        <div class="form-sign-in">
            <img src="signIn.png" alt="">
         </div>
         <div class="form-sign-in" id="col-2">
            @if (Session::has('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ Session::get('success') }}</strong>
            </div>
        @endif
        @if (Session::has('error'))
            <div class="alert alert-danger alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ Session::get('error') }}</strong>
            </div>
        @endif
        @if (Session::has('keluar'))
            <div class="alert alert-warning alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ Session::get('keluar') }}</strong>
            </div>
        @endif
           <form action="/sign-in2" method="POST">
            @csrf
               <div class="text">SIGN IN</div>
               <div class="inputbox" id="email">
                 <span>EMAIL</span> <br>
                   <input type="email" name="email" required="required" size="25" style="border: none; border-bottom: 1px solid #999999">
               </div>
               <div class="inputbox" id="password" >
                   <span>PASSWORD</span> <br>
                   <input type="password" name="password" required="required" size="25" style="border: none; border-bottom: 1px solid #999999">
               </div>
               <div id="sign-in">
                   <input type="submit" name="" value="SIGN IN" onclick="" style="letter-spacing: 0.03em; font-size: 12px; weight: 150px; height: 38px; border: 0; border-radius: 29px; background-color: #b8926a; color: #ffff; padding: 7px 38px 8px 41px; position: absolute; top: 330px; left:748px">
               </div>
           </form>
           <div id="regist">
               <p style="font-size: 12px">Don't have an account? <a href="sign-up"><span style="font-weight:500; color:black"> SIGN UP</span></a></p>
           </div>
         </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>

</body>
</html>
