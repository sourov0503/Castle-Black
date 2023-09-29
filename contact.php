<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | Black Castle</title>
    <link rel="stylesheet" href="./reset.css">
    <link rel="stylesheet" href="./globalStyle.css">
    <link rel="stylesheet" href="./components.css">
    <!-- scrool library css -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<!-- php code for contact form  -->
<?php
$connection = mysqli_connect('localhost', 'root', '', 'castleblack', '3306');
if (isset($_POST['contact'])) {
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $email = $_POST['Email'];
    $subject = $_POST['Subject'];
    $message = $_POST['Message'];


    $request = "insert into contact(firstName,lastName,email,subject,message) values 
    ('$firstName','$lastName','$email','$subject','$message')";

    mysqli_query($connection, $request);
    header('location:contact.php');
} else {
    echo '';
}

?>

<body>
    <!-- Navegation bar  -->
    <div class="nav">
        <div class="container">
            <div class="nav_wrapper">
                <a href="./index.php" class="logo">
                    <img src="./images/bclogo.svg" alt="">
                </a>
                <nav>
                    <div class="nav_icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="3" y1="12" x2="21" y2="12" />
                            <line x1="3" y1="6" x2="21" y2="6" />
                            <line x1="3" y1="18" x2="21" y2="18" />
                        </svg>
                    </div>
                    <div class="nav_bgOverlay "></div>
                    <ul class="nav_list ">
                        <div class="nav_close">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="18" y1="6" x2="6" y2="18" />
                                <line x1="6" y1="6" x2="18" y2="18" />
                            </svg>
                        </div>
                        <div class="nav_list_wrapper">
                            <li><a href="./index.php" class="nav_link">Home</a></li>
                            <li><a href="./menu.php" class="nav_link">Menu</a></li>
                            <li><a href="./about.php" class="nav_link">About</a></li>
                            <li><a href="./contact.php" class="nav_link">Contact</a></li>
                            <li><a href="./booking.php" class="btn primary-btn">Book Table</a></li>
                        </div>

                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!--End  Navegation bar  -->
    <!-- Store info -->
    <section id="storeInfo" data-aos="fade-up">
        <div class="container">
            <div class="storeInfo_wrapper">
                <div class="storeInfo_item">
                    <div class="storeInfo_icon">
                        <img src="./images/wall-clock-icon.svg" alt="icon">
                    </div>
                    <h3 class="storeInfo_title">10 AM - 11PM</h3>
                    <p class="storeInfo_text">Opening Hour</p>
                </div>
                <div class="storeInfo_item">
                    <div class="storeInfo_icon">
                        <a href="https://goo.gl/maps/JS6jEgvr9Ld4EEi97">
                            <img src="./images/address-icon.svg" alt="icon">
                        </a>
                    </div>
                    <h3 class="storeInfo_title">Dhap, Rangpur</h3>
                    <p class="storeInfo_text">Address</p>
                </div>
                <div class="storeInfo_item">
                    <div class="storeInfo_icon">
                        <img src="./images/phone-icon.svg" alt="icon">
                    </div>
                    <h3 class="storeInfo_title">+880 1962-508070</h3>
                    <p class="storeInfo_text">Call Now</p>
                </div>
            </div>
        </div>

    </section>
    <!-- end of stroe info -->

    <!-- contact form section -->
    <section id="form">
        <div class="container">
            <h3 class="form_title">Contact & Inquiry</h3>
            <div class="form_wrapper">
                <form action="" method="post">
                    <dvi class="form_group">
                        <label for="firstName">First Name</label>
                        <input type="text" id="firstName" name="first_name" required>
                    </dvi>
                    <dvi class="form_group">
                        <label for="lastName">Last Name</label>
                        <input type="text" id="lastName" name="last_name" required>
                    </dvi>
                    <dvi class="form_group">
                        <label for="firstName">Email</label>
                        <input type="email" id="email" name="Email" required>
                    </dvi>
                    <dvi class="form_group">
                        <label for="subject">Subject</label>
                        <input type="text" id="subject" name="Subject" required>
                    </dvi>
                    <dvi class="form_group form_group_full">
                        <label for="massage">Message</label>
                        <textarea name="Message" id="message" cols="30" rows="10" required></textarea>
                    </dvi>
                    <button type="submit" class="btn primary-btn" name="contact">Send</button>

                </form>
            </div>
        </div>
    </section>
    <!-- end contact form section -->

    <!-- footer -->
    <footer>
        <div class="container">
            <div class="footer_wrapper">
                <div class="footer_col1">
                    <div class="footer_logo">
                        <img src="./images/bclogo.svg" alt="store logo">
                    </div>
                    <p class="footer_desc">Fresh and delicious traditional Bangladeshi food to delight the whole family.
                    </p>
                    <div class="footer_socials">
                        <h4 class="footer_socials_tital">Follow Us</h4>
                        <ul class="footer_text">
                            <li>
                                <a href="https://www.facebook.com/feastlikekinginthenorth"><img src="./images/facebook (1).svg" alt=""></a>
                            </li>
                            <li>
                                <a href=""><img src="./images/instagram.svg" alt=""></a>
                            </li>
                            <li>
                                <a href=""><img src="./images/twitter.svg" alt=""></a>
                            </li>
                        </ul>

                    </div>
                </div>
                <div class="footer_col2">
                    <h3 class="footer_text_tital">Links</h3>
                    <ul class="footer_text">
                        <li>
                            <a href="./index.php">Home</a>
                        </li>
                        <li>
                            <a href="./menu.php">Menu</a>
                        </li>
                        <li>
                            <a href="./booking.php">Book Table</a>
                        </li>
                        <li>
                            <a href="./about.php">About</a>
                        </li>
                        <li>
                            <a href="./contact.php">Contact Us</a>
                        </li>
                        <li>
                            <a href="./index.php">Privacy Policy</a>
                        </li>
                    </ul>
                </div>
                <div class="footer_col3">
                    <h3 class="footer_text_tital">Support</h3>
                    <ul class="footer_text">
                        <li>
                            <a href="./contact.php">Contact</a>
                        </li>
                        <li>
                            <a href="#">Support Center</a>
                        </li>

                        <li>
                            <a href="./index.php">Feedback</a>
                        </li>
                    </ul>
                </div>
                <div class="footer_col4">
                    <h3 class="footer_text_tital">Contact</h3>
                    <ul class="footer_text">
                        <li>
                            <a href="#">+880 1962-508070</a>
                        </li>
                        <li>
                            <a href="#">castalblack@gmail.com</a>
                        </li>

                        <li>
                            <a href="https://goo.gl/maps/JS6jEgvr9Ld4EEi97">
                                Dhap police fari, Dhap,
                            </a>
                        </li>
                        <li>
                            <a href="https://goo.gl/maps/JS6jEgvr9Ld4EEi97">
                                Rangpur, Bangladesh</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <div id="copyright">
        <div class="container">
            <p class="copyright_text">
                © copyright 2023 Castle Black | All rights reserved
            </p>
        </div>
    </div>

    <!-- End footer -->


    <!-- scrool script -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="./images/main.js"></script>
</body>