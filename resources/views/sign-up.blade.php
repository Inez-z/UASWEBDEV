<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style2.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>
    <div class="body-sign-up">
        <div class="container-sign-up">

        </div>
         <div class="form-sign-up" id="col-2">
           <form action="/sign-up/insert" method="POST">
               {{ csrf_field() }}
               <div class="title-sign-up">CREATE ACCOUNT</div>
               <div class="su-inputbox" id="su-firstname" >
                   <span>FIRST NAME</span> <br>
                   <input type="text" name="firstname" required="required" placeholder="Your first name" size="12" style="border: none; border-bottom: 1px solid #999999">
               </div>
               <div class="su-inputbox-2" id="su-lastname" >
                   <span>LAST NAME</span> <br>
                   <input type="text" name="lastname" required="required" size="12" placeholder="Your last name" style="border: none; border-bottom: 1px solid #999999">
               </div>
               <div class="su-inputbox" id="su-phone" >
                   <span>PHONE</span> <br>
                   <input type="text" name="phone" required="required" size="35" placeholder="Your phone number" style="border: none; border-bottom: 1px solid #999999">
               </div>
               <div class="su-inputbox" id="su-address" >
                   <span>ADDRESS</span> <br>
                   <input type="text" name="address" required="required" size="35" placeholder="Your address" style="border: none; border-bottom: 1px solid #999999">
               </div>
                <div class="su-inputbox" id="su-email">
                 <span>EMAIL</span> <br>
                   <input type="email" name="email" required="required" size="35" placeholder="Your email" style="border: none; border-bottom: 1px solid #999999">
               </div>
               <div class="su-inputbox" id="su-password" >
                   <span>PASSWORD</span> <br>
                   <input type="password" name="password" required="required" size="35" placeholder="*********" style="border: none; border-bottom: 1px solid #999999">
               </div>
               <div id="sign-up">
                   <input type="submit" name="" value="SIGN UP" onclick="" style="letter-spacing: 0.03em; font-size: 12px; weight: 150px; height: 38px; border: 0; border-radius: 29px; background-color: #b8926a; color: #ffff; padding: 7px 38px 8px 41px;">
               </div>
           </form>
           <div id="move-sign-in">
               <p style="font-size: 12px">Already have an account? <a href="sign-in"><span style="font-weight:500; color:black">SIGN IN</span></a></p>
           </div>
         </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>

</body>
</html>
