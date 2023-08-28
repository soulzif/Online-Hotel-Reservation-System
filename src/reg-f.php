<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">

    <!-- font icon kit  -->
    <script src="https://kit.fontawesome.com/2f06fa1967.js" crossorigin="anonymous"></script>
    <title>Reservation</title>
</head>

<body>


    <header class="headerreg ">
        <!-- header content -->
        <div class="header-content flex-design">
            <div class="logo">
                <img src="../pics/pngimg1.png" alt="">
            </div>

            <ul class="nav-links flex-design">
                <li> <a href="../src/index.php">Home</a></li>
                <!-- <li> <a href="#rooms">Rooms</a></li>
                <li> <a href="#gallery">Gallery</a></li> -->
                <li> <a href="../src/about.php">About</a></li>
                <li> <a href="../src/reg-f.php">Register</a></li>
                <li> <a href="../src/adminindex.php">Login</a></li>
                <li> <a href="../src/contact.php">Contact Us</a></li>
            </ul>
            <div class="burger1">
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>

        <!-- register content -->
        <div class="register">
            <div class="registrationbg">
                <h1 class="reg">Reservation Form</h1>
            </div>
            <div class="regfinal regbox">
                <div class="opa">
                </div>
                <div class="inreg content ">
                    RESERVATION
                    <hr class="reghr content mb">
                </div>
                <div class="up ">

                    <!-- linking registration from front end -->

                    <div class="contain ">
                        <form action="register-b.php" method="post"> <!--secure method post -->
                            <div class="regelements contentt">
                                <table>
                                    <tr>
                                        <td><label for="username">User Full Name</label>
                                            <input type="text" name="userfullname" placeholder="Fullname" required>
                                            <!--required means user cannot leave field empty -->
                                        </td>

                                        <td>
                                            <label for="Address">Address</label>
                                            <input type="text" name="address" placeholder="Address" required>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> <label for="dob">Date of Birth</label>
                                            <input type="date" name="dob" required>
                                        </td>

                                        <td><label for="email">E-Mail</label>
                                            <input type="email" name="email" placeholder="Email" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label for="Telno">Phone</label>
                                            <input type="number" name="phone" placeholder="Mobile Number" required>



                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="Gender">Gender</label><br>
                                            <div class="genny">
                                                Male <div class="genn"><input type="radio" name="gender" value="male">
                                                </div>
                                                Female
                                                <div class="genn"><input type="radio" name="gender" value="female">
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php

                                    $countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");

                                    ?>
                                    <tr>
                                        <td> <label>Passport Country</label>
                                            <select name="country"  required>
                                                <option value selected></option>
                                                <?php
                                                foreach ($countries as $key => $value):
                                                    echo '<option value="' . $value . '">' . $value . '</option>';
                                                endforeach;
                                                ?>
                                            </select>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> <label>Type Of Room</label>
                                            <select name="troom" required>
                                                <option value selected></option>
                                                <option value="Junior Room">JUNIOR ROOM</option>
                                                <option value="Standard Room">STANDARD ROOM</option>
                                                <option value="Superior Room">SUPERIOR ROOM</option>
                                                <option value="Sunshine House">SUNSHINE ROOM</option>
                                                <option value="Deluxe Room">DELUXE ROOM</option>
                                                <option value="King Room">KING ROOM</option>

                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-group">
                                                <label>Bedding Type</label>
                                                <select name="bed"  required>
                                                    <option value selected></option>
                                                    <option value="Single">Single</option>
                                                    <option value="Double">Double</option>
                                                    <option value="Triple">Triple</option>
                                                    <option value="Quad">Quad</option>
                                                </select>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>

                                        <td> <label for="checkin">Check-In</label>
                                            <input type="date" name="cin" required>
                                        </td>

                                        <td> <label for="checkout">Check-Out</label>
                                            <input type="date" name="cout" required>
                                        </td>

                                    </tr>
                            </div>

                    </div>
                    </td>
                    </tr>
                </div>
                </td>
                </tr>

                </table>
                <br>
                <!-- registration submit button class name ='submit' -->
                <input type="submit" name="submit" value="Submit" class="button3">
            </div>

            </form>


        </div>


        </div>
        </div>
    </header>



    <!-- footer content -->
    <footer>
        <div class="footer-content  ">
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
    <script src="app.js"></script>
</body>

</html>