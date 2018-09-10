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
                    <p class="text-white-50">I first got my feet wet with the kinect during a class on OpenFrameworks while working with a classmate of mine, Yu-Shen Li. The goal of this project was to play around with the concept of "Zombie Media." We wanted to take an old TV and hack it to work with a microsoft kinect. We would then write a program to access the kinnect's depth sensors, and do fun things with the camera.<br> Because of time contrstrains we weren't able to get an old tube TV to work with the kinect, but we were able to animate one.<br> We gave it this "big brother" type feel, with a blinking camera feel. The TV would change bettween channels, activated by your movment, and then change to one of a few channels that were recording you<br> We then found some shaders online that processed the information from the camera and depth sensors and reimagined that information as animated text, noise and some fun photobooth type effects.<br>

                    </p>
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

    <!--    kinnect project two-->
    <section id="about" class="about-section text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2 class="text-white mb-4">Project two</h2>
                    <p class="text-white-50">The Second project was much more advanced, and came with it's own set of issues.<br> The goal of this project was to play around with the kinects ability to create a point cloud<br> We gave it this "big brother" type feel, with a blinking camera feel. The TV would change bettween channels, activated by your movment, and then change to one of a few channels that were recording you<br> We then found some shaders online that processed the information from the camera and depth sensors and reimagined that information as animated text, noise and some fun photobooth type effects.<br>

                    </p>
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
                        <p class="text-black-50 mb-0">The documentry blah blah blah that used DSLRs and the kinnect to create a high density 3d point cloud with the data from the dslr projected onto those 3d figures.</p>
                    </div>
                </div>
            </div>

            <!-- Project One Row -->
            <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
<!--
                <div class="col-lg-6 dark-grey-bg">
                    <video class="img-fluid" autoplay loop>
                    <source src="videos/icosphererotate940.mp4">
                </video>
                </div>
-->
                <div class="col-lg-6 white-bg">
                    <img class="img-fluid" src="images/of/KinectSketch.png" alt="">
                </div>
                <div class="col-lg-6 dark-grey-bg">
                    <div class="bg-black text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-left">
                                <h4 class="text-white">Idiation</h4>
                                <p class="mb-0 text-white-50">The first step in every project I do is to sketch out what you want to create. This doesn't mean I am good at sketching, but sketching and prototyping on paper saves you a lot of time later on vs just jumping into xcode and coding away without having a vision of where you want to go. It helps you stay focused and makes you a much better programer because you aren't just coding what's convenient but problem solving to get to an end goal.</p>
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
                    <img class="img-fluid" src="images/openFrameworksThumbnail.png" alt="">
                </div>

                <div class="col-lg-6 dark-grey-bg order-lg-first">
                    <div class="bg-black text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-right">
                                <h4 class="text-white">Code</h4>
                                <p class="mb-0 text-white-50"> Open frameworks comes with a kinect pluggin so you can start using a kinect with you make with only a few addapters and openframeworks out of the box. This pluggin allows you to access the normal camera and infered camera with methods like "getDepthfield()" and "getColorForPosition()". This was vital t creating the proof of concept, a point cloud with an image perjected on each point </p>
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
        </div>
    </section>


    <?php include 'php/footer.php'; ?>

</body>

</html>
