<!DOCTYPE html>
<html>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="css/thiss.css" rel="stylesheet">  
  

<link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

<style>
hr {
    max-width: 400px;
    border-color: #999999;
}

</style>


</head>

<body> 


<?php require_once 'nav.php' ?>

<?php
		
	if (isset($_GET["logout"])) {
		
		if ($_GET["logout"] == "true") { ?>
			
			<div class="alert alert-success">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong>You have been logged out of the system.</strong>
			</div>   

	<?php
		}
	}
	?>

<div class="container">
 
 <div class="row">
  <div class="box">
  <div class="col-lg-12 text-center">
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
      <img class="img-responsive img-size" src="img/slide-1.jpg" >
    </div>

    <div class="item">
      <img class="img-responsive img-size" src="img/slide-2.jpg" >
    </div>

    <div class="item">
      <img class="img-responsive img-size" src="img/slide-3.jpg"\>
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
<h2 class="font_simple" >
   <small>Welcome To</small>
   </h2>
<h1 class="font_stylish">The Cafeteria</h1>
<hr>
<h2 class="font_simple" ><small>By <strong>Yashik</strong></small></h2>
</div></div></div></div>



<div class="container">
<div class="row">
<div class="box">
<div class="col-lg-12 text-center">
<hr>
<h3 class="font_simple" >HOW TO MAKE THE <strong>PERFECT CUP OF COFFEE</strong></h3>
<hr>
<img class="img-responsive img-border img-left" src="img/intro-pic.jpg" alt="">
<hr class="visible-xs">
<p>Making the perfect cup of coffee can be challenging! With so many unique flavours and recipes to choose from, where do you begin? Our website provides you with the best recipes from around the world. Whether you prefer your coffee hot and mild or bracingly cold and strong - we are sure to have what you are looking for. For access to unlimited recipes you must register! Registration is free. Click here to get started!</p>
</div></div></div></div>

<footer>
<div class="container">
<div class="row">
<div class="col-lg-12 text-center">
<p>Copyright &copy; The Cafeteria 2020</p>
</div></div></div>
</footer>

</body>
</html>