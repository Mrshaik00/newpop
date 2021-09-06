
<?php
session_start();
if(!isset($_SESSION['logged_in']))
{
    header('location: login.php');
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
    <section class="degree">


        <nav>
            <img src="mainlogo.png"></a>

            <div class="mobox">
                <ul id="code">

                    <i class="fa fa-times" id="exit" onclick="hideMenu()"></i>
                    <li><a href="logedin.php" style="color: white;">Home</a></li>
                        <li><a href="course.php" style="color: white;">course</a></li>
                        <li><a href="about.php" style="color: white;">about</a></li>
                        <li><a href="contact.php" style="color: white;">contact</a></li>
                </ul>
            </div>

            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>

        <div class="content" id="con">
            <h1>about us</h1>

            <!-- <button class="button" style="vertical-align:middle"><span> VISIT US KNOW MORE </span></button> -->
        </div>



    </section>
    <!-----------another section------------->
    <section class="footer">
        <div class="mainfoot">
            <div class="footcon">
                <h1>
                    we are the worlds gratest college
                </h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quasi rem ratione similique veritatis sequi magnam id est, vel dolorem maxime tenetur? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquid sint, reiciendis inventore
                    placeat deleniti assumenda aspernatur optio, ullam pariatur illum doloribus. Doloremque, a inventore esse fugiat exercitationem dolores velit explicabo nihil, deleniti reiciendis sequi.</p>
                <a href="hello.html" class="footbtn">EXPLORE NOW</a>
            </div>
            <div class="footimg">
                <img src="meeting2.jpeg" alt="">
            </div>
        </div>

    </section>

    <!-- ________________________ourfacilitys_____________ -->

    </section>
    <!-- ________------about-_---__-__- -->
    <section class="about" id="aboutcon">
        <h1 style="text-transform: capitalize; padding-top: 60px;">
            our social follows bellow links
        </h1>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vero reiciendis vitae <br> dolorem officiis cumque.position: relative;

        </p>


        <div class="social">
            <a href="https://instagram.com/v3xsty?utm_medium=copy_link" class="fa fa-instagram" style="text-decoration: none; color: black;"></a>
            <a href="https://www.facebook.com/profile.php?id=100008815307267" class="fa fa-facebook" style="text-decoration: none; color: black;"></a>
            <a href="https://www.linkedin.com/in/shaik-mahaboob-subhani-896083203" class="fa fa-linkedin" style="text-decoration: none; color: black;"></a>
            <a href="https://mobile.twitter.com/imsmartyop" class="fa fa-twitter" style="text-decoration: none; color: black;"></a>

        </div>
    </section>
    <div id="cright"> 2021created by &copy;Mr Shaik Mahaboob Subhani | All Rights Reserved</div>



    <!----------------javascript------------------>
    <script>
        var code = document.getElementById("code");

        function showMenu() {
            code.style.right = "0px";
            console.log(code)
        }

        function hideMenu() {
            code.style.right = "-200px";
            console.log("menuclick")
            console.log(code)
        }
    </script>
</body>

</html>