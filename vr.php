<!DOCTYPE html>
<html>

<!--    php head include-->
<?php include 'php/head.php'; ?>
<!--    aframe js CDN-->
<script src="https://cdn.rawgit.com/archilogic-com/aframe-gblock/6498b71d/dist/gblock.js"></script>

<body class="body-2">
    <div>
        <!--      php nav include-->
        <?php include 'php/nav.php'; ?>
        <!--        php nav end-->
        <div class="project-background-div">
        </div>
        <div class="heading-wrapper w-container">
            <h6 class="category"><span class="highlight" id="uxhighlight">UX Design &amp; Developement</span></h6>
            <h1 class="project-page-h1">Web VR</h1>
            <h2 class="project-page-h2">Please allow time for the VR to load</h2>
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
    <div class="project-section">
        <div class="w-container">
            <h2>Tour of the World</h2>
            <p>The idea behind this VR experience was to build a meditation "game" where you could travel the world and meditate in different countries or environments. To interact with the environment, you only need to hover over a point for half a second, and then click on the prompt that pops up.</p>
            
            <p>One of the coolest facts about this project is how easy it was to make with a-frame and vanilla Javascript. In total, it took about 4 hours to make.
            </p>
            
            <a href="https://github.com/outsidedav/earthVR" class="button w-button center">See the Code</a>
        </div>
    </div>

    <!--    php footer include-->
    <?php include 'php/footer.php'; ?>
    <!--php footer end    -->
</body>

</html>
