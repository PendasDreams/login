

<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NECUMPETO</title>
  

    
<body>


    <heading>
        <img id="logo" src="img/dymkajede.jpg">
        <a id="nadpis">CHIsLLROOM</a>

<?php


phpinfo(INFO_MODULES);


?>

<?php

$serverName="localhost";
$db_Username="root";
$db_Password="root";
$db_Name="njsbeta2";


$conn = "mysqli_connect($serverName, $db_Username, $db_Password, $db_Name)";

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}
else{
    echo"deasadssse";

}
?>



    </heading>
            <div id="hero" class="hero">
                <div id="reg-form">
                    <div class="button-box">
                        <div id="btn"></div>
                            <button type="button" class="toggle-btn" onclick="login()">Log In</button>
                            <button type="button" class="toggle-btn" onclick="register()">Register</button>
                    </div>
                 
                        <form action="/signup.inc.php"  id="login" class="input-group" method="post">
                            <input type="text" class="input-field" name="name_L" placeholder="Email" required>
                            <input type="text" class="input-field" name="pwrd_L" placeholder="Heslo" required>
                            <input type="checkbox" class="check-box"><span> seš GAY</span>
                            <button type="submit" class="submit-btn" name="btn_L"> Login</button>
                        </form> 
                        <form action="signup.inc.php" id="register"  class="input-group" method="post">
                            <input type="text" class="input-field" name="name_R" placeholder="Celé Jméno" required>
                            <input type="text" class="input-field" name="@" placeholder="Email" required>
                            <input type="text" class="input-field" name="pwrd_R" placeholder="Heslo" required>
                            <input type="text" class="input-field" name="pwrd_again_R" placeholder="Heslo znovu" required>
                            <input type="checkbox" class="check-box"><span> I agree to have massive anal</span>
                            <button type="submit" class="submit-btn" name="btn_R"> Register</button>
                        </form> 
                </div>
                      <script>
                          var x = document.getElementById("login")
                          var y = document.getElementById("register")
                          var z = document.getElementById("btn")

                          function register(){
                              x.style.left = "-400px";
                              y.style.left = "50px";
                              z.style.left = "110px";
                          }
                          function login(){
                              x.style.left = "50px";
                              y.style.left = "450px";
                              z.style.left = "0px";
                          }

                      </script>      
            </div>
    
</body>
</html>