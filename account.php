<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="with=device-width, initial-scale=1.0"> 
<title>ACCOUNT</title>
<link rel="stylesheet" href="account.css">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.2/css/fontawesome.min.css">
</head>
<body>

    <!--HEADER-->

    <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                   <img src="images/logo.png" alt="NO IMAGES" width="125px">
                </div>
                <nav>
                   <ul>
                    <li><a href="watch.php" target="_self"><b>Home</b></a></li>
                    <li><a href="about.html" target="_self"><b>About</b></a></li>
                    <li><a href="products.html" target="_self"><b>Products</b></a></li>
                    <li><a href="account.html" target="_self"><b>Account</b></a></li>
                    <li><a href="cart.html" target="_self"><b>Cart</b></a></li>
                    <li><a href="contacts.html" target="_self"><b>Contacts</b></a></li>
                   </ul>
                </nav>
                <img src="images/watch3.pg">
                <img src="images/watch3.pg" class="menu-icon" onclick="menutoggle()">
              </div>
        </div>
          
    
    </div>

   <!---HEADER-->
   <!--ACCOUNT PAGE-->

   <div class="account-page">
    <div class="container">
        <div class="row-1">
            <div class="col-2">
                <img src="images/watch1.jpg" width="100%">
            </div>
            <div class="col-2">
                <div class="form-container">
                   <div class="form-btn">
                    <span onclick="login()">Login</span>
                    <span onclick="register()">Register</span>
                    <hr id="indicator">
                   </div>

                    <form id="LoginForm">
                      <input type="text" placeholder="Username">
                      <input type="password" placeholder="Password">
                      <button type="submit" class="btn">Login</button>
                      <a href="">Forgot Password</a>
                    </form>

                     
                    <form action = "connect.php" method = "post" id="RegForm" >
                        <input type="text" name="username" placeholder="Username">
                        <input type="email" name="email" placeholder="Email">
                        <input type="password" name="password" placeholder="Password">
                        <button type="submit" class="btn">Register</button>
                    </form>
                   </div>
                </div>
            </div>
        </div>
    </div>
   </div>

  
     
     <!---FOOTER-->

     
     <footer>
       <div class="footer">
         <div class="row">
           <div class="footer-a">
             <h4>Contact Us</h4>
             <p>Phone: 0719428996</p>
             <p>Email: watchmart@gmail.com</p>
           </div>
           <div class="footer-b">
             <h4>Links</h4>
             <ul>
               <li><a href="#">Home</a></li>
               <li><a href="#">About Us</a></li>
               <li><a href="#">Products</a></li>
               <li><a href="#">Account</a></li>
               <li><a href="#">Contacts</a></li>
             </ul>
           </div>
           <div class="footer-c">
             <p class="text-right">Copyright © 2023 Watchmart Inc.</p>
           </div>
         </div>
       </div>
     </footer>
   
    <!----Javasript--->

    <script>
      var LoginForm = document.getElementById("LoginForm");
      var RegForm = document.getElementById("RegForm");
      var indicator = document.getElementById("indicator");

        function register(){
          RegForm.style.transform = "translateX(0px)";
          LoginForm.style.transform = "translateX(0px)";
        }
  
        function login(){
          RegForm.style.transform = "translateX(300px)";
          LoginForm.style.transform = "translateX(300px)";
        }
  
    </script>


</body>
</html>