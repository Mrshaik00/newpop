
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
<section style="background-color: black; width: 100%;">

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
                <h1>Our Courses</h1>

                <!-- <button class="button" style="vertical-align:middle"><span> VISIT US KNOW MORE </span></button> -->
            </div>



        </section>

        <!-----------course section------------->

        <section class="course">
            <h1 style="color: white;">
                Course We Have
            </h1>
            <p style="color: white">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere!
            </p>
            <div class="sets">
                <div class="c1">
                    <h3>For Fresher</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Beatae ut facere eligendi molestiae minima debitis optio soluta perferendis sint. Ea!</p>
                </div>
                <div class="c1">
                    <h3> For Seniors</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores aliquid temporibus necessitatibus in atque. Doloribus reiciendis ratione ad quibusdam fugit!</p>
                </div>
                <div class="c1">
                    <h3>For Post Graduators</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia amet et vero pariatur ab error ipsa esse commodi, quos voluptatum.</p>
                </div>
            </div>








        </section>
        <!-- ----____------sec__-----_--_-___-- -->
        <section class="facilitys">
            <h1 style="color: white;">
                why we are best in world
            </h1>
            <P style="color: white;">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad minima nostrum nobis eos?
            </P>
            <div class="row">
                <div class="plays">
                    <img src="library3.jpg">
                    <div class="context">
                        <h2 style="color: white;">
                            Luxuries Librarys
                        </h2>
                        <p style="color: white;">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, nobis?
                        </p>
                    </div>
                </div>
                <div class="plays">
                    <img src="basketball5.png">
                    <div class="context">
                        <h2 style="color: white;">
                            Biggest Play Grounds
                        </h2>
                        <p style="color: white;">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, nobis?
                        </p>

                    </div>
                </div>

                <div class="plays">
                    <img src="canteen3.jpg">
                    <div class="context">
                        <h2 style="color: white;">
                            Best Canteens
                        </h2>
                        <p style="color: white;">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, nobis?
                        </p>
                    </div>
                </div>



            </div>



        </section>

        <!-- ________------about-_---__-__- -->
        <section class="about" id="aboutcon">
            <h1 style="text-transform: capitalize; padding-top: 60px; color: white;">
                our social follows bellow links
            </h1>
            <p style="color: white;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vero reiciendis vitae <br> dolorem officiis cumque.position: relative;

            </p>


            <div class="social">
                <a href="https://instagram.com/v3xsty?utm_medium=copy_link" class="fa fa-instagram" style="text-decoration: none; color: white;"></a>
                <a href="https://www.facebook.com/profile.php?id=100008815307267" class="fa fa-facebook" style="text-decoration: none; color: white;"></a>
                <a href="https://www.linkedin.com/in/shaik-mahaboob-subhani-896083203" class="fa fa-linkedin" style="text-decoration: none; color: white;"></a>
                <a href="https://mobile.twitter.com/imsmartyop" class="fa fa-twitter" style="text-decoration: none; color: white;"></a>

            </div>
        </section>
        <div id="cright" style="background-color: hsla(12, 84%, 53%, 0.979); color: white; padding: 12px;"> 2021created by &copy;Mr Shaik Mahaboob Subhani | All Rights Reserved</div>

</section>


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