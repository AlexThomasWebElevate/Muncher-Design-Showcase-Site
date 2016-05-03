<?php
require_once('./constants.php');
if ( !isset($_SESSION['LoggedIn']) ){
    header('Location: '.URL.'login.php', TRUE, 302);
}
if ( $_SESSION['LoggedIn']) == false ) {
    header('Location: '.URL.'login.php', TRUE, 302);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Muncher</title>
    <!-- just google monster and got this image for the title image -->
    <link rel="shortcut icon" href="./images/title-image.ico" />

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- Awesome Fonts -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- main -->
    <link rel="stylesheet" href="./css/style.css">
</head>

<body class="body">

    <!-- MARK: Header -->
    <!--  putting images inside header and setting it to relative so i can stack & align the logo inside the background -->
    <div class="banner">
        <!-- putting logo inside container so its left aligned with the content on any width -->
        <div class="container">
           <a href="index.html"><img class="banner__logo img-responsive" src="./images/banner-logo.png" alt="Muncher Logo" /></a>
        </div>
        <img class="banner__background img-responsive" src="./images/banner-background.png" alt="Muncher banner Background" />
    </div>

    <!-- MARK: Nav -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation">
        <div class="container">

            <!-- Hamburger Menu  -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <!-- Nav -->
            <div class="collapse navbar-collapse muncher-text" id="navbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.html">Home</a></li>
                    <li class="active"><a href="who.html">Who</a></li>
                    <li><a href="how.html">How</a></li>
                    <li><a href="design.html">Design</a></li>
                    <li><a href="links.html">Links</a></li>
                    <li><a href="#contact" data-toggle="modal">Prototype</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-sm-10">

                <!-- Personas -->
                <section id="Personnas">
                    <h1 class="muncher-text">Personas</h1>
                    <img id="Mary" class="img-responsive" src="./images/Design-Assets/persona-mary.png" alt="">
                    <img id="Sinead" class="img-responsive" src="./images/Design-Assets/persona-sinead.png" alt="">
                    <img id="Barry" class="img-responsive" src="./images/Design-Assets/persona-barry.png" alt="">
                    <img id="David" class="img-responsive" src="./images/Design-Assets/persona-david.png" alt="">
                    <img id="Jason" class="img-responsive" src="./images/Design-Assets/persona-jason.png" alt="">
                    <img id="Liam" class="img-responsive" src="./images/Design-Assets/persona-liam.png" alt="">
                    <img id="Marie" class="img-responsive" src="./images/Design-Assets/persona-marie.png" alt="">
                </section>

                <!-- Scenarios -->
                <section id="Scenarios">
                    <h1  class="muncher-text">Scenarios</h1>
                    <h3 class="muncher-text">Scenario 1</h3>
                    <p>Jason wants to improve his diet and fitness levels. Even though he exercises 3-4 times a week he still feels drained and he thinks what he is eating must have something to do with it. He has tried “myfitnesspal” as well as several other apps but he was unhappy with them and got bored after 2 weeks of use so he wants something that will keep him engaged. He also eats fast food several times a week and he would like to try some healthy alternatives instead.</p>
                    <h3 class="muncher-text">Scenario 2</h3>
                    <p>Sinead is an extremely busy mother of four kids who wishes to lose weight and to improve her and her family’s diet at the same time. She is not very tech savvy and finds it difficult to operate any of the apps she has tried so far so an easy to use interface would suit her perfectly. She wants to create an avatar that she can relate to as she is easily bored,</p>
                </section>
            </div>

            <!-- Side nav -->
            <div class="col-sm-2 hidden-xs bs-docs-sidebar" role="complimentary">
                <ul id="sidebar" class="nav nav-stacked">
                    <li>
                        <a href="#Personnas">Personnas</a>
                        <ul class="nav nav-stacked">
                            <li><a href="#Mary">Mary</a></li>
                            <li><a href="#Sinead">Sinead</a></li>
                            <li><a href="#Barry">Barry</a></li>
                            <li><a href="#David">David</a></li>
                            <li><a href="#Jason">Jason</a></li>
                            <li><a href="#Liam">Liam</a></li>
                            <li><a href="#Marie">Marie</a></li>
                        </ul>
                    </li>
                    <li><a href="#Scenarios">Scenarios</a></li>
                </ul>
            </div>

        </div>
    </div>


    <!--MARK: Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <p class="footer__p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae iaculis ipsum, at elementum leo. In congue elementum ante quis rhoncus. Proin malesuada nec arcu sit amet ullamcorper. Donec consectetur tellus diam, quis cursus augue
                        vestibulum sit amet.
                        <br>
                        <br> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae iaculis ipsum, at elementum leo.
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!--MARK: Modal Contact form-->
    <div class="modal fade" id="contact" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Contact Form -->
                <form id="contactForm" class="form-horizontal" method="post" action="./ajax/contactSimple.php" onsubmit="return false;">

                    <!-- Modal Head -->
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title text-center">Contact</h4>
                    </div>

                    <!-- Modal Body -->
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="contactName" class="col-sm-2 control-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="contactName" required placeholder="Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="contactEmail" class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" name="contactEmail" placeholder="you@example.com" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="contactMessage" class="col-sm-2 control-label">Message</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="contactMessage" rows="8" placeholder="Message" required></textarea>
                            </div>
                        </div>
                    </div>

                    <!-- Modal Footer -->
                    <div class="modal-footer">
                        <!-- where the ajax response will be put -->
                        <p id="contactResponse"></p>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button class="btn btn--muncher" type="submit">Send</button>
                    </div>

                </form>
                <!-- End of Contact form -->
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!-- Main -->
    <script src="./js/main.js"></script>
</body>
</html>
