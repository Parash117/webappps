<!-- ##### Blog Area Start ##### -->
<?php
$product_images = new Database('product_image');
$product_image = $product_images->find('pid', $product['pid']);
//$pro_im = $product_image->fetch();
$img = array();
foreach($product_image as $pro){
  array_push($img, $pro['image_name']);
}
 ?>
<div class="blog-area mt-30 section-padding-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="fitness-blog-posts">

                    <!-- Single Post Start -->
                    <div class="single-blog-post mb-100 wow fadeInUp" data-wow-delay="100ms">
                        <!-- Post Thumb -->
                        <div class="blog-post-thumb mb-30">
                            <img src="../uploads/images/<?php echo $img[1]; ?>" alt="" style="height: 600px;">
                        </div>
                        <!-- Post Title -->
                        <a href="#" class="post-title"><?php  echo $product['pname']; ?></a>
                        <!-- Post Meta -->
                        <div class="post-meta d-flex justify-content-between">
                            <div class="post-date">
                                <p>Category : <?php echo $product['p_type'];?></p>
                            </div>
                            <!-- Comments -->
                            <p class="comments"><a href="#"></a></p>
                        </div>
                        <!-- bg gradients -->
                        <div class="bg-gradients mb-30 w-25"></div>
                        <!-- Post Excerpt -->
                        <p><?php echo $product['discription']; ?></p>
                    </div>





                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Blog Area End ##### -->


<!-- ##### Featured Shows Area Start ##### -->
<div class="featured-shows-area section-padding-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading dark">
                    <h2>Images Here</h2>
                    <h6></h6>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="featured-shows-slides owl-carousel">
<?php foreach($img as $im){ ?>
                    <!-- Single Featured Shows -->
                    <div class="single-featured-shows">
                        <img src="../uploads/images/<?php echo $im; ?>" alt="">
                        <!-- Content -->

                    </div>
<?php }?>


                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">

<div class="buy-tickets" style="-webkit-box-flex: 0;
-ms-flex: 80% 80% 50%;
flex: 80% 20% 50%;
max-width: 50%;
width: 50%;
margin-bottom: 30px;
text-align: center;">
    <a href="#" class="btn musica-btn" style="margin-left:70%; width: 300px;text-align:center;">View Details</a>
</div>
</div>

<!-- ##### Featured Shows Area End ##### -->
