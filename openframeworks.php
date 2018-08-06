<!DOCTYPE html>
<html>
<!--    php head include-->
<?php include 'php/head.php'; ?>

<body class="body-2">
    <div>
        <!--      php nav include-->
        <?php include 'php/nav.php'; ?>
        <div class="bg-container">
            <video class="project-background-vid" autoplay loop>
            <source src="videos/kinect2bg.mp4" type="video/mp4" media="screen and (max-width:399px)">
            <source src="videos/kinect4bg.mp4" type="video/mp4" media="screen and (min-width:400px)">
          </video>
            <div class="background-gradient">
            </div>
        </div>
        <div class="heading-wrapper  ">
            <h6 class="category"><span class="highlight" id="uxhighlight">Development</span></h6>
            <h1 class="project-page-h1">Open Frameworks</h1>
            <h2 class="project-page-h2">Creative Coding with C++</h2>
        </div>

    </div>
    <div class="oF-sec-one">
        <div class="project-section">
            <div class=" ">

                <h2>Shaders</h2>

                <p>Openframeworks is an opensource C++ library that is really popular in the art community. Openframeworks has a set of tools and plugins that make it relatively easy to do Processing type programming in C++.
                </p>
                <p>In simple terms, shaders are how programmers access and leverage the GPU to do calculations. Shaders can be really tricky because there are limitations to how the GPU can process information. Shaders are probably most popular graphics-heavy programs like video game or effect generation in film.</p>
                <p>For this project, I was really inspired by one of the ending scenes in the movie Annihilation. There is a sphere that represents a kind of alien, with very organic looking fractals that loop out of what looks like an eye. I thought that looked mesmerizing and I wanted to attempt to duplicate a shader with a similar effect</p>

                <p></p>
            </div>
        </div>
    </div>
    <video id="anClip" class="proj-vid" autoplay loop>
            <source src="videos/Annihilation.mp4">
        </video>
    <div class="oF-sec-one">
        <h2>Iterations &amp; Build</h2>
        <h3>Step 1:</h3>
        <p>The first step would be to figure out how to create and manipulate a sphere in OpenFrameworks and pass those calculations through a shader using GLSL. I spent a few hours with primitive shapes in OpenFrameworks figuring out what was possible.</p>
        <h3>Step 2:</h3>
        <p>My first theory was that I would be able to use any image and apply it as a texture to the sphere. As you can see below, sphere's don't really work that way. You have to use a Mercator image, or UV map that will stretch evenly over a sphere (think of how an image of the globe looks stretched out).</p>
        <h3>Step 3</h3>
        <p>I decided to create my own using an image that I found online. Thanks to years of photography practice and graphic design, I'm pretty good with photoshop. After stretching the image proportionately, I was able to create a looping gif that would theoretically be able to be applied as a texture on the sphere to give us a similar effect from Annotation.</p>
        <h3>Step 4</h3>
        <p>I then brought the image into photoshop to create a looping gif with a series of stretched images.</p>
        <h3>Step 5</h3>
        <p>It turns out, that OpenFrameworks doesn't work very well with GIFs (at least when trying to apply them as a texture). What I ended up doing was loading each frame into an array, and looping through those as an ofImage. I then applied that ofImage to a texture and mapped it around the sphere. I also found an example shader that gave a point more depth based on its pixel color, which worked nicely to provide the eye with literal texture. </p>
    </div>
    <div class="oF-sec-one">
        <div class="flexContainer project-section">
            <div class="  flexChild">
                <figure class="">
                    <video class="proj-vid-small" autoplay loop>
            <source src="videos/icosphererotate940.mp4">
            </video>
                </figure>
            </div>
            <div class="  flexChild">
                <figure class="">
                    <video class="proj-vid-small" autoplay loop>
                    <source src="videos/shaderPrototype940.mp4">
            </video>
                </figure>
            </div>
            <div class="  flexChild">
                <div class="proj-vid-small" style='background:url(images/eye.jpeg)'></div>
            </div>
            <div class="  flexChild">
                    <div class="proj-vid-small" style='background:url(images/eye.gif)'></div>
            </div>
            <div class="  flexChild">
                <figure class="">
                    <video class="proj-vid-small" autoplay loop>
            <source src="videos/eyeshader940.mp4">
            </video>
                </figure>
            </div>
        </div>
    </div>
    <div class="project-section">
        <div class="flexChild">
            <h3>Background Shaders</h3>
            <p>One of the parts that were most fun about this project was working with other artists in the class, <a href="https://github.com/alexnathanson"> Alex Nathanson </a> figured out how to use grids in his shader to create this amoeba-like background. And Debbie Lit was able to create the black background you see in the final product below. </p>
            <video class="proj-vid" autoplay loop>
            <source src="videos/ShaderFinal.mp4">
            </video>
        </div>
        <div class="  center-button">
            <button href="https://github.com/alexnathanson/acc_project5" class="w-button button">View GitHub</button>
        </div>
    </div>

    <div class="slide">
        <img src=images/of/ringBG.png>
        <!--                Photo by Michael Henry on Unsplash-->
    </div>
    <div class="oF-sec-one  ">
        <div class="project-section">
            <div class=" ">

                <h2>Ring Modulator</h2>


                <p>The original goal this project was to create a digital guitar peddle When discussing this with My team we initially floated the idea of creating a web conferencing tool where musicians could jam over a connection and get real-time feedbackk with the facts and information about how the other teams playing. We broke the software into portions and my portion became the guitar effects. While researching how to program distortion I came across a few concepts.</p>


                <p>
                    First it’s important to understand the difference between a sign wave, and other waves that create a sense of distortion. A typical overdrive peddle turns a sign wave into a square wave. But there are also Triangle waves, saw tooth waves, and all sorts of weird shapes you can create with simple equations. </p>
                ￼


            </div>

            <!--php include    -->
            <?php include 'php/footer.php'; ?>


</body>

</html>
