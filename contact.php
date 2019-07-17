<!DOCTYPE html>
<html>
<head>
  <title>
Istoria aviației române
</title>
<link rel="icon" href="poze/stema.png" type="image" size="12x16">


<style>
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
  width: 10%;
  border-radius: 10px 10px 10px 10px;
}

.button:hover {
  background-color: 	#0000FF;
}

form.email p {
font-size: 15px;
padding: 0 0 10px 0;
margin: 0;
}

form.email input, form.email textarea {
font-family: Arial;
font-size: 15px;
margin: 0 0 20px 0;
}

form.email input {
background: #f5f5f5;
padding: 5px;
border: 1px solid #bbb;
border-radius: 5px;
}

form.email textarea {
background: #f5f5f5;
padding: 5px;
border: 1px solid #bbb;
border-radius: 5px;
width: 400px;
height: 100px;
}

form.email input.send {
color: #fff;
background: #0000CD;
border: #000;
padding: 10px 25px 10px 25px;
cursor: pointer;
}


form, .content {
  width: 30%;
  margin: 5% 0% 0% 58%;
  padding: 20px;
  border: 1px solid #0000CD;
  background: white;
  border-radius: 10px 10px 10px 10px;
}
</style>
</head>
<body background="poze/fundal.png">


<img src="poze/images.png" alt="stema" width=22% align=left style="padding: 3% 0% 0% 10%">

<form class="email" action="send_form_email.php" method="post">
<p>Nume complet:</p>
<input type="text" name="name" />
<p>E-mail:</p>
<input type="text" name="email" />

<p>Mesaj:</p>
<textarea name="message"></textarea></p>
<input class="send" type="submit" value="Trimite">
</form>

 <a href="index1.php" class="button" style="margin: 5% 30% 5% 40%">Înapoi</a>
<br>

</body>
</html>