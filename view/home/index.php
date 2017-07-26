<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="public/img/banner.jpg" alt="Los Angeles" style="width:100%;">
        <div class="carousel-caption">
          <h3>Los Angeles</h3>
          <p>LA is always so much fun!</p>
        </div>
      </div>

      <div class="item">
        <img src="public/img/banner.jpg" alt="Chicago" style="width:100%;">
        <div class="carousel-caption">
          <h3>Chicago</h3>
          <p>Thank you, Chicago!</p>
        </div>
      </div>
    
      <div class="item">
        <img src="public/img/banner.jpg" alt="New York" style="width:100%;">
        <div class="carousel-caption">
          <h3>New York</h3>
          <p>We love the Big Apple!</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
<div class="row" style="margin-top: 10px; height: 50px; background-color: #000; border-bottom: 1px #fff solid;">
    <p style="text-align: center; font-weight: bold; line-height: 50px; vertical-align: middle; display: block; color: #fff; font-size: 30px;">New product</p>
</div>
<div class="row" style="margin-top: 10px;">
<?php
for ($i = 1; $i <= 3; $i++) {
    ?>
    <div class="row">
        <div class="col-lg-4 product">
            <img src="public/img/anh1.jpg" width="200" height="200" class="center-img"/>
            <div class="overlay">
                <div class="text">Product <?php echo $i; ?></div>
                <!--<img src="public/img/cart.png" width="40" height="40" class="center-img"/>-->
            </div>
        </div>
        <div class="col-lg-4 product">
            <img src="public/img/anh1.jpg" width="200" height="200" class="center-img"/>
            <div class="overlay">
                <div class="text">Product <?php echo $i; ?></div>
                <!--<img src="public/img/cart.png" width="40" height="40" class="center-img"/>-->
            </div>
        </div>
        <div class="col-lg-4 product">
            <img src="public/img/anh1.jpg" width="200" height="200" class="center-img"/>
            <div class="overlay">
                <div class="text">Product <?php echo $i; ?></div>
                <!--<img src="public/img/cart.png" width="40" height="40" class="center-img"/>-->
            </div>
        </div>
    </div>
    <?php
}
?>
    </div>
<div class="row">
    <ul class="pagination" style="float: right;">
        <li class="disabled"><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
    </ul>
</div>
