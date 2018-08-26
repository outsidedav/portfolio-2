<!DOCTYPE html>
<html>

<!--    php include header here-->
<?php include 'php/head.php'; ?>

<body>


    <div class="hero">
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
        <section class="module-cover parrallax text-center">
            <div class="container">
                <div class="jumbotron">
                    <p class="lead">New York Based</p>
                    <h1 class="display-5" id="typer"></h1>
                    <p class="lead">Welcome to my website, have a look around</p>
                    <hr class="my-4">
                    <a class="btn btn-outline-primary" href="#portfolio" role="button">Design With Me</a>
                </div>
            </div>
        </section>
    </div>
    <div class="fluid-container">
        <div class="row justify-content-center align-items-center">

            <div class="col-md-4">
                <img src="images/portfolioAsset-12x.png" class="img-fluid my-5" id="main-phone-img">
            </div>
            <div class="col-md-3">
                <h2 class="">PM &gt; NYU &gt; UX</h2>
                <p class="">My name&#x27;s Davon. I&#x27;m a UX designer, and IDM grad student at NYU Tandon School of Engineering. Most of my pre-graduate experience was in Project Management for various digital agencies. Now as a grad student and freelance UX designer, I&#x27;m increasingly interested in creating systems that are naturally intuitive, and don&#x27;t just mechanize the user&#x27;s life, but bring value to them.</p><a href="https://drive.google.com/file/d/13VVNVZ1uL7IesGXTQAzKbl2jembG-ign/view?usp=sharing" class="btn btn-outline-primary" id="download-resume">Download Resume</a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="container">

            <img class="img-fluid my-5" id="skills-img" src="images/Asset-152x.png">
        </div>


        <div class="container skills-p my-5 ">
            <h2 class="mx-auto">The Right Skills for the Job</h2>
            <p class="">In school I studied web design and advertising, and worked as a graphic designer to pay the bills. After school I worked as a PM&amp;AM for an advertising company, where I was able to apply my skills to a diverse range of problems. Since then, I&#x27;ve been working as a freelance UX designer &amp; engineer while getting my Masters in Integrated Digital Media from NYU. All of this has made it easier to work with teams and bring a well rounded perspective to your users experience issues.</p><a href="#projects" class="btn btn-outline-primary">View Projects</a>

        </div>


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
