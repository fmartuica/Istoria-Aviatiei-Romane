<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "Trebuie să te autentifici mai întâi.";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
  <title>
Istoria aviației române
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

.button1 {
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
  width: 8%;
  margin: 1% 0% 0% 44%;
  border-radius: 10px 10px 10px 10px;
}
</style>
</head>
<body>

<center>
<img src="poze/imagine avion.jpg" alt="avion" width="22%">
</center>

<div class="btn-group">
  <a href="index1.php" class="button">Acasă</a>
  <a href="personalitati.php" class="button">Personalități</a>
  <a href="galerie.php" class="button">Galerie foto</a>
  <a href="ulm.php" class="button">ULM</a>
  <a href="avioane.php" class="button">Avioane</a>
  <a href="hidroavioane.php" class="button">Hidroavioane</a>
  <a href="planoare.php" class="button">Planoare</a>
  <a href="constructori.php" class="button">Începuturi</a>

</div><br>
<a href="contact.php" class="button1">Contact</a><br>
<img src="poze/images.png" alt="stema" width=22% align=left style="padding: 2% 4% 0% 18%">

<div class="header">
	<h2>Bine ați venit!</h2>
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
    	<p>Bine ați venit! <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index1.php?logout='1'" style="color: red;">Deconectare</a> </p>
    <?php endif ?>
</div>


		
</body>
</html>
