<!DOCTYPE html>
<html lang="en">



<?php include 'php/head.php'; ?>
<link href="css/projectpage.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<body id="page-top">

    <header class="masthead wl-bg">
        <?php include 'php/nav.php'; ?>
        <div class="container d-flex h-100 align-items-center">
            <div class="mx-auto text-center">
                <h1><b>NYU</b>Worklink</h1>
            </div>

        </div>

    </header>
    <aside class="">
        <div class="container">
            <div class="row d-flex justify-content-center text-center mt-3">
                <div class="col-sm-2">
                    <a href="#">
                        <figure>
                            <img src="logos/pencil.svg" class="img-fluid" alt="">
                        </figure>
                    </a>
                </div>
                <div class="col-sm-2">
                    <a href="#">
                        <figure>
                            <img src="logos/sketch.svg" class="img-fluid " alt="">
                        </figure>
                    </a>
                </div>
                <div class="col-sm-2">
                    <a href="#">
                        <figure>
                            <img src="logos/abstract.svg" class="img-fluid " alt="">
                        </figure>
                    </a>
                </div>
                <div class="col-sm-2">
                    <a href="#">
                        <figure>
                            <img src="logos/framer%20x.svg" class="img-fluid " alt="">
                        </figure>
                    </a>
                </div>
                <div class="col-sm-2">
                    <a href="#">
                        <figure>
                            <img src="logos/indesign.svg" class="img-fluid " alt="">
                        </figure>
                    </a>
                </div>
            </div>
        </div>
    </aside>
    <section id="process" class="projects-section bg-light">
        <div class="container">
            <div class="col-lg-8 mx-auto">
                <h1 class="dark-grey mb-4 ">Worklink Mobile App</h1>
                <p class="text-black-50">Worklink is an existing facility management system at NYU but currently lacks a mobile app for Residents and Faculty to submit a maintenance request. Worklink is extremely valuable to NYU's thousands of Facilities Employees, NYU Housing Residence, and service shops. currently, it allows work requests to be managed by Facilities and dispatched to service shops.</p>
                <p class="text-black-50">
                    When I joined NYU OTSS, we had just committed to redesigning the entire system, which includes separate Desktop apps for CSC and an iPad app for service shops. Currently, however, there is no end-user side, and if a housing resident wants to make a repair or maintenance request, they have to do it via email or phone.</p>
                <p class="text-black-50">
                    This app will make it more convenient for NYU faculty and residences, and reduce phone and email time for NYU Facilities employees.
                </p>
            </div>

            <div class="col-lg-8 mx-auto">
                <h2 class="dark-grey">Wireframes</h2>
                <p class="text-black-50">When I was on-boarded onto the project, most of the wireframing and sketching was completed by another designer, so I want to be careful not to take credit for their work. Below are some of the wireframes that I initially received. We worked with the stakeholders and users to improve and validate some of the design assumptions we had made.</p>
                <p class="text-black-50">After that, we moved onto designing lo-fi mockups and continued working closely with users in Facilities and CSC to ensure our designs were headed in the right direction.
                </p>
            </div>
            <div class="col-lg-12 mx-auto text-center mb-4">
                <img src="/worklink/mockups/lofi.png" class="img-fluid" alt="">

            </div>
        </div>
    </section>

    <section id="workflow" class="projects-section bg-dark">
        <div class="container">
            <div class="col-lg-8 mx-auto">
                <h2 class="text-white mb-4 ">Rapid Prototyping</h2>
                <p class="text-white-50 mb-4">Because the app is relatively small, and the MVP was limited to only the most valuable functions, we were able to move through several design iterations fast.</p>
                <p class="text-white-50 mb-4">It allowed us to experiment with design conventions that would be new to our users, as well as employ ones that we know would be familiar. We tested several layouts and flows with our key users. </p>
                <p class="text-white-50 mb-4">While interviewing users, we discovered how important the speed at which they could make a request is, and heard over an over again that that was a pain point when using the old system. Imagine how important this would be when making a repair request for a flooding toilet, or AC that is out in the summer.
                </p>
                <p class="text-white-50 mb-4">
                    We decided to take advantage of several of NYU's existing databases, including their space database, and previous work request history. This allowed us to anticipate what users were requesting, and where they might be. The goal was to make the act of submitting a request as fast and painless as possible.</p>
            </div>
            <div class="col-lg-12 mx-auto">
                <img class="img-fluid" src="/worklink/mockups/iteration1.jpg">
            </div>
        </div>
    </section>
    <section id="wireframes" class="projects-section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2 class="dark-grey mbt-4 ">Final Designs</h2>

                </div>
                <div class="col-lg-12 mx-auto">
                    <img class="img-fluid" src="worklink/mockups/final.jpg">
                </div>
            </div>

        </div>
    </section>
    <section id="wireframes" class="projects-section bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2 class="text-white mbt-4 ">Prototyping &amp; Testing</h2>
                    <p class="text-white-50 mb-4">
                        Over the course of this project, we built and tested about 7 different Invision or Framer prototypes. This allowed us to both validate our good design, and correct our biases. It also allowed us to match our designs to the users mental model, which should result in a much lower adoption time and rate. </p>


                </div>
                <div class="col-lg-12 mx-auto">
                    <img class="img-fluid" src="worklink/mockups/prototyping.png">
                </div>
            </div>

        </div>
    </section>
    <section id="wireframes" class="projects-section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2 class="dark-grey mbt-4 ">Filling in for the Front-end Team</h2>
                    <p class="text-black-50 mb-4">
React JS is new to our whole team, so we didn't see any reason that we couldn't learn it in tandem with our developers. Another designer here named Laz, and I took on the challenge of creating an HTML and CSS prototype that could easily be converted into React components. We also stayed involved with the development team, joining all of their scrums, and worked directly with them in converting our HTML prototype into React components. </p>

                </div>
                <div class="col-lg-12 mx-auto">
                    <img class="img-fluid" src="worklink/mockups/prototypingCode.png">
                </div>
            </div>

        </div>
    </section>

    <?php include 'php/footer.php'; ?>

</body>

</html>
