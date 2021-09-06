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
    <section class="face">


        <nav>
            <img src="mainlogo.png"></a>

            <div class="mobox">
                <ul id="code">
                    <i class="fa fa-times" id="exit" onclick="hideMenu()"></i>

                    <li><a href="logout.php" style="color: white;">logout</a></li>
                        <li><a href="course.php" style="color: white;">course</a></li>
                        <li><a href="about.php" style="color: white;">about</a></li>
                        <li><a href="contact.php" style="color: white;">contact</a></li>
                </ul>
            </div>

            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>

        <div class="content">
            <h1> the greatest university in the world </h1>
            <P>Stanford University, one of the world's leading teaching and research institutions,<br> is dedicated to finding solutions to big challenges and to preparing</br>
            </P>
            <a href="contact.php" class="button" style="vertical-align:middle"><span>visit us to know more</span></a>


        </div>



    </section>
    <!-----------another section------------->
    <section class="blacksec">
        <section class="course">
            <h1>
                Course We Have
            </h1>
            <p>
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
    </section>
    <section class="brancolor">
        <section class="branches">
            <h1 style="font-size: 36px;
            font-weight: 600;">
                Our Universal branches
            </h1>
            <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad consectetur commodi velit.
            </p>
            <div class="seq">
                <div class="nibbi">
                    <img src="london.png">
                    <div class="layer">
                        <h3>
                            LONDON
                        </h3>
                    </div>
                </div>
                <div class="nibbi">
                    <img src="washington.png">
                    <div class="layer">
                        <h3>
                            SWIZERLAND
                        </h3>
                    </div>
                </div>
                <div class="nibbi">
                    <img src="newyork.png">
                    <div class="layer">
                        <h3>
                            NEWYORK
                        </h3>
                    </div>
                </div>



            </div>






        </section>
    </section>
    <!-- ________________________ourfacilitys_____________ -->
    <section class="sec-color">
        <section class="facilitys">
            <h1 style="font-size: 36px;
            font-weight: 600;">
                why we are best in world
            </h1>
            <P>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad minima nostrum nobis eos?
            </P>
            <div class="row">
                <div class="plays">
                    <img src="library3.jpg">
                    <div class="context">
                        <h2>
                            Luxuries Librarys
                        </h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, nobis?
                        </p>
                    </div>
                </div>
                <div class="plays">
                    <img src="basketball5.png">
                    <div class="context">
                        <h2>
                            Biggest Play Grounds
                        </h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, nobis?
                        </p>

                    </div>
                </div>

                <div class="plays">
                    <img src="canteen3.jpg">
                    <div class="context">
                        <h2>
                            Best Canteens
                        </h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, nobis?
                        </p>
                    </div>
                </div>



            </div>



        </section>
    </section>
    <!-- _-----____reviews-----_____ -->
    <section class="revcolor">
        <section class="reviews">
            <h1 style="font-size: 36px;
            font-weight: 600;">
                our student reviews
            </h1>
            <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Id, dolore odit!
            </p>
            <div class="stud">
                <div class="r1" id="r2">
                    <img src="user1.jpg">
                    <p>Lorem ipsum dolor sit amet consectetur consectetur adipisicing elit. Harum veniam nobis mollitia.</p>
                    <h1>lina Lease </h1>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <div class="r1">
                    <img src="user2.jpg">
                    <p>
                        Lorem ipsum dolor sit amet consectetur consectetur, adipisicing elit. Hic doloribus numquam voluptatibus?
                    </p>
                    <h1>stuward</h1>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>

            </div>



        </section>
    </section>



    <!-- _________------endgame-----______ -->
    <section class="endgame">
        <h1>
            Our University Build To Teach join us right now
        </h1>
        <a href="contact.php" class="button" id="btnn" style="vertical-align:middle;"><span>contact us</span></a>


    </section>
    <!-- ________------about-_---__-__- -->
    <section class="about">
        <h1>about us</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio corporis cupiditate, <br> nostrum labore at quos expedita. Tenetur?</p>

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