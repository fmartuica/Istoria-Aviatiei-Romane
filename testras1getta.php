<!DOCTYPE html>
<html>
<head>
  <title>
Istoria aviației române
</title>
<link rel="icon" href="poze/stema.png" type="image" size="12x16">
	<link href="quiz.css" rel="stylesheet">

<style>
.button {
  background-color: #0000CD;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  margin: 4% 0% 0% 0%;
}

}
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #0000CD;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #0000FF;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body background="poze/fundal.png">

<center>
<img src="poze/imagini avioane/ras-1 getta.png" alt="avion" width="22%">
</center>

<center><table style="width:60%">
	<tr>
	  <td>
	  	<div>
	  		<p class="question">1)Câți metri are anvergura?</p>

	    	<ul>
	    	<input class="answer" type="radio" name="q1" value="1">
	        <label id="correctString1">a)16,00</label>
	    	<br>
	        <input class="answer" type="radio" name="q1" value="0">
	        <label>b)14,56</label>
	        <br>
	        <input class="answer" type="radio" name="q1" value="0">
	        <label>c)21,00</label>
	        <br>
	        <input class="answer" type="radio" name="q1" value="0">
	        <label>d)10,55</label>
    		</ul>
	  	</div>
	  </td>
	  <td>
	  	<div>
	  		<p class="question">2)Cine nu avea loc în avion?</p>

	    	<ul>
	        <input class="answer" type="radio" name="q2" value="0">
	        <label>a)pilotul</label>
	        <br>
	        <input class="answer" type="radio" name="q2" value="1">
	        <label id="correctString2">b)trăgătorul</label>
	        <br>
	        <input class="answer" type="radio" name="q2" value="0">
	        <label>c)navigatorul</label>
	        <br>
	        <input class="answer" type="radio" name="q2" value="0">
	        <label>d)mecanicul</label>
	    	</ul>
	  	</div>
	  </td>
	</tr>
	<tr>
	  <td>
	  	<div>
	  		<p class="question">3)Câte exemplare au fost construite?</p>

	    	<ul>
	        <input class="answer" type="radio" name="q3" value="0">
	        <label>a)2</label>
	        <br>
	        <input class="answer" type="radio" name="q3" value="1">
	        <label id="correctString3">b)4</label>
	        <br>
	        <input class="answer" type="radio" name="q3" value="0">
	        <label>c)1</label>
	        <br>
	        <input class="answer" type="radio" name="q3" value="0">
	        <label>d)3</label>
	    	</ul>
		</div>
	  </td>
	  <td>
	  	<div>
	  		<p class="question">4)În ce an s-a efectuat primul zbor?</p>

	    	<ul>
	        <input class="answer" type="radio" name="q4" value="0">
	        <label>a)1922</label>
	        <br>
	        <input class="answer" type="radio" name="q4" value="1">
	        <label id="correctString4">b)1925</label>
	        <br>
	        <input class="answer" type="radio" name="q4" value="0">
	        <label>c)1923</label>
	        <br>
	        <input class="answer" type="radio" name="q4" value="0">
	        <label>d)1931</label>
    		</ul>
	  	</div>
	  </td>
	</tr>
	
	</table></center>
<br/>
<center><div class="submitter">
          <input class="quizSubmit" id="submitButton" onClick="submitQuiz()"
          type="submit" value="verifica" />
    </div>
  
    <div class="quizAnswers" id="correctAnswer1"></div>
	 <div class="quizAnswers" id="correctAnswer2"></div>
    <div class="quizAnswers" id="correctAnswer3"></div>
    <div class="quizAnswers" id="correctAnswer4"></div>




    <div>
    	<h2 class="quizScore" id="userScore"></h2>
    </div>
	</div></center>

	</div>
	<script src="question.js"></script>

<div class="btn" align="center">
  <a href="ras1getta.php" class="button">Continuă</a>
</div><br>



</body>
</html>

