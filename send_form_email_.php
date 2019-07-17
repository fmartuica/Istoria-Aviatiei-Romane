<?php

$myemail = "flavius_martuica@yahoo.com";


$name = check_input($_POST['name'], "Enter the name!");
$email = check_input($_POST['email']);
$message = check_input($_POST['message'], "Enter the message!");


if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
{
show_error("The E-mail address is invalid!");
}

$message = "

Name: $name
E-mail: $email

Message:
$message

";


mail($myemail, $message);


header('Location: index1_.php');
exit();


function check_input($data, $problem='')
{
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);




if ($problem && strlen($data) == 0)
{
show_error($problem);
}
return $data;
}

function show_error($myError)
{
	 if( $myError ) { echo "<script type='text/javascript'>alert('Error!')</script>";}
?>

<html>
<title>
Romanian Aviation History
</title>
<link rel="icon" href="poze/stema.png" type="image" size="12x16">
  <link rel="stylesheet" type="text/css" href="style.css">

  <style>
  body  {
  background-image: url("poze/fundal.png");
}

form {
    background-color: white;
    width: 300px;
    padding: 25px;
    border: 4px solid #0000CD;
    margin: 25px;
	margin: 5% 10% 6% 36%;
	border-radius: 10px 10px 10px 10px;
}
.button {
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
  width: 20%;
  border-radius: 10px 10px 10px 10px;
}

.button:hover {
  background-color: #0000FF;
}

.btn-group {
	padding: 2% 5% 3% 4%;

}

.btn-group .button1 {
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

.btn-group .button1:hover {
  background-color: 	#0000FF;
}

</style>
  
</head>
<body>
<center>
<img src="poze/imagine avion.jpg" alt="avion" width="22%">
</center>
<div class="btn-group">
  <a href="index1_.php" class="button1">Home</a>
  <a href="personalitati_.php" class="button1">People</a>
  <a href="galerie_.php" class="button1">Photos</a>
  <a href="ulm_.php" class="button1">ULM</a>
  <a href="avioane_.php" class="button1">Airplanes</a>
  <a href="hidroavioane_.php" class="button1">Seaplanes</a>
  <a href="planoare_.php" class="button1">Gliders</a>
  <a href="contact_.php" class="button1">Contact</a>

</div><br>


<form>
<p>Please correct the next mistakes :</p>
<strong><?php echo $myError; ?></strong>
<p>Try again!</p>
</form>

<a href="contact_.php" class="button" style="margin: 0% 0% 0% 36%">Try again!</a>
<br>
</body>
</html>
<?php
exit();
}
?>