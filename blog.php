<?php
//Initialize Session
session_start();

if (isset($_SESSION['login'])) {

    $fname = $_SESSION['fname'];
    $lname = $_SESSION['lname'];

?>

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


<div class="container">
<div class="row text-center">
<div class="box">
<div class="col-lg-12">
<h2 class="text-center">Welcome <?php echo $fname; echo " "; echo $lname; ?> - <a href="logout.php">Logout</a></h2>
<hr>
<h3 class="font_simple" >Our <strong>Blog</strong></h3>

<hr></div>


<div class="col-md-12 ">
                    <img class="img-responsive" src="img/coco.jpg" alt="">
                    <h2 class="font_simple"><b>COCONUT OIL COFFEE</b></h2>
                    <h4 class="font_simple">June 13, 2020</h4>
                    <p style="text-align:center">Start your morning off with this great recipe for hot coffee with coconut oil and butter.</p>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#m1">Read More</button>
                <hr></div>
<br>
                <div class="col-md-12 ">
                    <img class="img-responsive" src="img/irish.jpg" alt="">
                    <h2 class="font_simple"><b>IRISH COFFEE</b></h2>
                    <h4 class="font_simple">June 15, 2020</h4>
                    <p style="text-align:center">Take the edge off with a Fresh hot cup of coffee made with Irish whiskey and Irish Cream.</p>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#m2">Read More</button>
                <hr></div>
<br>
                <div class="col-md-12">
                    <img class="img-responsive" src="img/latte.jpg" alt="">
                    <h2 class="font_simple"><b>FROZEN CARAMEL LATTE</b></h2>
                    <h4 class="font_simple">July,25 2020</h4>
                    <p style="text-align:center">Sweetened with caramel sauce and topped with whipped cream, this will make you happy any time of day.</p>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#m3">Read More</button>
                <hr></div>

</div></div></div>


<div id="m1" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">COCONUT OIL COFFEE</h4>
      </div>
      <div class="modal-body">
        <h3>INGREDIENTS</h3>
	<ul>
	<li>Cold Coffee</li>
	<li>Coconut milk</li>
	<li>Milk of your choice (I use skim)</li>
	<li>Coconut syrup (recipe below)</li>
	<li>Ice cubes</li>
	</ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<div id="m3" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">FROZEN CARAMEL LATTE</h4>
      </div>
      <div class="modal-body">
        <h3>INGREDIENTS</h3>
	<ul>
	<li>3 fluid ounces brewed espresso</li>
	<li>1 tablespoon caramel sauce</li>
	<li>1 tablespoon caramel sauce</li>
	<li>¾ cup milk</li>
	<li>1 ½ cups ice cubes</li>
	</ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


<div id="m2" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">IRISH COFFEE</h4>
      </div>
      <div class="modal-body">
        <h3>INGREDIENTS</h3>
	<ul>
	<li>6 ounces hot, freshly brewed coffee</li>
	<li>1 teaspoon granulated sugar</li>
	<li>1 teaspoon packed brown sugar</li>
	<li>1 1/2 ounces Irish whiskey</li>
	<li>Freshly whipped cream</li>
	</ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>



<footer>
<div class="container">
<div class="row">
<div class="col-lg-12 text-center">
<p>Copyright &copy; The Cafeteria 2020</p>
</div></div></div>
</footer>


</body>
</html>
<?php

} else {
    header("location:log.php ");
}
?>