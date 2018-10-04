<!DOCTYPE html>
<html lang="en">



<?php include 'php/head.php'; ?>
<link href="css/projectpage.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<body id="page-top">

    <header class="masthead vm-bg">
        <?php include 'php/nav.php'; ?>
        <div class="container d-flex h-100 align-items-center">
            <div class="mx-auto text-center">
                <span><img src="logos/vmMasthead.svg" class="img-fluid"></span>
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
                <h1 class="dark-grey mb-4 ">IT Vendor Management</h1>
                <p class="text-black-50">Vendor Management is team that processes new software, hardware and service request for NYU's massive ammount of employees and staff. They get hundreds of thousands of requests and renewals each year, and have developed a Google Sheet to help them process these requests by hand.</p>
            </div>
            <div class="col-12 text-center mb-4">
                <img src="vm/img/users.png" class="img-fluid " alt="">

            </div>
            <div class="col-lg-8 mx-auto">
                <h2 class="dark-grey">Problem Statment</h2>
                <p class="text-black-50">VM users spend a large portion of their workday processing requests and renewals by hand, through Google sheets, and via email, when much of their work could be automated. </p>

                <blockquote class="text-black-50"><i> "How might we use software to automate the workload of VM users, allowing them to spend more time on highlevel tasks and allowing for requests from department users to go through quicker" </i></blockquote>
            </div>
            <div class="col-lg-6 mx-auto text-center mb-4">
                <img src="vm/img/highfive.png" class="img-fluid" alt="">

            </div>
        </div>
    </section>

    <section id="workflow" class="projects-section bg-dark">
        <div class="container">
            <div class="col-lg-8 mx-auto">
                <h2 class="text-white mb-4 ">Observation + Workflows</h2>
                <p class="text-white-50 mb-4">The procuerment processes at NYU is a massive operation, involving hundreds of moving parts. If my Project Manager and I were to build a system that improved the speed at which VM users did their job, we first had understand the process behind what they did and why.</p>
            </div>
            <div id="car1" class="carousel slide mb-5" data-ride="carousel" data-interval="5000">
                <ol class="carousel-indicators">
                    <li data-target="#car1" data-slide-to="0" class="active"></li>
                    <li data-target="#car1" data-slide-to="1"></li>
                    <li data-target="#car1" data-slide-to="2"></li>
                    <li data-target="#car1" data-slide-to="3"></li>
                    <li data-target="#car1" data-slide-to="4"></li>
                </ol>
                <div class="carousel-inner mb-4">

                    <div class="carousel-item active">
                        <img class="d-block w-100" src="vm/img/workflow2.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="vm/img/workflow3.png" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="vm/img/workflow1.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="vm/img/workflow5.png" alt="Fifth slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="vm/img/workflow4.png" alt="Fourth slide">
                    </div>

                </div>
                <a class="carousel-control-prev" href="#car1" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span>
                         <span class="sr-only">Previous</span></a>
                <a class="carousel-control-next" href="#car1" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
            </div>
            <div class="col-lg-8 mx-auto mb-5">
                <h2 class="text-white">Final MVP</h2>
                <p class="text-white-50 mb-4">The procuerment processes at NYU is a massive operation, involving hundreds of moving parts. If my Project Manager and I were to build a system that improved the speed at which VM users did their job, we first had understand the process behind what they did and why.</p>
            </div>
            <div class="col-lg-12 mx-auto">
                <img class="img-fluid" src="vm/img/workflowFinal.png">
            </div>
        </div>
    </section>
    <section id="wireframes" class="projects-section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2 class="dark-grey mbt-4 ">Initial Wireframes</h2>
                </div>
            </div>
            <div id="car2" class="carousel slide" data-ride="carousel" data-interval="5000">
                <ol class="carousel-indicators">
                    <li data-target="#car2" data-slide-to="0" class="active"></li>
                    <li data-target="#car2" data-slide-to="1"></li>
                    <li data-target="#car2" data-slide-to="2"></li>

                </ol>
                <div class="carousel-inner mb-4">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="vm/img/wireframe1.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="vm/img/wireframe2.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="vm/img/wireframe3.jpg" alt="Third slide">
                    </div>


                </div>
                <a class="carousel-control-prev" href="#car2" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span>
                 <span class="sr-only">Previous</span></a>
                <a class="carousel-control-next" href="#car2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
            </div>

        </div>
    </section>
    <section id="wireframes" class="projects-section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2 class="dark-grey mbt-4 ">Lo-Fi Mockups</h2>
                    <p class="text-black-50">We went through iterations of the simpilist case, until we felt confident enough to map the other 7 casees that we decided would be most important to the MVP.</p>
                </div>
            </div>
            <div id="car3" class="carousel slide" data-ride="carousel" data-interval="5000">
                <ol class="carousel-indicators">
                    <li data-target="#car3" data-slide-to="0" class="active"></li>
                    <li data-target="#car3" data-slide-to="1"></li>
                    <li data-target="#car3" data-slide-to="2"></li>
                    <li data-target="#car3" data-slide-to="3"></li>
                    <li data-target="#car3" data-slide-to="4"></li>

                </ol>
                <div class="carousel-inner mb-4">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="vm/img/lofiMockup1.png" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="vm/img/lofiMockup3.png" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="vm/img/lofiMockup5.png" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="vm/img/lofiMockup2.png" alt="forth slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="vm/img/lofiMockup4.png" alt="Fifth slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#car3" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span>
                 <span class="sr-only">Previous</span></a>
                <a class="carousel-control-next" href="#car3" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
            </div>
            
        </div>
    </section>
   <section class="projects-section bg-white">
         <div class="container">
            <div class="col-lg-6 mx-auto mb-4 text center ">
                        <img src="vm/img/vmart.png">
                    </div>
        </div>
    </section>
    <section id="wireframes" class="projects-section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto mb-4">
                    <h2 class="dark-grey">Hi-Fi Mockups</h2>
                    <p class="text-black-50">While running through design iterations, I worked with developers to create a design system that would work well with their framework. We decided that using the Material-UI React library and Bootsrap 4 would work best to accomplish the goals of this project. We modified those componates to work with our internal design guidlines and added any componantes to the system that weren't avalible out of the box.</p>
                </div>
                <div class="col-lg-12 mx-auto mb-4">
                    <img class="img-fluid" src="vm/img/hifiM1.png">
                </div>
                <div id="car4" class="carousel slide bg-light" data-ride="carousel" data-interval="20000">
                    <ol class="carousel-indicators">
                        <li data-target="#car4" data-slide-to="0" class="active"></li>
                        <li data-target="#car4" data-slide-to="1"></li>
                        <li data-target="#car4" data-slide-to="2"></li>
                        <li data-target="#car4" data-slide-to="3"></li>
                        <li data-target="#car4" data-slide-to="4"></li>
                        <li data-target="#car4" data-slide-to="5"></li>

                    </ol>
                    <div class="carousel-inner mb-4">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="vm/img/hifiN10.png" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="vm/img/hifiN1.png" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="vm/img/hifiN2.png" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="vm/img/hifiN3.png" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="vm/img/hifiN4.png" alt="forth slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="vm/img/hifiN5.png" alt="Fifth slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="vm/img/hifiN6.png" alt="Fifth slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="vm/img/hifiN7.png" alt="Fifth slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#car4" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span>
                 <span class="sr-only">Previous</span></a>
                    <a class="carousel-control-next" href="#car4" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
                </div>
            </div>
        </div>
    </section>

    <?php include 'php/footer.php'; ?>

</body>

</html>
