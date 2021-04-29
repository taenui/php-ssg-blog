<?php
$pageTitle = "MAP";
$pageCode = "map";
?>
<?php require_once "head.php"; ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/css/swiper.min.css">


<link rel="stylesheet" href="map.css">
<script src="map.js" defer></script>

<section class="hero-slider hero-style">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="slide-inner slide-bg-image"
                    data-background="https://cdn.jsdelivr.net/gh/taenui/php-ssg-blog/pf/img/map/bn_main_1.png">
                    <div class="container">
                        <div data-swiper-parallax="300" class="slide-title">
                            <h2></h2>
                        </div>
                        <div data-swiper-parallax="400" class="slide-text">
                            <p></p>
                        </div>
                        <div class="clearfix"></div>
                        <div data-swiper-parallax="500" class="slide-btns">
                            <a href="" class="theme-btn-s2">Process</a>
                            <a href="#" class="theme-btn-s3"><i class="fas fa-chevron-circle-right"></i> Get Info</a>

                        </div>

                    </div>
                </div>
                <!-- end slide-inner -->
            </div>
            <!-- end swiper-slide -->

            <div class="swiper-slide">
                <div class="slide-inner slide-bg-image"
                    data-background="https://cdn.jsdelivr.net/gh/taenui/php-ssg-blog/pf/img/map/bn_main_2.png">
                    <div class="container">
                        <div data-swiper-parallax="300" class="slide-title">
                            <h2></h2>
                        </div>
                        <div data-swiper-parallax="400" class="slide-text">
                            <p></p>
                        </div>
                        <div class="clearfix"></div>
                        <div data-swiper-parallax="500" class="slide-btnss">
                            <a href="sool.html" class="theme-btn-s2">Process</a>


                        </div>

                    </div>

                </div>

                <!-- end slide-inner -->
            </div>
            <!-- end swiper-slide -->
        </div>
        <!-- end swiper-wrapper -->

        <!-- swipper controls -->
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>
<!-- end of hero slider -->


<?php require_once "foot.php"; ?>