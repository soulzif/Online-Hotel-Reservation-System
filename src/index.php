<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HILTON </title>
    <!-- short cut to link css--   link:css -->
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">

    <!-- font icon kit  -->
    <script src="https://kit.fontawesome.com/2f06fa1967.js" crossorigin="anonymous"></script>
</head>

<body>

    <!-- Header main page content -->
    <header>

        <!-- header id start -->
        <section id="home">

            <!-- cls create short way  .header-content -->
            <div class="header-content flex-design">
                <div class="logo">
                    <img src="../pics/pngimg1.png" alt="">

                </div>

                <ul class="nav-links flex-design">
                    <li> <a href="#home" class="actli">Home</a></li>
                    <li> <a href="#rooms" class="actli">Rooms</a></li>
                    <li> <a href="#gallery"class="actli">Gallery</a></li>
                    <li> <a href="../src/about.php"class="actli">About</a></li>
                    <li> <a href="../src/reg-f.php"class="actli">Register</a></li>
                    <li> <a href="../src/adminindex.php"class="actli">Login</a></li>
                    <li> <a href="../src/contact.php"class="actli">Contact Us</a></li>
                </ul>
                <div class="burger1">
                    <i class="fa-solid fa-bars"></i>
                </div>
            </div>
            <div class="text-center">
                <p>WELCOME TO</p>
                <hr>
                <h1>HILTON HOTEL</h1>
                <p class="best">A Best Place To Vibin</p>
                <a class="btn mt" href="../src/reg-f.php">Book Now</a>
            </div>

            <!-- header id end -->
        </section>
    </header>

    <main>

        <!-- who we are content -->
        <section class="wwr   mb">
            <div class="heading mb">
                <h2 class="wwrhead">Who We Are</h2>
            </div>

            <div class="wwr-content flex-design">

                <div class="vision wwr-box">
                    <h3 class="vimi">Vision</h3>
                    <p class="pimi">Exceptional and personalized service, exceeding expectations, and inspiring a
                        connection to our brand in the experiences we provide..</p>
                </div>

                <div class="mission wwr-box">
                    <h3 class="vimi">Mission</h3>
                    <p class="pimi">We are committed to provide a 360 degree integrated hotel management service that
                        creates exceptional value. Our people embody the Niccolo & Marco Polo Spirit to explore,
                        discover, experience and journey beyond..</p>
                </div>

                <div class="whoweare wwr-box">
                    <h3 class="vimi">Our Values</h3>
                    <p class="pimi">We respect the objectives of our stakeholders, the values of our guests, and the
                        cultural difference in the locations that we operate..</p>
                </div>

            </div>

        </section>

        <!-- Our Rooms content -->
        <section class="rooms mt mb mb">

            <!-- rooms id start -->
            <section id="rooms">
                <div class="heading ">
                    <h2>Our Rooms</h2>
                </div>
                <div class="room-content content">

                    <!-- 1 -->
                    <div class="room junior">
                        <div class="room_img">
                            <img src="../pics/r7.jpg" alt="">
                        </div>
                        <div class="room_content">
                            <h3 class="oyo">Junior</h3>
                            <div class="bookb">
                                                <!-- Inline Css try -->
                            <a href="reg-f.php"><h4 style=color:black;>Book Now</h4></a>  
                            </div>
                        </div>
                    </div>
                    <!-- 2 -->
                    <div class="room standard">
                        <div class="room_img">
                            <img src="../pics/r2.jpg" alt="">
                        </div>
                        <div class="room_content">
                            <h3 class="oyo">Standard</h3>
                            <div class="bookb">
                                <a href="reg-f.php"><h4 style=color:black;>Book Now</h4></a>
                            </div>
                        </div>
                        <!-- 3 -->
                    </div>
                    <div class="room superior">
                        <div class="room_img">
                            <img src="../pics/r9.jpg" alt="">
                        </div>
                        <div class="room_content">
                            <h3 class="oyo">Superior</h3>
                            <!-- <p class="poyo">Rs.1,900/Per Night</p> -->
                            <div class="bookb">
                            <a href="reg-f.php"><h4 style=color:black;>Book Now</h4></a>
                            </div>
                        </div>
                    </div>
                    <!-- 4 -->
                    <div class="room sunshine">
                        <div class="room_img">
                            <img src="../pics/r4.jpg" alt="">
                        </div>
                        <div class="room_content">
                            <h3 class="oyo">Sunshine</h3>
                            <!-- <p class="poyo">Rs.2,100/Per Night</p> -->
                            <div class="bookb">
                            <a href="reg-f.php"><h4 style=color:black;>Book Now</h4></a>
                            </div>
                        </div>
                    </div>
                    <!-- 5 -->
                    <div class="room deluxe">
                        <div class="room_img">
                            <img src="../pics/r5.jpg" alt="">
                        </div>
                        <div class="room_content">
                            <h3 class="oyo">Deluxe</h3>
                            <!-- <p class="poyo">Rs.1,300/Per Night</p> -->
                            <div class="bookb">
                            <a href="reg-f.php"><h4 style=color:black;>Book Now</h4></a>
                            </div>
                        </div>
                    </div>
                    <!-- 6 -->
                    <div class="room king">
                        <div class="room_img">
                            <img src="../pics/r3.jpg" alt="">
                        </div>
                        <div class="room_content">
                            <h3 class="oyo">King</h3>
                            <!-- <p class="poyo">Rs.1,650/Per Night</p> -->
                            <div class="bookb">
                            <a href="reg-f.php"><h4 style=color:black;>Book Now</h4></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- rooms id end -->
            </section>
        </section>

        <!-- gallery contents -->
        <section class="gallery mt mb">
            <!-- gallery id start -->
            <section id="gallery">
                <div class="heading mb">
                    <h2 class="wwrhead">Gallery</h2>
                </div>
                <div class="gallery-content content">

                    <div class="gallery_img">
                        <img src="../pics/bg1.jpg" alt="">
                    </div>
                    <div class="gallery_img">
                        <img src="../pics/bg2.jpg" alt="">
                    </div>
                    <div class="gallery_img">
                        <img src="../pics/bg3.jpg" alt="">
                    </div>
                    <div class="gallery_img">
                        <img src="../pics/bg4.jpg" alt="">
                    </div>
                    <div class="gallery_img">
                        <img src="../pics/bg5.jpg" alt="">
                    </div>
                    <div class="gallery_img">
                        <img src="../pics/bg6.jpg" alt="">
                    </div>


                </div>
                <!-- gallery id end -->
            </section>
        </section>

        <!-- About us contents -->
        <section class="about-us mt mb">

            <!-- about us id start -->
            <section id="aboutus">

                <div class="about-us-heading heading">
                    <h2 class="wwrhead">About us </h2>
                    <hr class="hraboutus">
                </div>
                <div class="about-us-content content">
                    <p class="abtus">At HILTON, we believe that travel should be an enriching and memorable experience.
                        That's why we've dedicated ourselves to providing our guests with exceptional service, luxurious
                        amenities, and an unforgettable stay. We pride ourselves on our commitment to excellence, and
                        our staff works tirelessly to ensure that every guest feels welcome and valued. 
                        <br>
                        Whether you're
                        visiting us for business or pleasure, we strive to create a warm and inviting atmosphere that
                        will make you feel right at home. We understand that the little things can make a big
                        difference, and that's why we go above and beyond to anticipate your needs and exceed your
                        expectations. Thank you for choosing HILTON, and we look forward to making your stay
                        unforgettable.</p>
                </div>
                <!-- about us id end -->
            </section>
        </section>

        <!-- Testimonials contents -->
        <section class="testimonials">
            <div class="testimonials-heading heading">
                <h2 class="wwrhead">What Our Guest Say?</h2>
                <section class="testimonial-section content mt mb">
                    <div class="testimonial">
                        <p class="testimonial-quote">"I recently stayed at HILTON and I was thoroughly impressed with
                            the quality of service and amenities provided."</p>
                        <img src="../pics/s.jpg" class="meaow">
                        <p class="testimonial-author">- Sundar Pichai, CEO, Google and Alphabet</p>
                    </div>
                    <div class="testimonial">
                        <p class="testimonial-quote">"The hotel staff was incredibly friendly, and the rooms were
                            comfortable I was impressed by the hotel's commitment."</p>
                        <img src="../pics/elon.jpg" class="meaow">
                        <p class="testimonial-author">- Elon Musk, CEO and chief engineer of SpaceX</p>
                    </div>

                    <div class="testimonial">
                        <p class="testimonial-quote">"I particularly enjoyed the hotel's commitment and
                            eco-friendliness, which is something that's important to me."</p>
                        <img src="../pics/beast.jpg" class="meaow">
                        <p class="testimonial-author">-Jimmy Donaldson(MrBeast),Youtuber</p>
                    </div>
                </section>

            </div>

        </section>

    </main>

    <!-- FOoter -->
    <footer>
        <div class="footer-content mt ">
            <div class="footer-top">

                <div class="footer-top-container  flex-design">


                    <div class="logofoot">
                        <img src="../hotel logo/1976.png">

                    </div>
                    <div class="footer-links">
                        <li> <a href="#">H</a></li>
                        <li> <a href="#">I</a></li>
                        <li> <a href="#">L</a></li>
                        <li> <a href="#">T</a></li>
                        <li> <a href="#">O</a></li>
                        <li> <a href="#">N</a></li>
                    </div>

                    <div class="footer-hotel">
                        <h3>Hilton Hotel</h3>
                        <p class="footerp">Enjoy a Luxury experience <br>hiltoncont@gmail.com </p>
                        <br>24 HOURS A DAY
                        <br>+94 123456789
                    </div>

                </div>

            </div>
        </div>
        <hr class="hrfooter">
        <div class="footer-bottom">
            <p class="copyright">Copyright &copy;2022-2023, Zifan - All Rights Reserved</p>
        </div>

        </div>
    </footer>

    <!-- linking js  -->
    <script src="app.js"></script>
</body>

</html>