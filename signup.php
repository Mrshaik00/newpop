 <?php

 if ($_SERVER["REQUEST_METHOD"] == "POST" ){


     include ('connectdb.php');

     $email = $_POST['email'];
     $username = $_POST['username'];
     $password =  $_POST['password'];
     $cpassword =   $_POST['cpassword'];

     if( $password == $cpassword){
         $sql = "SELECT * FROM logindata where email = '$email'";
         $result = $conn->query($sql);
         if ($result->num_rows == 0) {
           // output data of each row
           $sql = "INSERT INTO `logindata` (  `email`, `username`, `password`, `confirm password`) VALUES ( '$email', '$username', '$password', '$cpassword')";
           $result = mysqli_query($conn, $sql);
           if($result){
            header('Location: login.php');

               //  echo"<script> alert (' first login ')</script>";
                }
                else {
                    echo "<script> alert ('password dosen't match')</script>";
                }

            }else{
                echo
                "<script> alert ('these credtinal's already given')</script>";
            }


        }
        else{
         echo "<script> alert('password is wrong')</script>";
     }

    }
 ?>


 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RUSE BURG UNIVERSITY</title>
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
        <div class="nibba" >

            <form action="" method="POST">
                <div class="logbox">
                    <div class="user">
                        <h1 style="padding-bottom: 15px;">Create An Account Now</h1>

                        <input type="email" placeholder="Email" name="email" autocomplete="off" required>
                    </div>
                    <div class="user">

                        <input type="text" placeholder="Username" name="username"   required >

                    </div>
                    <div class="user">

                        <input type="password" placeholder="Password" name="password"  required >
                    </div>
                    <div class="user">

                        <input type="password" id="myInput"  placeholder="Confirm Password"   name="cpassword"  required >
                    </div>
                    <input type="checkbox" onclick="myFunction()">Show Password

                </div>

                <button type="submit" class="btnlog">Signup</button>
            </form>
                <div class="signup">
                    <b style="text-transform: capitalize; padding-bottom: 20px;">Already have an  account? <a href="login.php" style=" text-decoration: none";> Login </a>Now</b>
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
        function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
    </script>
</body>

</html>