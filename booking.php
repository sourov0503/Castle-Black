<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking | Castle Black</title>
    <link rel="stylesheet" href="./reset.css">
    <link rel="stylesheet" href="./globalStyle.css">
    <link rel="stylesheet" href="./components.css">
    <link rel="stylesheet" href="./home.css">
    <!-- scrool library css -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>


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
                            <li><a href="./book.php" class="btn primary-btn">Book Table</a></li>
                        </div>

                    </ul>
                </nav>
            </div>
        </div>
    </div>


    <!--End  Navegation bar  -->
    <!-- booking section -->
    <section id="form">
        <div class="container">
            <h3 class="form_title">
                Book Table
            </h3>
            <div class="form_wrapper">
                <form action="bookConnect.php" method="post">
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
                        <label for="tableType">Table Type</label>
                        <select name="table_type" id="tableType" required>
                            <option selected disabled>Choose</option>
                            <option value="small">Small ( 2 persons )</option>
                            <option value="mediun">Medium ( 4 persons )</option>
                            <option value="large">Large ( 6 persons )</option>
                        </select>
                    </dvi>
                    <dvi class="form_group">
                        <label for="guestNumber">Guest Number</label>
                       <input type="number" id="guestNumber" name="guest_number" min="1" max="10" required>
                    </dvi>
                    <dvi class="form_group">
                        <label for="placement">Placement</label>
                        <select name="Placement" id="placement" required>
                            <option selected disabled>Choose</option>
                            <option value="outdoor">Outdoor</option>
                            <option value="indoor">Indoor</option>
                            <option value="backside">Backside</option>
                        </select>
                    </dvi>
                    <dvi class="form_group">
                        <label for="date">Date</label>
                       <input type="date" id="date" name="Date" required>
                    </dvi>
                    <dvi class="form_group">
                        <label for="time">Time</label>
                       <input type="time" id="time" name="Time" required>
                    </dvi>
                    <dvi class="form_group form_group_full">
                        <label for="note">Note</label>
                        <textarea name="Note" id="note"  rows="4" required></textarea>
                    </dvi>
                    <button type="submit" class="btn primary-btn" name="book">BOOK</button>

                    
                </form>
            </div>
        </div>

    </section>
    <!-- end booking section -->
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