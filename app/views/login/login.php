<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
      <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="public/assets/css/style.css">
      <link rel="stylesheet" href="public/assets/css/loginstyles.css">
      <link href="https://fonts.googleapis.com/css?family=Montserrat:900" rel="stylesheet">

      <title>Landing Page</title>
  </head>
  <body>
    <!-- Navbar (sit on top) -->
    <div class="w3-top">
    <div class="w3-bar w3-white w3-card" id="myNavbar">
            
            <a href="index.html" class="w3-bar-item w3-button w3-wide"> <img src="public/assets/logo/Logo.png" alt="">FeedOurMind</a>
        
        <!-- Right-sided navbar links -->
        
        <div class="newnavi">
            <div class="w3-right w3-hide-small">
    
                    <a href="index.html" class="w3-bar-item w3-button">HOME</a>
                    <a href="work.html" class="w3-bar-item w3-button">ARTICLES</a>
                    <a href="#work" class="w3-bar-item w3-button">SERVICE</a>
                    <a href="about.html" class="w3-bar-item w3-button">ABOUT</a>
                    <a href="signup.html" class="w3-bar-item w3-button" style="margin-right: 30px;">Sign Up</a>
                <!--<i class="fa fa-user">
                    <i class="fa fa-th">
                        <i class="fa fa-send">
                            <i class="fa fa-envelope">-->
                <!-- <a>
                    <form action="/action_page.php"></form>
                        <input type="text" placeholder="Search.." name="search">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </a> -->
                
            </div>
        
        </div>
        <!-- Hide right-floated links on small screens and replace them with a menu icon -->
        <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
</div>
<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
    <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
    <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT</a>
    <a href="#team" onclick="w3_close()" class="w3-bar-item w3-button">HOME</a>
    <a href="#work" onclick="w3_close()" class="w3-bar-item w3-button">WORK</a>
    <a href="#pricing" onclick="w3_close()" class="w3-bar-item w3-button">SERVICE</a>
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">LOGIN</a>
</nav>
    <div class="wrapper">
          <div class="main">
            
            <div class="login">
              <form class="form-cont">
                  <h1>Log<span>!</span>n</h1>
                  <input type="text" placeholder="username" id="username">
                  <input type="password" placeholder="password" id="password">
                  <div class="remember">
                    <p style="color: rgb(255, 255, 255);margin-top: -15px;"><label><input type="checkbox" name=""> Remember me</label></p>
                </div>
                <div class="inputBx">

                    <input type="submit" value="Login" name="" style="margin-top: -20px;font-weight: bold;">
                </div>
                <div class="inputBx">
                    <p style="color: rgb(255, 255, 255);margin-top: -15px;">Don't have an account?<a href="#"> Sign up</a></p>
                </div>
                  <!-- <div id="container">
                  <input id="buttonLogin1" type="submit" value="Login">
                  <a href="signup.html"><input id="buttonLogin2"type="button" value="SignUp"></a></div> -->
                  <h3>Login with social media</h3>
                  <ul class="sci">
                      <li>
                          <a href="https://ja-jp.facebook.com/login" class="fa fa-facebook"></a>
                      </li>
                      <li>
                          <a href="https://www.instagram.com/" class="fa fa-instagram"></a>
                      </li>
                      <li>
                          <a href="https://mobile.twitter.com/i/flow/login" class="fa fa-twitter"></a>
                      </li>
                      <li>
                          <a href="https://slack.com/signin#/signin" class="fa fa-slack"></a>
                      </li>
                  </ul>         
                </div>
                
                </form>     
                
            </div> <!--end of login div-->
            
          </div>
                   
    </div>

</body>
</html>