<!DOCTYPE html>
<html lang="zxx">

<?php
include 'assets/view/blog-head.php';

?>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section-other">
        <div class="container-fluid">
            <div class="logo">
                <a href="./index.html"><img src="assets/template/yummy/img/little-logo.png" alt=""></a>
            </div>
            <div class="nav-menu">
                <nav class="main-menu mobile-menu">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="categories.php">Categories</a></li>
                        <li><a href="blog.php">Blog</a></li>
                        <li class="active"><a href="">About</a></li>

                    </ul>
                </nav>
                <div class="nav-right search-switch">
                    <i class="fa fa-search"></i>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->



    <!-- About Me Section Begin -->
    <section class="about-me spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="about-left">
                        <img src="assets/template/yummy/img/about-me.jpg" alt="">
                        <div class="about-title">
                            <span>16 January 2019</span>
                            <h2>I’m Maria Smith, <br />a mother & a food blogger</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet. Donec in sodales dui, a
                                blandit nunc. Pellentesque id eros venenatis, sollicitudin neque sodales, vehicula nibh.
                                Nam massa odio, porttitor vitae efficitur non, ultricies volutpat tellus. Cras egestas
                                in lacus a finibus. Suspendisse sed urna at elit condimentum viverra. Suspendisse non
                                lobortis nisi. Maecenas accumsan quam quis porta laoreet. Aliquam felis odio, aliquet
                                fermentum semper at, porttitor ac mi. Duis vel condimentum risus. Phasellus eu dolor vel
                                neque commodo accumsan eget et enim. Pellentesque non elit sed risus tincidunt aliquam
                                eu eget metus.</p>
                            <p>Donec sit amet enim tortor. Sed egestas nulla nibh, vitae porta velit sagittis eget.
                                Donec vitae tellus semper, cursus sem id, iaculis purus. Aenean ligula risus, maximus
                                tristique eros vel, auctor ornare tortor. Aliquam vel augue sapien. Duis non auctor
                                ante, ac vestibulum tortor. Etiam quis dolor ultricies, dignissim ante a, ornare ipsum.
                                Phasellus suscipit rhoncus nulla, quis bibendum tortor elementum ac. Nullam viverra
                                tellus diam, nec accumsan orci aliquam sed. Sed placerat sagittis lacus, non rutrum diam
                                volutpat id. </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- About Me Section End -->


    <?php
include 'assets/view/blog-footer.php';
include 'assets/view/blog-search.php';
include 'assets/view/blog-js.php';
?>

</body>

</html>