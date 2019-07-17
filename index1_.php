<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first.";
  	header('location: login_.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login_.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
  <title>
Romanian Aviation History
</title>
<link rel="icon" href="poze/stema.png" type="image" size="12x16">
  <link rel="stylesheet" type="text/css" href="style.css">


<style>
body  {
  background-image: url("poze/fundal.png");
}

.btn-group {
	padding: 2% 5% 3% 5%;

}

.btn-group .button {
  background-color: #0000CD; 
  border: none;
  color: white;
  padding: 18px 33px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  cursor: pointer;
  float: left;
  width: 7%;
}

.btn-group .button:hover {
  background-color: 	#0000FF;
}

</style>
</head>
<body>

<center>
<img src="poze/imagine avion.jpg" alt="avion" width="22%">
</center>

<div class="btn-group">
  <a href="index1_.php" class="button">Home</a>
  <a href="personalitati_.php" class="button">People</a>
  <a href="galerie_.php" class="button">Photos</a>
  <a href="ulm_.php" class="button">ULM</a>
  <a href="avioane_.php" class="button">Airplanes</a>
  <a href="hidroavioane_.php" class="button">Seaplanes</a>
  <a href="planoare_.php" class="button">Gliders</a>
  <a href="contact_.php" class="button">Contact</a>

</div><br>

<img src="poze/images.png" alt="stema" width=22% align=left style="padding: 2% 4% 0% 18%">

<div class="header">
	<h2>Welcome!</h2>
</div>
<div class="content">

  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>


    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome! <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index1_.php?logout='1'" style="color: red;">Log out</a> </p>
    <?php endif ?>
</div>
		
</body>
</html>
