<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Davon Larson UX Design</title>
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="css/normalize.css" rel="stylesheet" type="text/css">
    <link href="css/webflow.css" rel="stylesheet" type="text/css">
    <link href="css/davon.webflow.css" rel="stylesheet" type="text/css">
    <!-- icon library for social buttons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/typedDavon.js"></script>
    <!--    aframe-->
    <script src="https://aframe.io/releases/0.8.0/aframe.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js" type="text/javascript"></script>
    <script type="text/javascript">
        WebFont.load({
            google: {
                families: ["Open Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic", "Lato:100,100italic,300,300italic,400,400italic,700,700italic,900,900italic", "Droid Sans:400,700"]
            }
        });

    </script>
    <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
    <!--  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>-->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">
</head>
<!--    aframe js CDN-->
<script src="https://cdn.rawgit.com/archilogic-com/aframe-gblock/6498b71d/dist/gblock.js"></script>

<body class="body-2">
    <!--      php nav include-->
    <div>
        <div data-collapse="medium" data-animation="default" data-duration="400" class="nav w-nav">
            <div class="w-container">
                <a href="index.php" class="logo w-nav-brand">
                    <div class="home-logo">DAVON LARSON</div>
                </a>
                <nav role="navigation" class="nav-menu w-nav-menu"><a href="index.php#portfolio" class="nav-link w-nav-link">Portfolio</a><a href="https://www.linkedin.com/in/davonlarson" target="_blank" class="nav-link w-nav-link">ME</a></nav>
                <div class="menu-button w-nav-button">
                    <div class="w-icon-nav-menu"></div>
                </div>
            </div>
        </div>
        <!--        php nav end-->
        <div class="project-background-div">
        </div>
        <div class="heading-wrapper w-container">
            <h6 class="category"><span class="highlight" id="uxhighlight">UX Design &amp; Developement</span></h6>
            <h1 class="project-page-h1">Web VR</h1>
            <h2 class="project-page-h2">Please allow time for the VR to load</h2>
        </div>
    </div>
    <div class="project-section">
        <div class="w-container">
            <h2>Tour of the World</h2>
            <p>The idea behind this VR experience was to build a meditation "game" where you could travel the world and meditate in different countries or environments. To interact with the environment, you only need to hover over a point for half a second, and then click on the prompt that pops up..</p>
        </div>
    </div>
    <div id="myEmbeddedScene">
        <a-scene embedded>
            <a-entity id="cameraWrapper" position="0 15 40">
                <a-camera>
                    <a-cursor>
                        <a-entity cursor="fuse: true; fuseTimeout: 500" position="0 0 -1" geometry="primitive: ring; radiusInner: 0.01; radiusOuter: 0.03" material="color: red; shader: flat">
                        </a-entity>
                    </a-cursor>
                </a-camera>
            </a-entity>
            <a-assets>
                <img id="stars" src="images/vr/stars.jpg">
                <img id="space" src="images/vr/spaceStation.jpg">
                <img id="Africa" src="images/vr/africa.jpg">
                <img id="America" src="images/vr/lake.jpg">
                <img id="Asia" src="images/vr/asia.jpg">
                <img id="Hawaii" src="images/vr/hawaii.jpg">
            </a-assets>
            <a-sound src="src:http://marc.ucla.edu/mpeg/Body-Scan-Meditation.mp3" autoplay="true" position="0 2 5"></a-sound>

            <a-sky id="sky" src="#stars"></a-sky>


            <a-entity id="earth">
                <a-entity gblock="https://poly.google.com/view/1I5ip-3VOfv" position="0 0 0" scale=".05 .05 .05">

                </a-entity>
                <a-sphere id="americaPin" position="7.137 28.651 12.648" radius=".6" color="red"></a-sphere>
                <a-sphere id="africaPin" position="13.059 24.226 -10.837" radius=".6" color="red"></a-sphere>
                <a-sphere id="asiaPin" position="-12.492 22.041 -11.280" radius=".6" color="red"></a-sphere>
                <a-sphere id="hawaiiPin" position="-8.016 16.974 14.300" radius=".6" color="red"></a-sphere>
                <a-sphere id="australiaPin" position="-13.674 8.411 -0.444" radius=".6" color="red"></a-sphere>
                <a-animation attribute="rotation" dur="80000" fill="forwards" to="0 360 0" repeat="indefinite" easing="linear">
                </a-animation>
            </a-entity>
            <a-entity id="yogiContainer">

            </a-entity>
            <a-entity id="spaceStationContainer" position="0 0 0">
                <a-sphere id="spaceStationPin" geometry="radius: 0.84; primitive: tetrahedron" position="30 18 0" color="red">
                    <a-animation attribute="rotation" dur="5000" fill="forwards" to="0 360 0" repeat="indefinite" easing="linear">
                    </a-animation>
                </a-sphere>
                <a-entity id="spaceStation" gblock="https://poly.google.com/view/d3Fq5H6ne8E" position="30 15 0" scale=".1 .1 .1" rotation="0 0 -80"></a-entity>
                <a-animation attribute="rotation" dur="20000" fill="forwards" to="0 360 0" repeat="indefinite" easing="linear">
                </a-animation>
            </a-entity>

            <a-entity>
                <a-entity id="textContainer"></a-entity>
                <a-entity id="exitBoxContainer"></a-entity>
                <a-entity id="textBoxContainer"></a-entity>
                <a-animation attribute="scale" begin="0" from="0 0 0" to="1 1 1"></a-animation>
            </a-entity>
        </a-scene>
        <script src="js/vrscript.js"></script>
    </div>

    <!--    php footer include-->
    <!--this is the footer-->

    <div id="portfolio" class="section">
        <div id="projects" class="container-3 w-container">
            <h3 class="section-title">Recent Projects</h3>

            <div class="w-dyn-list">
                <div class="w-dyn-items w-row">
                    <div class="w-dyn-item w-col w-col-4"><a href="/vr.php" class="w-inline-block"><img src="images/gifs/a-frame.gif" sizes="(max-width: 767px) 96vw, (max-width: 991px) 229.328125px, 299.984375px" class="project-image"><figcaption>Web VR</figcaption></a></div>
                    <!--img 1-->
                    <div class="w-dyn-item w-col w-col-4"><a href="/shaders.php" class="w-inline-block"><img src="images/openFrameworksThumbnail.png" sizes="(max-width: 767px) 96vw, (max-width: 991px) 229.328125px, 299.984375px" class="project-image"><figcaption>Creative Coding</figcaption></a></div>
                    <!--img 1-->
                    <div class="w-dyn-item w-col w-col-4"><a href="/addictionStudy.php" class="w-inline-block"><img src="images/dhr/dhrthumbnail.png" sizes="(max-width: 767px) 96vw, (max-width: 991px) 229.328125px, 299.984375px" class="project-image"><figcaption>Digital Health Study</figcaption></a></div>
                    <!--img 1-->
                    <div class="w-dyn-item w-col w-col-4"><a href="/deductr.php" class="w-inline-block"><img src="images/deductrthum.png" sizes="(max-width: 767px) 96vw, (max-width: 991px) 229.328125px, 299.984375px" class="project-image"><figcaption>Deductr</figcaption></a></div>
                    <!--img 2-->
                    <div class="w-dyn-item w-col w-col-4"><a href="https://www.openprocessing.org/user/97408" class="w-inline-block"><img src="images/oldTV800.png" class="project-image"><figcaption>p5*js</figcaption></a></div>
                    <!--img 3-->
                    <div class="w-dyn-item w-col w-col-4"><a href="227duffield.php" class="w-inline-block"><img src="images/UXclass.png" sizes="(max-width: 767px) 96vw, (max-width: 991px) 229.328125px, 299.984375px" srcset="images/UXclass.png 500w, images/UXclass.png 800w, images/UXclass.png 800w" class="project-image"><figcaption>227 Duffield</figcaption></a></div>
                    <!--img 4-->
                    <div class="w-dyn-item w-col w-col-4"><a href="/bluestar.php" class="w-inline-block"><img src="images/bluestar.png" sizes="(max-width: 767px) 96vw, (max-width: 991px) 229.328125px, 299.984375px" class="project-image"><figcaption>BLuestar Cooking</figcaption></a></div>
                    <!--img 5-->
                    <div class="w-dyn-item w-col w-col-4"><a href="/flatirons.php" class="w-inline-block"><img src="images/flatirons-computer600.gif" sizes="(max-width: 767px) 96vw, (max-width: 991px) 229.328125px, 299.984375px" srcset="images/flatirons-computer600.gif 600w, images/flatirons-computer600.gif 800w" class="project-image"><figcaption>Flatirons Community Church</figcaption></a></div>
                    <!--img 6-->
                    <div class="w-dyn-item w-col w-col-4"><a href="/120.php" class="w-inline-block"><img src="images/rollei.png" sizes="(max-width: 767px) 96vw, (max-width: 991px) 229.328125px, 299.984375px" srcset="images/rollei@0,65x.png 500w, images/rollei.png 800w, images/rollei.png 800w" class="project-image"><figcaption>120 on 120mm</figcaption></a></div>
                    <div class="w-dyn-item w-col w-col-4"><a href="/reebok.php" class="w-inline-block"><img src="http://uploads.webflow.com/592103aa16b99b0139ddc5f9/59225e53024ad86ffbd6f7d4_ezgif.com-video-to-gif.gif" class="project-image"/><figcaption>Reebok Copywriting</figcaption></a></div>
                    <div class="w-dyn-item w-col w-col-4"><a href="animations.php" class="w-inline-block"><img src="/images/appcues.gif" class="project-image"/><figcaption>HTML 5 Banners</figcaption></a></div>
                </div>
                <div>
                    <p></p>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="w-container">
            <div class="footer-logo">Davon Larson</div>
            <div>Human Centered Designer</div>
            <a href="https://dribbble.com/Davontheweb" class="fa fa-dribbble"></a>
            <a href="https://twitter.com/DavOnTheWeb" class="fa fa-twitter"></a>
            <a href="https://www.linkedin.com/in/davonlarson/" class="fa fa-linkedin"></a>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js" type="text/javascript"></script>
    <script src="js/webflow.js" type="text/javascript"></script>
    <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
    <!--php footer end    -->
</body>

</html>
