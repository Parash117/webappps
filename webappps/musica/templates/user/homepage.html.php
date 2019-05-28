<section class="hero-area">
    <div class="hero-slides owl-carousel">

<?php foreach($ci as $coverimg){?>
        <!-- Single Hero Slide -->
        <div class="single-hero-slide d-flex align-items-center justify-content-center">
            <!-- Slide Img -->
            <div class="slide-img bg-img" style="background-image: url(../uploads/cover_image/<?php echo $coverimg['cover_img'];?>);"></div>
            <!-- Slide Content -->
            <div class="hero-slides-content text-center">
                <h2 data-animation="fadeInUp" data-delay="100ms"><span><!--text also here--></span></h2>
                <p data-animation="fadeInUp" data-delay="300ms"></p>
            </div>
            <!-- Big Text -->
            <h2 class="big-text">Multi Matte</h2>
        </div>
<?php }?>

    </div>
    <!-- bg gradients -->
    <div class="bg-gradients"></div>

    <!-- Slide Down -->
    <div class="slide-down" id="scrollDown">
        <h6>Slide Down</h6>
        <div class="line"></div>
    </div>
</section>

<!-- ##### Discography Area Start ##### -->
<div class="discography-area section-padding-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading dark">
                    <h3>Our Work</h3>
                    <h6></h6>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <!-- Discography Slides -->
                <div class="discography-slides owl-carousel">

                  <?php foreach ($works as $work) {?>

                    <!-- Single Discography -->
                    <div class="single-discography">
                        <a href="<?php echo $work['link']; ?>"><img src="../uploads/work/<?php echo $work['image']; ?>" alt=""></a>
                    </div>


                  <?php }?>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Discography Area End ##### -->

<!-- ##### Featured Shows Area Start ##### -->
<div class="featured-shows-area section-padding-100">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="section-heading dark">
                    <h3>Our Services</h3>
                    <h6></h6>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="featured-shows-slides owl-carousel">

                    <!-- Single Featured Shows -->
                    <div class="single-featured-shows">
                        <img src="../img/bg-img/3.jpg" alt="">
                        <!-- Content -->
                        <div class="featured-shows-content">
                            <div class="shows-text">
                                <h4>Camera Rental</h4>
                                <p></p>
                                <a href="#" class="buy-tickets-btn">See more..</a>
                            </div>
                            <div class="bg-gradients"></div>
                        </div>
                    </div>

                    <!-- Single Featured Shows -->
                    <div class="single-featured-shows">
                        <img src="../img/services-pic/lens.png" alt="">
                        <!-- Content -->
                        <div class="featured-shows-content">
                            <div class="shows-text">
                                <h4>Lens Rental</h4>
                                <p></p>
                                <a href="#" class="buy-tickets-btn">See more..</a>
                            </div>
                            <div class="bg-gradients"></div>
                        </div>
                    </div>

                    <!-- Single Featured Shows -->
                    <div class="single-featured-shows">
                        <img src="../img/bg-img/2.jpg" alt="">
                        <!-- Content -->
                        <div class="featured-shows-content">
                            <div class="shows-text">
                                <h4>Dubbing Studio</h4>
                                <p></p>
                                <a href="#" class="buy-tickets-btn">See more..</a>
                            </div>
                            <div class="bg-gradients"></div>
                        </div>
                    </div>

                    <!-- Single Featured Shows -->
                    <div class="single-featured-shows">
                        <img src="../img/services-pic/light.jpg" alt="">
                        <!-- Content -->
                        <div class="featured-shows-content">
                            <div class="shows-text">
                                <h4>Light Rentals</h4>
                                <p></p>
                                <a href="#" class="buy-tickets-btn">See more..</a>
                            </div>
                            <div class="bg-gradients"></div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Featured Shows Area End ##### -->
