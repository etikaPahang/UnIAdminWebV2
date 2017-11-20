<script src="https://www.gstatic.com/firebasejs/4.6.2/firebase.js"></script>
<script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyBPinJmPuy8fhFKvC5Ip64w3iBfTydCLsY",
    authDomain: "unistudentappv2.firebaseapp.com",
    databaseURL: "https://unistudentappv2.firebaseio.com",
    projectId: "unistudentappv2",
    storageBucket: "unistudentappv2.appspot.com",
    messagingSenderId: "832240155589"
  };
  firebase.initializeApp(config);
</script>

<?php
session_start();
$link=mysqli_connect("localhost", "root", "", "login_ui");
if(!$link){
    die("Koneksi error : ".mysqli_connect_errno()." - ".mysqli_connect_error());
}
if(isset($_SESSION['username'])){
    header("Location:home.php");
} else {
    
?>

<!doctype html>
<html lang="en" class="no-js">
    <head>
        <meta charset="utf-8" />
        <title>Login Admin</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Login and Registration From with HTML5 and CSS3" /> 
        <meta name="keywords" content="html5, css3, from, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico">
        <link rel="stylesheet" type="text/css" href="css2/demo.css"/>
        <link rel="stylesheet" type="text/css" href="css2/style2.css"/>
        <link rel="stylesheet" type="text/css" href="css2/2animate-custom.css"/>
    <style>
        
        body
        {
             background: url(web.png) no-repeat fixed;
            -webkit-background-size: 100% 100%;
            -moz-background-size: 100% 100%;
            -o-background-size: 100% 100%;
            background-size: 100% 100%;
        }    
        
    </style>
    </head>
    
    <body>
        
        <div class="container">
            <br>
            <br>
            <section>
                <div id="container demo">
                <a class="hiddenanchor" id="toregister"></a>
                <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                    <form action="process_login.php" method="post">
                    <h1>
                        <b>
                            <center>
                                <span style="font-size: 40px;">
                                Log in Admin UnI English Course
                                </span>
                            </center>
                        </b>
                    </h1>
                        <p>
                            <br>
                            <center>
                                <label for="username" class="uname" data-icon="u" >  
                                    <span style="color: blue; font-size: 20px;">
                                        Username :
                                    </span>
                                </label>
                                    <input name="username" required="required" type="text" placeholder="Username" style="color: black; font-size: 15px;"> 
                                 
                            </center>
                        </p>
                        
                        <p>
                            <center>
                                <label for="password" class="password" data-icon="p"> 
                                <span style="color: blue; font-size: 18px;">
                                        Password : 
                                    </span>
                                </label>
                            <input name="password" class="password" required="reqired" type="password" placeholder="Password" style="color: black; font-size: 15px;"/>
                            </center>
                        </p>
                            
                    <center>
                         <p class="keeplogin">
                            
                            
                                  <input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" />
                                <label for="loginkeeping">
                                <span style="font-size-adjust: 20px ">
                                    Tetap Masuk
                                </span>
                                </label>
                        </p>
                        <p class="login botton">
                        <input type="submit" value="Login" name="login" />
                        </p>
                           <p class="change link">
                             Ingat Saya?
                              <a hreg="#toregister" class="to_register">Join us</a>
                           
                            </p>
                    </center>
                       
                    </form>
                    </div>
                </div>
            </section>
        </div>
    </body>
</html>

<?php } ?>

