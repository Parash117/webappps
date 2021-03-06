<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 90%;
  position: relative;
  margin: auto;
padding-left: 0;
}

.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: black;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.0s;
  animation-name: fade;
  animation-duration: 4s;
}

@-webkit-keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
.prev, .next,.text {font-size: 11px}
}
</style>

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

      <div class="row" style="margin-top: 50px;">
          <div class="col-12">
              <div class="section-heading dark">
                  <h3>Our Work</h3>
                  <h6></h6>
              </div>
          </div>
      </div>
      <div class="slideshow-container">

<?php $i=0; foreach ($works as $work) {?>
  <div class="mySlides fade">
  <a href="<?php echo $work['link']; ?>" target="_blank"><img src="../uploads/work/<?php echo $work['image']; ?>" style="width:100%; height:60%;"></a>
  </div>
<?php $i++; } ?>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>

<br>

<div style="text-align:center">
<?php $j=0; while($j<$i){ ?>
  <span class="dot"></span>
<?php $j++;}?>
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
                        <img src="../img/service/camera.jpg" alt="">
                        <!-- Content -->
                        <div class="featured-shows-content">
                            <div class="shows-text">
                                <h4>Camera Rental</h4>
                                <p></p>
                                <a href="productlist?cpid=3" class="buy-tickets-btn">See more..</a>
                            </div>
                            <div class="bg-gradients"></div>
                        </div>
                    </div>

                    <!-- Single Featured Shows -->
                    <div class="single-featured-shows">
                        <img src="../img/service/lens.jpg" alt="">
                        <!-- Content -->
                        <div class="featured-shows-content">
                            <div class="shows-text">
                                <h4>Lens Rental</h4>
                                <p></p>
                                <a href="productlist?cpid=5" class="buy-tickets-btn">See more..</a>
                            </div>
                            <div class="bg-gradients"></div>
                        </div>
                    </div>

                    <!-- Single Featured Shows -->
                    <div class="single-featured-shows">
                        <img src="../img/service/dubbing.jpg" alt="">
                        <!-- Content -->
                        <div class="featured-shows-content">
                            <div class="shows-text">
                                <h4>Dubbing Studio</h4>
                                <p></p>
                                <a href="dubbing" class="buy-tickets-btn">See more..</a>
                            </div>
                            <div class="bg-gradients"></div>
                        </div>
                    </div>

                    <!-- Single Featured Shows -->
                    <div class="single-featured-shows">
                        <img src="../img/service/light.jpg" alt="">
                        <!-- Content -->
                        <div class="featured-shows-content">
                            <div class="shows-text">
                                <h4>Light Rentals</h4>
                                <p></p>
                                <a href="productlist?cpid=1" class="buy-tickets-btn">See more..</a>
                            </div>
                            <div class="bg-gradients"></div>
                        </div>
                    </div>

                    <!-- Single Featured Shows -->
                    <div class="single-featured-shows">
                        <img src="../img/service/color.jpg" alt="">
                        <!-- Content -->
                        <div class="featured-shows-content">
                            <div class="shows-text">
                                <h4>Color Correction</h4>
                                <p></p>
                                <a href="color" class="buy-tickets-btn">See more..</a>
                            </div>
                            <div class="bg-gradients"></div>
                        </div>
                    </div>

                    <!-- Single Featured Shows -->
                    <div class="single-featured-shows">
                        <img src="../img/service/editing.jpg" alt="">
                        <!-- Content -->
                        <div class="featured-shows-content">
                            <div class="shows-text">
                                <h4>Multi Suit Editing</h4>
                                <p></p>
                                <a href="multiedit" class="buy-tickets-btn">See more..</a>
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
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 5000); // Change image every 2 seconds
}

</script>
