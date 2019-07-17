<?php

$myemail = "flavius_martuica@yahoo.com";


$name = check_input($_POST['name'], "Introduceți numele!");
$email = check_input($_POST['email']);
$message = check_input($_POST['message'], "Introduceți mesajul!");


if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
{
show_error("Adresa de email nu este valida!");
}

$message = "

Name: $name
E-mail: $email

Message:
$message

";


mail($myemail, $message);


header('Location: index1.php');
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
	 if( $myError ) { echo "<script type='text/javascript'>alert('Eroare!')</script>";}
?>

<html>
<title>
Istoria aviației române
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
  <a href="index1.php" class="button1">Acasă</a>
  <a href="personalitati.php" class="button1">Personalități</a>
  <a href="galerie.php" class="button1">Galerie foto</a>
  <a href="ulm.php" class="button1">ULM</a>
  <a href="avioane.php" class="button1">Avioane</a>
  <a href="hidroavioane.php" class="button1">Hidroavioane</a>
  <a href="planoare.php" class="button1">Planoare</a>
  <a href="constructori.php" class="button1">Începuturi</a>

</div><br>


<form>
<p>Vă rugăm corectați următoarele erori:</p>
<strong><?php echo $myError; ?></strong>
<p>Încercați din nou!</p>
</form>

<a href="contact.php" class="button" style="margin: 0% 0% 0% 36%">Încearcă din nou!</a>
<br>
</body>
</html>
<?php
exit();
}
?>