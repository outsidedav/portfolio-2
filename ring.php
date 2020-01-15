<!DOCTYPE html>
<html lang="en">

<head>

    <?php include 'php/head.php'; ?>
    <link href="css/projectpage.css" rel="stylesheet">

</head>

<body id="page-top">

    <header class="masthead ring-bg">
        <?php include 'php/nav.php'; ?>
        <div class="container d-flex h-100 align-items-center">
            <div class="mx-auto text-center">
                <h1 class="mx-auto my-0 text-uppercase">Ring Modulator</h1>
                <h2 class="text-white-50 mx-auto mt-2 mb-5">Creative Coding with C++, OpenFrameworks and Shaders</h2>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="about-section text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2 class="text-white mb-4">Ring Modulator
</h2>
                    <p class="text-white-50">The original goal of this project was to create a digital guitar peddle. When discussing this with My team we initially floated the idea of creating a web conferencing tool where musicians could jam over a connection and get real-time feedback with the facts and information about how the other teams are playing. We broke the software into portions, and my portion became the guitar effects. While researching how to program distortion I came across a few concepts that interested me. In the end, I became fascinated with the concept of ring modulation where you multiply the sound wave from a guitar against a generated sine wave.
</p>
                </div>
            </div>
            
            <video id="" class="mx-auto img-fluid overlap" controls>
            <source src="videos/ringModulator.mov">
        </video>

<!--            <img src="images/of/shaders_pipeline.png" class="img-fluid overlap" alt="">-->
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="projects-section bg-light">
        <div class="container">

            <!-- Featured Project Row -->
            <div class="row align-items-center no-gutters mb-4 mb-lg-5">
<!--
                <video class="col-xl-8 col-lg-7" autoplay loop>
                    <source src="videos/Annihilation.mp4">
                </video>
-->
                
          <div class="col-xl-8 col-lg-7">
            <img class="img-fluid mb-3 mb-lg-0" src="images/ringModulCode.png" alt="">
          </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="featured-text text-center text-lg-left">
                        <h4 class="dark-grey">The Code</h4>
                        <p class="text-black-50 mb-0">We used the C++ library OpenFrameworks in combination with a few plug-ins that allowed us to import sound from my guitar and a midi keyboard. </p>
                    </div>
                </div>
            </div>
        </div>
           
    </section>

   
        <?php include 'php/footer.php'; ?>
 
</body>

</html>
