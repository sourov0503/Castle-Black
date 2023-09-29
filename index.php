<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Castle Black</title>
    <link rel="stylesheet" href="./reset.css">
    <link rel="stylesheet" href="./globalStyle.css">
    <link rel="stylesheet" href="./components.css">
    <link rel="stylesheet" href="./home.css">
    <!-- scrool library css -->
</head>

<body>
    <!-- Navegation bar  -->
    <div class="nav">
        <div class="container">
            <div class="nav_wrapper">
                <a href="./index.php" class="logo">
                    <img src="./images/bclogo.svg" alt="castleblack">
                </a>
                <nav>
                    <div class="nav_icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="3" y1="12" x2="21" y2="12" />
                            <line x1="3" y1="6" x2="21" y2="6" />
                            <line x1="3" y1="18" x2="21" y2="18" />
                        </svg>
                    </div>
                    <div class="nav_bgOverlay "></div>
                    <ul class="nav_list ">
                        <div class="nav_close">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
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

    <!-- hero section -->
    <section id="hero">
        <div class="container">
            <div class="hero_wrapper">
                <div class="hreo_left" data-aos="fade-left">
                    <div class="hero_left_wrapper">
                        <h1 class="hero_heading">The flavor of tradition</h1>
                        <p class="hero_info">We are a multi-cuisine restaurant
                            offering a wide variety of food experience in both
                            casual and fine dining environment
                        </p>
                        <div class="button_wrapper">
                            <a href="https://www.foodpanda.com.bd/restaurant/jt4b/castle-black"
                                class="btn primary-btn">Order Now</a>
                            <a href="./booking.php" class="btn">Book Table</a>
                        </div>
                    </div>
                </div>
                <div class="hero_right" data-aos="fade-right">
                    <div class="hero_imgWrapper">
                        <img src="./images/heroImg.png" alt="food img">

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End of hero section -->

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

    <!-- our special -->
    <section id="ourSpecials" data-aos="fade-up">
        <div class="container">
            <div class="ourSpecials_wrapper">
                <div class="ourSpecials_left">
                    <div class="ourSpecials_item">
                        <div class="ourSpecials_item_img">
                            <img src="./images/king_slayer.png" alt="food img">
                        </div>
                        <h2 class="ourSpecials_item_title">King Slayer Kacchi</h2>
                        <h3 class="ourSpecials_item_price">Tk. 290</h3>
                        <div class="ourSpecials_item_stars">
                            <img src="./images/3star.png" alt="3 star">
                        </div>
                        <p class="ourSpecials_item_text">
                            King Slayer Kacchi
                            Served with 2 pcs mutton & 1 pc alu.
                            Layers of raw marinated mutton are alternated in
                            layers with wet, pre-soaked, raw rice
                            which is treated with different spices and cooked together
                            medium-to-low direct heat.
                        </p>
                    </div>
                    <div class="ourSpecials_item">
                        <div class="ourSpecials_item_img">
                            <img src="./images/v_kacchi.png" alt="food img">
                        </div>
                        <h2 class="ourSpecials_item_title">Valyrian Kacchi
                        </h2>
                        <h3 class="ourSpecials_item_price">Tk. 450</h3>
                        <div class="ourSpecials_item_stars">
                            <img src="./images/3star.png" alt="3 star">
                        </div>
                        <p class="ourSpecials_item_text">
                            Valyrian Kacchi
                            Served with 4 pcs mutton & 2 pc alu.
                            Layers of raw marinated mutton are alternated in
                            layers with wet, pre-soaked, raw rice
                            which is treated with different spices and cooked together
                            medium-to-low direct heat.
                        </p>
                    </div>
                </div>
                <div class="ourSpecials_right">
                    <h2 class="ourSpecials_title">
                        Our Specials
                    </h2>
                    <p class="ourSpecials_text">
                        All of our food is prepared daily
                        at our restaurants to ensure the
                        highest quality, freshest meals are
                        delivered to our customers
                    </p>
                    <a href="./booking.php" class="btn primary-btn">Book Table</a>
                </div>
            </div>
        </div>
    </section>

    <!-- end of our special -->
    <!-- Top dishes -->
    <section id="dishGrid" data-aos="fade-up">
        <div class="container">
            <h2 class="dishGrid_title">Top Dishes</h2>
            <div class="dishGrid_wrapper">
                <div class="dishGrid_item">
                    <div class="dishGrid_item_img">
                        <img src="./images/food-1.png" alt="food img">
                    </div>
                    <div class="dishGrid_item_info">
                        <h3 class="dishGrid_item_title">Vegan Salad bowl</h3>
                        <h3 class="dishGrid_item_price">TK.200</h3>
                        <div class="dishGrid_item_star">
                            <img src="./images/3star.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="dishGrid_item">
                    <div class="dishGrid_item_img">
                        <img src="./images/food-1.png" alt="food img">
                    </div>
                    <div class="dishGrid_item_info">
                        <h3 class="dishGrid_item_title">Vegan Salad bowl</h3>
                        <h3 class="dishGrid_item_price">TK.200</h3>
                        <div class="dishGrid_item_star">
                            <img src="./images/3star.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="dishGrid_item">
                    <div class="dishGrid_item_img">
                        <img src="./images/food-1.png" alt="food img">
                    </div>
                    <div class="dishGrid_item_info">
                        <h3 class="dishGrid_item_title">Vegan Salad bowl</h3>
                        <h3 class="dishGrid_item_price">TK.200</h3>
                        <div class="dishGrid_item_star">
                            <img src="./images/3star.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End Top dishes -->

    <!-- Discount Section -->
    <section id="discount" data-aos="fade-up">
        <div class="container">
            <div class="discount_wrapper">
                <div class="discount_images">
                    <div class="discount_img1">
                        <img src="./images/food-5.png" alt="food img">
                    </div>
                    <div class="discount_img2">
                        <img src="./images/food-4.png" alt="food img">
                    </div>
                    <div class="discount_img3">
                        <img src="./images/food-3.png" alt="food img">
                    </div>
                </div>
                <div class="discount_info">
                    <h3 class="discount_text">20% OFF</h3>
                    <h3 class="discount_title">King Slayer Kacchi</h3>
                    <h3 class="discount_price">
                        <span class="discount_oldPrice">Tk.290</span>
                        <span class="discount_newPrice">Tk.230</span>
                    </h3>
                    <div class="discount_stars">
                        <img src="./images/3star.png" alt="3 stars">

                    </div>
                    <a href="./booking.php" class="btn primary-btn">Book Table</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Discount Section -->

    <!-- Events media section -->
    <section id="eventsMedia" data-aos="fade-up">
        <div class="container">
            <div class="eventsMedia_wrapper">
                <div class="eventsMedia_1">
                    <video src="./images/video.mp4" autoplay loop muted height="543px"></video>
                </div>
                <div class="eventsMedia_img2">
                    <img src="./images/smokingZone_re.png" alt="img">
                </div>
            </div>
        </div>
    </section>
    <!-- End Events media section -->

    <!-- Event info section -->
    <section id="eventInfo" data-aos="fade-up">
        <div class="container">
            <div class="eventInfo_wrapper">
                <div class="eventInfo_left">
                    <div class="eventInfo_item">
                        <div class="eventInfo_item_img">
                            <img src="./images/event-corporate.png" alt="">
                        </div>
                        <div class="eventInfo_item_info">
                            <h2 class="eventInfo_item_title">Corporate Events</h2>
                            <p class="eventInfo_item_text">
                                Castle Black is the perfect venue for your corporate
                                events. We specialize in private parties.
                            </p>
                        </div>
                    </div>
                    <div class="eventInfo_item">
                        <div class="eventInfo_item_img">
                            <img src="./images/event-weedings.png" alt="">
                        </div>
                        <div class="eventInfo_item_info">
                            <h2 class="eventInfo_item_title">Birthday | Personal Events</h2>
                            <p class="eventInfo_item_text">
                                Castle Black is the perfect venue for your Birthday or Personal
                                events. We specialize in private parties.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="eventInfo_right">
                    <h2 class="eventInfo_title">Book For Events</h2>
                    <p class="eventInfo_text">
                        Book your private event or corporate function at Castle Black to experience a truly unique
                        experience.
                    </p>
                    <a href="./contact.php" class="btn primary-btn">Contact Now</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Event info section -->

    <!-- why us -->
    <section id="whyUs">
        <div class="container">
            <div class="whyUs_wrapper">
                <div class="whyUs_left" data-aos="fade-right">
                    <h2 class="whyUs_title">Why Choose Our Food</h2>
                    <p class="whyUs_text">
                        Quality of Service, Food, Ambiance, and Value of Money are the primary elements for choosing a
                        restaurant. Castle Black is one of the most exquisite fine-dinning restaurant in Rangpur
                        cityw with perfect ambiance, and scrumptious food.
                    </p>
                </div>
                <div class="whyUs_right" data-aos="fade-left">
                    <div class="whyUs_item_wrapper">
                        <div class="whyUs_item">
                            <div class="whyUs_item_icon">
                                <img src="./images/whyUs-icon1.svg" alt="qulity food">
                            </div>
                            <p class="whyUs_item_text"> Qulity Food</p>
                        </div>

                        <div class="whyUs_item">
                            <div class="whyUs_item_icon">
                                <img src="./images/whyUs-icon2.svg" alt="Classical taste">
                            </div>
                            <p class="whyUs_item_text">Classical taste</p>
                        </div>

                        <div class="whyUs_item">
                            <div class="whyUs_item_icon">
                                <img src="./images/whyUs-icon3.svg" alt="Skilled chef">
                            </div>
                            <p class="whyUs_item_text">Skilled chef</p>
                        </div>

                        <div class="whyUs_item">
                            <div class="whyUs_item_icon">
                                <img src="./images/whyUs-icon4.svg" alt="Best service">
                            </div>
                            <p class="whyUs_item_text">Best service</p>
                        </div>

                    </div>
                </div>
            </div>
    </section>
    <!-- End why us -->

    <!-- newsletter section -->
    <section id="newsLetter" data-aos="fade-up">
        <div class="container">
            <div class="newsLetter_wrapper">
                <div class="newsLetter_info">
                    <h3 class="newsLetter_title">Join NewsLetter</h3>
                    <p class="newsLetter_text">Get notified with the latest news and recent offers from the "Castle Black"</p>
                </div>
                <div class="newsLetter_form">
                    <form action="" method="post">
                        <label for="email">
                            <input type="email" placeholder="Your Email Address" name="Email">
                        </label>
                        <button type="submit" name="join">Join</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--end  newsletter section -->
    <!-- php for news letter -->
    <?php
$connection = mysqli_connect('localhost','root','','castleblack','3306');
if(isset($_POST['join'])){ 
    $email=$_POST['Email'];
    $request = "insert into newsletter(email) values ('$email')";
    mysqli_query($connection,$request);
    header('location:index.php');
    echo'';
}else{ 
    echo'';}

?>
    <!--end  php for news letter -->



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
                                <a href="https://www.facebook.com/feastlikekinginthenorth"><img
                                        src="./images/facebook (1).svg" alt=""></a>
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
                                Dhap police fari, Dhap
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

</html>