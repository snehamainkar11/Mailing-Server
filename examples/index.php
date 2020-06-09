<!DOCTYPE html>
<html>
<head>
    <title>Welcome To Mailing server Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- favicons -->
    <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/custom-responsive-style.css">
    <link href="//fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <script type="text/javascript" src="script/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="script/all-plugins.js"></script>
    <script type="text/javascript" src="script/plugin-active.js"></script>
</head>
<body data-spy="scroll" data-target=".main-navigation" data-offset="150" >
    <section id="MainContainer">
        <!-- Header starts here -->
        <header id="Header">
            <nav class="main-navigation">
                <div class="container clearfix">
                    <div class="site-logo-wrap">
                        <a class="logo" href="#"><img src="mail1.gif" alt="Design Studio"></a>
                    </div>
                    <a href="javascript:void(0)" class="menu-trigger hidden-lg-up"><span>&nbsp;</span></a>
                    <div class="main-menu hidden-md-down">
                        <ul class="menu-list">
                            <li><a class="nav-link" href="javascript:void(0)" data-target="#ContactUs">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="mobile-menu hidden-lg-up">
                    <ul class="mobile-menu-list">
                        <li><a class="nav-link" href="javascript:void(0)" data-target="login.php">Sign In</a></li>
                        <li><a class="nav-link" href="javascript:void(0)" data-target="#ContactUs">Contact</a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- Header ends here -->
        <!-- Banner starts here -->
        <section id="HeroBanner" style=" background-size: cover;
  background-image: url('mail11.jpg');">
		
            <div class="hero-content">
                <h1>Mailing Server</h1>
                <p>Connecting To World......</p>
                <a href="SignUp.php" class="hero-cta">Sign Up</a>&nbsp;
                <a href="login.php" class="hero-cta">Sign In</a>
				
            </div>
        </section>
       
        </section>
        <!-- Contact us section starts here -->
        <section id="ContactUs">
            <div class="container contact-container">
                <h3 class="contact-title">Get In Touch</h3>
                <div class="contact-outer-wrapper">
                    <div class="address-block">
                        <p class="add-title">Contact Details</p>
                        <div class="c-detail">
                            <span class="c-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span> <span class="c-info">12 Avenue center, st. marks road, CA</span>
                        </div>
                        <div class="c-detail">
                            <span class="c-icon"><i class="fa fa-phone" aria-hidden="true"></i></span> <span class="c-info">+919878786655</span>
                        </div>
                        <div class="c-detail">
                            <span class="c-icon"><i class="fa fa-envelope" aria-hidden="true"></i></span> <span class="c-info">snehamainkar11@gmail.com</span>
                        </div>
                    </div>
                    <div class="form-wrap">
                        <p class="add-title">Send Us Message</p>
                        <form>
                            <div class="fname floating-label">
                                <input type="text" class="floating-input" name="full name" id="full-name-field" />
                                <label for="full-name-field">Full Name</label>
                            </div>
                            <div class="email floating-label">
                                <input type="email" class="floating-input" name="email" id="mail-field" />
                                <label for="mail-field">Email</label>
                            </div>
                            <div class="contact floating-label">
                                <input type="tel" class="floating-input" name="contact" id="contact-us-field" />
                                <label for="contact-us-field">Contact</label>
                            </div>
                            <div class="company floating-label">
                                <input type="text" class="floating-input" name="company" id="company-field" />
                                <label for="company-field">Company</label>
                            </div>
                            <div class="user-msg floating-label">
                                <textarea class="floating-input" name="user message" id="user-msg-field"></textarea>
                                <label for="user-msg-field" class="msg-label">Your Message</label>
                            </div>
                            <div class="submit-btn">
                                <button type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact us section ends here -->
        <!-- Footer section starts here -->
        <footer id="Footer">
            <div class="container">
                <div class="social-share">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <div class="footer-logo-wrap">
                    Designed by Sneha Mainkar....                </div>
            </div>
        </footer>
        <!-- Footer section ends here -->
    </section>
</body>

</html>