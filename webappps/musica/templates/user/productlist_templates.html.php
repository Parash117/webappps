<!-- ##### Header Area End ##### -->
<div class="breadcumb-area bg-img bg-overlay2" style="height: 45px;">
<div class="bradcumbContent">
        <h2>Services</h2>
    </div>
</div>
 <div class="bg-gradients"></div>
<!-- ##### Upcoming Shows Area Start ##### -->
    <div class="upcoming-shows-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h2></h2>
                        <h6></h6>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <!-- Upcoming Shows Content -->
                    <div class="upcoming-shows-content">

<?php foreach($products as $product): ?>
                        <!-- Single Upcoming Shows -->
                        <div class="single-upcoming-shows d-flex align-items-center flex-wrap">
                            <div class="shows-date">
                                <h2> <span></span></h2>
                            </div>
                            <div class="shows-desc d-flex align-items-center">
                                <div class="shows-img">
                                    <img src="img/services-pic/red_cam.png" alt="">
                                </div>
                                <div class="shows-name">
                                    <h6> <?php echo $product['pname']; ?></h6>
                                    <p></p>
                                </div>
                            </div>
                            <div class="shows-location">
                                <p></p>
                            </div>
                            <div class="shows-time">
                                <p></p>
                            </div>
                            <div class="buy-tickets">
                                <a href="productview?pid=<?php echo $product['pid'] ?>" class="btn musica-btn">View Details</a>
                            </div>
                        </div>
                      <?php endforeach; ?>
</div>
</div>
</div>
</div>
</div>



    <!-- ##### Upcoming Shows Area End ##### -->
