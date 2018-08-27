<!DOCTYPE html>
<html lang="en">

<head>

    <?php include 'php/head.php'; ?>
    <link href="css/projectpage.css" rel="stylesheet">

</head>

<body id="page-top">

    <header class="masthead vid">
        <?php include 'php/nav.php'; ?>
        <div class="container d-flex h-100 align-items-center">
            <div class="mx-auto text-center">
                <h1 class="mx-auto my-0 text-uppercase">Kinect</h1>
                <h2 class="text-white-50 mx-auto mt-2 mb-5">Hacking the Microsoft Kinect with OpenFrameworks</h2>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="about-section text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2 class="text-white mb-4">Project One</h2>
                    <p class="text-white-50">Temp Text</p>
                </div>
            </div>
            <!--
            <video id="" class="mx-auto" autoplay loop>
            <source src="videos/Annihilation.mp4">
        </video>
-->
            <img src="images/of/shaders_pipeline.png" class="img-fluid overlap" alt="">
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="projects-section bg-light">
        <div class="container">

            <!-- Featured Project Row -->
            <div class="row align-items-center no-gutters mb-4 mb-lg-5">
                <video class="col-xl-8 col-lg-7" autoplay loop>
                    <source src="videos/Annihilation.mp4">
                </video>
                <!--
          <div class="col-xl-8 col-lg-7">
            <img class="img-fluid mb-3 mb-lg-0" src="" alt="">
          </div>-->
                <div class="col-xl-4 col-lg-5">
                    <div class="featured-text text-center text-lg-left">
                        <h4 class="dark-grey">The Inspiration</h4>
                        <p class="text-black-50 mb-0">The first step would be to figure out how to create and manipulate a sphere in OpenFrameworks and pass those calculations through a shader using GLSL. I spent a few hours with primitive shapes in OpenFrameworks figuring out what was possible.</p>
                    </div>
                </div>
            </div>

            <!-- Project One Row -->
            <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
                <div class="col-lg-6 dark-grey-bg">
                    <video class="img-fluid" autoplay loop>
                    <source src="videos/icosphererotate940.mp4">
                </video>
                </div>
                <!--
                <div class="col-lg-6 dark-grey-bg">
                    <img class="img-fluid" src="img/demo-image-02.jpg" alt="">
                </div>
-->
                <div class="col-lg-6 dark-grey-bg">
                    <div class="bg-black text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-left">
                                <h4 class="text-white">Step One</h4>
                                <p class="mb-0 text-white-50">The first step would be to figure out how to create and manipulate a sphere in OpenFrameworks and pass those calculations through a shader using GLSL. I spent a few hours with primitive shapes in OpenFrameworks figuring out what was possible.</p>
                                <hr class="d-none d-lg-block mb-0 ml-0">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project Two Row -->
            <div class="row justify-content-center no-gutters">
                <div class="col-lg-6 dark-grey-bg">
                    <video class="img-fluid" autoplay loop>
                    <source src="videos/shaderPrototype940.mp4">
                </video>
                </div>
                <!--
                <div class="col-lg-6 dark-grey-bg">
                    <img class="img-fluid" src="img/demo-image-02.jpg" alt="">
                </div>
-->
                <div class="col-lg-6 dark-grey-bg order-lg-first">
                    <div class="bg-black text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-right">
                                <h4 class="text-white">Step Two</h4>
                                <p class="mb-0 text-white-50">My first theory was that I would be able to use any image and apply it as a texture to the sphere. As you can see below, sphere's don't really work that way. You have to use a Mercator image, or UV map that will stretch evenly over a sphere (think of how an image of the globe looks stretched out).</p>
                                <hr class="d-none d-lg-block mb-0 mr-0">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Project One Row -->
            <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
                <div class="col-lg-6 dark-grey-bg">
                    <video class="img-fluid" autoplay loop>
                    <source src="videos/icosphererotate940.mp4">
                </video>
                </div>
                <!--
                <div class="col-lg-6 dark-grey-bg">
                    <img class="img-fluid" src="img/demo-image-02.jpg" alt="">
                </div>
-->
                <div class="col-lg-6 dark-grey-bg">
                    <div class="bg-black text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-left">
                                <h4 class="text-white">Step Three</h4>
                                <p class="mb-0 text-white-50">The first step would be to figure out how to create and manipulate a sphere in OpenFrameworks and pass those calculations through a shader using GLSL. I spent a few hours with primitive shapes in OpenFrameworks figuring out what was possible.</p>
                                <hr class="d-none d-lg-block mb-0 ml-0">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project Two Row -->
            <div class="row justify-content-center no-gutters">
                <!--
                <div class="col-lg-6 dark-grey-bg">
                    <video class="img-fluid" autoplay loop>
                    <source src="videos/shaderPrototype940.mp4">
                </video>
                </div>
-->

                <div class="col-lg-6 dark-grey-bg">
                    <img class="img-fluid" src="images/eye.gif" alt="">
                </div>

                <div class="col-lg-6 dark-grey-bg order-lg-first">
                    <div class="bg-black text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-right">
                                <h4 class="text-white">Step Four</h4>
                                <p class="mb-0 text-white-50">My first theory was that I would be able to use any image and apply it as a texture to the sphere. As you can see below, sphere's don't really work that way. You have to use a Mercator image, or UV map that will stretch evenly over a sphere (think of how an image of the globe looks stretched out).</p>
                                <hr class="d-none d-lg-block mb-0 mr-0">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Project One Row -->
            <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
                <div class="col-lg-6 dark-grey-bg">
                    <video class="img-fluid" autoplay loop>
                    <source src="videos/eyeshader940.mp4">
                </video>
                </div>
                <!--
                <div class="col-lg-6 dark-grey-bg">
                    <img class="img-fluid" src="img/demo-image-02.jpg" alt="">
                </div>
-->
                <div class="col-lg-6 dark-grey-bg">
                    <div class="bg-black text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-left">
                                <h4 class="text-white">Step Five</h4>
                                <p class="mb-0 text-white-50">The first step would be to figure out how to create and manipulate a sphere in OpenFrameworks and pass those calculations through a shader using GLSL. I spent a few hours with primitive shapes in OpenFrameworks figuring out what was possible.</p>
                                <br>
                                <a class="btn btn-outline-primary" href="#portfolio" role="button">View Code</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Featured Project Row -->
            <div class="row align-items-center no-gutters my-lg-5">
                <video class="col-xl-8 col-lg-7" autoplay loop>
                    <source src="videos/ShaderFinal.mp4">
                </video>
                <!--
          <div class="col-xl-8 col-lg-7">
            <img class="img-fluid mb-3 mb-lg-0" src="" alt="">
          </div>-->
                <div class="col-xl-4 col-lg-5">
                    <div class="featured-text text-center text-lg-left">
                        <h4 class="dark-grey">Background Shaders</h4>
                        <p class="text-black-50 mb-0">One of the parts that were most fun about this project was working with other artists in the class, <a href="https://github.com/alexnathanson">Alex Nathanson</a> figured out how to use grids in his shader to create this amoeba-like background. And Debbie Lit was able to create the black background you see in the final product here.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

   
        <?php include 'php/footer.php'; ?>
 
</body>

</html>
