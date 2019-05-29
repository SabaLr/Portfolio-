<?php

  include "config.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="keywords"
        content="HTML, CSS,JavaScript, portfolio , saba larif,website, a digital portfolio, a web developer portfolio, about my portfolio, best leather portfolio, format portfolio, free portfolio template, free portfolio website">
    <meta name="description" content="Portfolio on HTML, CSS and JavaScript">
    <meta name="author" content="John Doe">


    <title><?php echo $lang['title'] ?></title>
    <link href='https://fonts.googleapis.com/css?family=Raleway:300,400,600' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css'>
    <link rel='stylesheet' href='https://unpkg.com/purecss@1.0.0/build/pure-min.css'>
    <link rel='stylesheet' href='https://unpkg.com/purecss@1.0.0/build/grids-responsive-min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.2/css/font-awesome.min.css'>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="icon" href="img/logos/logo-1.png">
    <link rel="stylesheet" href="css/style.css">



</head>

<body>

    <!-- Navbar show -->

    <div class="global-nav">
        <nav class="sticky">
            <div class="row">
                <a class="brand" href="#main">LARIF Saba</a>
                <a class="mobile-nav-icon"><i class="fa fa-bars js--nav-icon"></i></a>
                <ul class="main-nav js--main-nav">
                    <li><a href="#about"><?php echo $lang['about'] ?></a></li>
                    <li><a href="#projects"><?php echo $lang['projects'] ?></a></li>
                    <li><a href="#contact"><?php echo $lang['contact'] ?></a></li>
                    <li><a href="login.php"><?php echo $lang["login"] ?></a></li>
                </ul>
            </div>
        </nav>
    </div>

    <div id="body">

        <!-- Navbar start -->

        <header id="main" class="js--main">
            <nav class="header-nav">
                <div class="row">
                    <a class="brand" href="#main">LARIF Saba</a>
                    <a class="mobile-nav-icon"><i class="fa fa-bars js--nav-icon"></i></a>
                    <ul class="main-nav js--main-nav">
                        <li data-aos="fade-left" data-aos-anchor="#example-anchor" data-aos-offset="500"
                            data-aos-duration="700"><a href="#about"><?php echo $lang['about'] ?></a></li>
                        <li data-aos="fade-left" data-aos-anchor="#example-anchor" data-aos-offset="500"
                            data-aos-duration="1000"><a href="#projects"><?php echo $lang['projects'] ?></a></li>
                        <li data-aos="fade-left" data-aos-anchor="#example-anchor" data-aos-offset="500"
                            data-aos-duration="1300"><a href="#contact"><?php echo $lang['contact'] ?></a></li>
                        <li data-aos="fade-left" data-aos-anchor="#example-anchor" data-aos-offset="500"
                            data-aos-duration="1600"><a href="login.php"><?php echo $lang['login'] ?></a></li>
                    </ul>
                </div>
            </nav>
            <div class="hero-text-box" data-aos="fade-down" data-aos-duration="2000">
                <h1><?php echo $lang['h1'] ?></h1>
            </div>
        </header>

        <!-- About section -->

        <section id="about" class="js--section-about js--wp-1">
            <h2><?php echo $lang['about'] ?></h2>
            <div class="container">
                <ul class="timeline">
                    <li>
                        <h3>2014</h3>
                        <h4><?php echo $lang['about1'] ?></h4>
                        <p><?php echo $lang['aboutp1'] ?></p>
                    </li>
                    <li>
                        <h3>2016</h3>
                        <h4><?php echo $lang['about2'] ?></h4>
                        <p><?php echo $lang['aboutp2'] ?></p>
                    </li>
                    <li>
                        <h3><?php echo $lang['h3'] ?></h3>
                        <h4><?php echo $lang['about3'] ?></h4>
                        <p><?php echo $lang['aboutp3'] ?></p>
                    </li>
                </ul>

            </div>

        </section>

        <!-- Projects -->

        <section id="projects" class="js--wp-2">
            <h2><?php echo $lang['projects'] ?></h2>
            <div class="web-apps row pure-g">
                <div class="img-container pure-u-1-1 pure-u-md-1-3 pure-u-sm-1-2">
                    <img src="img/portfolio/projet-1.png" class="project-img pure-img">
                    <h4><a href="https://github.com/SabaLr/CV">CV</a></h4>
                    <p><?php echo $lang['projp1'] ?></p>
                </div>
                <div class="img-container pure-u-1-1 pure-u-md-1-3 pure-u-sm-1-2">
                    <img src="img/portfolio/projet-2.png" class="project-img pure-img">
                    <h4><a href="https://github.com/SabaLr/Atelier-HTML-CSS">DONUT WHOLE</a></h4>
                    <p><?php echo $lang['projp2'] ?></p>
                </div>
                <div class="img-container pure-u-1-1 pure-u-md-1-3 pure-u-sm-1-2">
                    <img src="img/portfolio/projet-3.png" class="project-img pure-img">
                    <h4><a href="https://github.com/SabaLr/Atelier-flex-box">Slack</a></h4>
                    <p><?php echo $lang['projp3'] ?></p>
                </div>
                <div class="img-container pure-u-1-1 pure-u-md-1-3 pure-u-sm-1-2">
                    <img src="img/portfolio/projet-4.png" class="project-img pure-img">
                    <h4><a href="https://github.com/SabaLr/Atelier-Grid">Grid Layout</a></h4>
                    <p><?php echo $lang['projp4'] ?></p>
                </div>
                <div class="img-container pure-u-1-1 pure-u-md-1-3 pure-u-sm-1-2">
                    <img src="img/portfolio/projet-5.png" class="project-img pure-img">
                    <h4><a href="https://github.com/SabaLr/challenge-html-css">Workshop Animation</a></h4>
                    <p>CSS Animations</p>
                </div>
                <div class="img-container pure-u-1-1 pure-u-md-1-3 pure-u-sm-1-2">
                    <img src="img/portfolio/E-pockets.PNG" class="project-img pure-img" />
                    <h4><a href="https://github.com/SabaLr/E-pockets">E-pockets</a></h4>
                    <p><?php echo $lang['projp5'] ?></p>
                </div>
                <div class="img-container pure-u-1-1 pure-u-md-1-3 pure-u-sm-1-2">
                    <img src="img/portfolio/pascal.PNG" class="project-img pure-img">
                    <h4><a href="https://github.com/SabaLr/pascal-triangle">Triangle de Pascale</a></h4>
                    <p><?php echo $lang['projp6'] ?></p>
                </div>
                <div class="img-container pure-u-1-1 pure-u-md-1-3 pure-u-sm-1-2">
                    <img src="img/portfolio/Panels.png" class="project-img pure-img">
                    <h4><a href="https://github.com/SabaLr/Galerie-Pannel">Pannels</a></h4>
                    <p><?php echo $lang['projp7'] ?></p>
                </div>
                <div class="img-container pure-u-1-1 pure-u-md-1-3 pure-u-sm-1-2">
                    <img src="img/portfolio/e-commerce.PNG" class="project-img pure-img">
                    <h4><a href="https://github.com/SabaLr/Site_e-commerce">E-commerce Website</a></h4>
                    <p><?php echo $lang['projp8'] ?></p>
                </div>
            </div>
        </section>

        <!-- Contact -->

        <section id="contact" class="js--wp-3">
            <h2><?php echo $lang['contact'] ?></h2>
            <div class="pure-g row">
                <p class="contact-subtext pure-u-1-1"><?php echo $lang['contactp'] ?></p>
            </div>
            <div class="pure-g row">
                <div class="pure-u-1-1 pure-u-sm-1-2">
                    <form action="contact/contact.php" class="pure-form pure-form-aligned" method="POST"
                        id="contactForm" name="sentMessage" novalidate="novalidate">
                        <fieldset>
                            <div class="pure-control-group">
                                <input name="name" id="name" type="text" placeholder="Name" required="required"
                                    data-validation-required-message="Please enter your name.">
                            </div>
                            <div class="pure-control-group">
                                <input name="email" id="email" type="email" placeholder="Email Address"
                                    required="required"
                                    data-validation-required-message="Please enter your email address.">
                            </div>
                            <div class="pure-control-group">
                                <textarea name="message" id="message" placeholder="Your Message" required="required"
                                    data-validation-required-message="Please enter a message."></textarea>
                            </div>
                            <button type="submit" class="pure-button contact-button">
                                <i class="fa fa-paper-plane" aria-hidden="true"></i>
                                <?php echo $lang['send'] ?>
                            </button>
                        </fieldset>
                    </form>
                </div>
                <div class="pure-u-1-1 pure-u-sm-1-2">
                    <div class="social-links pure-g">
                        <div class="pure-u-1-2 pure-u-sm-1-2 pure-u-md-1-4">
                            <a href="https://www.linkedin.com/in/saba-larif-5b7b91135/" target="_blank"><i
                                    class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </div>
                        <div class="pure-u-1-2 pure-u-sm-1-2 pure-u-md-1-4">
                            <a href="https://github.com/SabaLr" target="_blank"><i class="fa fa-github"
                                    aria-hidden="true"></i></a>
                        </div>
                        <div class="pure-u-1-2 pure-u-sm-1-2 pure-u-md-1-4">
                            <a href="https://www.facebook.com/saba.nada.750" target="_blank"><i class="fa fa-facebook-f"
                                    aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->

        <div class="footer">
            <div>
                <p><a href="index.php?lang=en"><img class="lng" src="img/en.png" width="18px" height="27px"></a>
                    <a href="index.php?lang=fr"><img class="lng" src="img/fr.png" width="18px" height="27px"></a></p>
            </div>
        </div>
    </div>



    <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.0/jquery.waypoints.min.js'></script>
    <script src="js/index.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Anomation -->
    <script>
    AOS.init();
    </script>

</body>

</html>