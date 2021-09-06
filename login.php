<?php
session_start();
include ('connectdb.php');
if(isset($_POST['login_submit'])){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $sql = "SELECT * FROM `logindata` where `username`= '$username' && `password`= '$password'";
    $result = $conn->query($sql);

    echo $sql;
    if ($result->num_rows > 0) {
        $_SESSION['logged_in']='1';

        header('Location: logedin.php');
    }
    else{
        echo "<script>alert('wrong password or username details')</script>";

    }
}




// if ($_SERVER["REQUEST_METHOD"] == "POST" ){


//     include ('connectdb.php');
//     include ('logedin.php');


//     session_start();

//     $username = $_POST["username"];
//     $password = $_POST["password"];

//     $sql = "SELECT * FROM `logindata` where `username`= '$username' && `password`= '$password'";
//     $result = $conn->query($sql);
//     if ($result->num_rows > 0) {
//         $_SESSION['logged_in']='1';
//         echo "alert('smarty')";
//         header('Location: logedin.php');
//     }
//     else{
//         echo "<script>alert('hey ur not in')</script>";

//     }

// }

?>



 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RUSE BURG UNIVERSITY</title>
    <link rel="icon" href="mainlogo3.png">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<body>
    <section class="loginpage">


        <nav>
            <img src="mainlogo.png"></a>

            <div class="mobox">
                <ul id="code">
                    <i class="fa fa-times" id="exit" onclick="hideMenu()"></i>

                    <li><a href="hello.php" style="color: white;">Home</a></li>

                </ul>
            </div>

            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <div class="login" >

            <form action="./login.php" method="POST">
                <div class="logbox">
                    <div class="user">
                        <h1 style="padding-bottom: 15px;">Login</h1>

                        <input type="text" placeholder="Username" name="username"  required >
                    </div>
                    <div class="user">

                        <input type="password" placeholder="Password" name="password"  required >
                    </div>

                </div>

                <button  type="submit" name="login_submit" class="btnlog">Login</button>
            </form>
                <div class="signup">
                    <b style="text-transform: capitalize; margin: 10px;">Don't you have an  account? <a href="signup.php" style=" text-decoration: none";> signup </a>Now</b>
                </div>
        </div>


    </section>






    <!-- ________------about-_---__-__- -->

    <div id="cright"> 2021created by &copy;Mr Shaik Mahaboob Subhani | All Rights Reserved</div>



    <!----------------javascript------------------>
    <script>
        var code = document.getElementById("code");

        function showMenu() {
            code.style.right = "0px ";
            console.log(code)
        }

        function hideMenu() {
            code.style.right = "-200px ";
            console.log("menuclick ")
            console.log(code)
        }
    </script>
</body>

</html>