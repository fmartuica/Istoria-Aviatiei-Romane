<?php include('server.php') ?>
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
</style>
  
</head>
<body>
<img src="poze/images.png" alt="stema" width=22% align=left style="padding: 0% 10% 10% 18%">
  <div class="header">
  	<h2>Înregistrare</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Nume de utilizator:</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email:</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Parolă:</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirmă parola:</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Înregistrare</button>
  	</div>
  	<p>
  		Ai deja cont? <a href="login.php">Conectare</a>
  	</p>
  </form>
</body>
</html>