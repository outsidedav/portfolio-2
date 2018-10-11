<!DOCTYPE html>
<html>

<!--    php include header here-->
<?php include 'php/head.php'; ?>

<body>


    <div class="hero" id="">
        <div class="container">
            <div class="navbar navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand logo" href="#">DAVON LARSON</a>
                    </div>
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link white" href="#portfolio">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link white" href="">LinkedIn</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link white" href="https://dribbble.com/Davontheweb">Dribbble</a>
                        </li>
                    </ul>

                </div>

            </div>
        </div>
        <section class="module-cover parrallax text-center  vertical-center">
            <div class="container">
                <div class="jumbotron">
                    <h3 class="lead">New York Based</h3>
                    <h1 class="display-5" id="typer"></h1>
                    <a class="btn btn-outline-primary" href="#portfolio" role="button">Design With Me</a>
                </div>
            </div>
        </section>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center">

            <div class="col-md-4">
                <img src="images/gifs/ezgif.com-resize(1).gif" class="img-fluid my-5" id="main-phone-img">
            </div>
            <div class="col-md-3">
                <h2 class="">They call me Davon</h2>
                <p class="text-white-50">Don't worry, no one knows how to say it the first time, but I pronounce it "Dav-in." I'm a UX Senior UX designer at NYU, and IDM grad student at NYU Tandon School of Engineering. Most of my pre-graduate experience was in Project Management for various digital agencies. As a graduate student, I'm interested in the cross-section of Design and Emerging Technology. As an employee of NYU, I strive to follow Design Thinking in every problem I try and solve.</p><a href="https://drive.google.com/file/d/1nZRPpXILgLFZRZ39DicFrqTa29U53d5L/view?usp=sharing" class="btn btn-outline-primary" id="download-resume">Download Resume</a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="container center">

            <img class="img-fluid my-5" id="skills-img" src="images/Asset-152x.png">
        </div>


        <div class="container skills-p my-5">
            <h2 class="mx-auto">Design Thinking</h2>
            <p class="text-white-50">Though I know how to design, and am a decent front-end developer, the most important skill I have is the ability to solve problems using Design Thinking. To me, this means being able to empathize, observe, ideate, prototype rapidly and validate your ideas with users. It also means being able to tell a story with tools such as Sketch, Invision, Framer X, and After Effects. I am also a believer that every designer should understand the constraints of developers, and be familiar with the languages and libraries they are working in. In the past, that meant learning PHP &amp; JQuery. On my current projects, I'm working in React JS to build working prototypes.</p>
            


    </div>
    <?php

    include 'php/footer.php';

    ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js" type="text/javascript"></script>
        <script src="js/webflow.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/TypewriterJS/1.0.0/typewriter.min.js"></script>
        <script src="js/typedDavon.js"></script>

</body>

</html>
