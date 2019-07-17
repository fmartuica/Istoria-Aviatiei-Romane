<?php include('server_.php') ?>
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

.button {
  background-color: #0000CD; 
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 26px;
  margin: 0% 7%;
  cursor: pointer;
  width: 86%;
}


</style>
</head>

<body>
<center>
<img src="poze/imagine avion.jpg" alt="avion" width="22%">
</center>
<button class="button">To view the content, please Sign in!</button>
<img src="poze/images.png" alt="stema" width=22% align=left style="padding: 5% 10% 10% 18%">

  <div class="header">
  	<h2>Connection</h2>
  </div>
	 
  <form method="post" action="login_.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Log in</button>
  	</div>
  	<p>
  		Do not have an accont yet? <a href="register_.php">Registration</a>
  	</p>
  </form>
</body>
</html>