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

<script>
$(document).ready(function () {
$("#login").click(function () {

email=$("#email").val();
password=$("#password").val();

$.ajax({
type:"POST",
url:"check.php",
data: "email=" + email + "&password=" + password,
success:function(html)
{
if(html=='true')
{
$("#add_err2").html('<div class="alert alert-success"> \
                             <strong>Authenticated</strong>. \ \
                              </div>');
window.location.href = "blog.php";

}

else if(html=="false")
{

$("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Authentication</strong> failed. \ \
                                                 </div>');  
}

else
{
 $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Error</strong> processing request. Please try again. \ \
                                                 </div>');
}
},
beforeSend: function(){
                        $("#add_err2").html("loading...");
                    }
                });

return false;
});
});
</script>

</head>

<body> 


<?php require_once 'nav.php' ?>

<div class="contianer">
<div class="box">
<div class="row">
<div class="col-lg-12 ">
<hr><h3 class="font_simple text-center">
Log <strong> in </strong></h3>
<hr>
<br>
<div id="add_err2"></div>
<form role="form">
<div class="col-md-12 form-group"><label><b>Email</b></label><input type="text" id="email" name="email" class="form-control" maxlength="100"></div> 
<div class="col-md-12 form-group"><label><b>Password</b></label><input type="password" id="password" name="password" class="form-control" maxlength="250"></div> 
<div class="col-md-12 form-group"><button type="submit" id="login" class="btn btn-primary">Log In</button></div>
</form>
<div class="col-md-12 form-group"><a href="reg.php"><button type="submit" class="btn btn-primary">New Join Here</button></a></div>

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