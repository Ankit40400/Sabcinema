<!DOCTYPE html>
<html>
<head>
	<title>CineWeb</title>
</head>
<body>

<?php
include 'head.php';
?>

<div class="container">
  <h2></h2>  

 <!--slide show starts-->
  <div id="myCarousel" class="carousel slide" data-ride="carousel" >
   
	<!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active" ></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" >
      	<div class="item active"  >
        	<img src="slideshowimages/slideshow1.jpg" alt="Go to demand section if you are not getting what you want to see" style="" width:100%;">
       	</div>

    </div>

    <!-- Left Right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    
	<a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<!--slide show ends here-->

<hr style="border-top-color: cyan;"></hr>

<div class="container-fluid">
<!--category wise movies-->
	<h1 style="margin-bottom: 20px; text-align: center;">CineWeb</h1>
		<div class="category_section" style="margin-bottom: 40px;">
			<div class="row">
				
				<div class="col-md-3 col-lg-3 col-sm-3 col-xs-6">
					<a href="">
						<img src="slideshowimages/bollymovies.jpg" class="img-responsive img-rounded" alt="bollywood movies" >
						<div class="caption">
						<p style="margin-top: 6px; text-align: center;"> </p>
						</div>
					</a>
				</div>

				<div class="col-md-3 col-lg-3 col-sm-3 col-xs-6 ">
					<a href="">
						<img src="slideshowimages/bollyseries.jpg" class="img-responsive img-rounded" alt="bollywood series">
						<div class="caption">
						<p style="margin-top: 6px;  text-align: center;"> </p>
						</div>
					</a>
				</div>

				<div class="col-md-3 col-lg-3 col-sm-3 col-xs-6">
					<a href="">
						<img src="slideshowimages/hollyseries.jpg" class="img-responsive img-rounded" alt="holywood series" >
						
					</a>
				</div>

				<div class="col-md-3 col-lg-3 col-sm-3 col-xs-6">
					<a href="">
						<img src="slideshowimages/hollymovies.jpg" class="img-responsive img-rounded" alt="hollywood movies">
						
					</a>
				</div>

			</div>
		</div>
<!--category wise movies end here-->

</div>

<div>

<?php
include_once 'footer.php';
?>

</div>

</body>
</html>