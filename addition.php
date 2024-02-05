<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="bootstrap.min.css"></link>
<style>
.main_width{
width: 500px;
}
</style>
</head>
<body > 
<div class="container bg-dark text-white mt-5 main_width">
<form action="" method="POST">  <div class="row">
<div class="col-12"><h1 class="text-warning border-bottom">Addition</h1></div>
</div>
<div class="row  p-2">
<div class="col-3">ENTER 1 NO:</div>
<div class="col-9"><input type="text" name="txt1" class="form-control"></div>
</div>
<div class="row p-2">
<div class="col-3">ENTER 2 NO:</div>
<div class="col-9"><input type="text" name="txt2" class="form-control"></div>
</div>
<div class="row">
<div class="col-12"><input type="submit" class="btn bg-warning" name="add"></div>
</div>
</form>
</div>
</body>
</html>
<?php
if(isset($_POST["add"]))
{
$no1=$_POST["txt1"];
$no2=$_POST["txt2"];
$ans=$no1+$no2;
echo"<div class='alert alert-warning'>Answer Is:".$ans ."</div>";
}
?>