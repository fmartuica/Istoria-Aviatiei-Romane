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
<img src="poze/imagini avioane/i.a.r 817.png" alt="avion" width="22%">
</center>

<center><table style="width:60%">
	<tr>
	  <td>
	  	<div>
	  		<p class="question">1)Care este viteza maximă?</p>

	    	<ul>
	    	<input class="answer" type="radio" name="q1" value="0">
	        <label>a)263 km/oră</label>
	    	<br>
	        <input class="answer" type="radio" name="q1" value="0">
	        <label>b)122 km/oră</label>
	        <br>
	        <input class="answer" type="radio" name="q1" value="0">
	        <label>c)230 km/oră</label>
	        <br>
	        <input class="answer" type="radio" name="q1" value="1">
	        <label id="correctString1">d)172 km/oră</label>
    		</ul>
	  	</div>
	  </td>
	  <td>
	  	<div>
	  		<p class="question">2)care este suprafața portantă?</p>

	    	<ul>
	        <input class="answer" type="radio" name="q2" value="0">
	        <label>a)26.00 m<sup>2</sup></label>
	        <br>
	        <input class="answer" type="radio" name="q2" value="1">
	        <label id="correctString2">b)25,40 m<sup>2</sup></label>
	        <br>
	        <input class="answer" type="radio" name="q2" value="0">
	        <label>c)19.50 m<sup>2</sup></label>
	        <br>
	        <input class="answer" type="radio" name="q2" value="0">
	        <label>d)12.90 m<sup>2</sup></label>
	    	</ul>
	  	</div>
	  </td>
	</tr>
	<tr>
	  <td>
	  	<div>
	  		<p class="question">3)Cine este inginerul proiectant?</p>

	    	<ul>
	        <input class="answer" type="radio" name="q3" value="0">
	        <label>a)Vladimir Novițchi</label>
	        <br>
	        <input class="answer" type="radio" name="q3" value="0">
	        <label>b)Dumitru Popescu</label>
	        <br>
	        <input class="answer" type="radio" name="q3" value="1">
	        <label id="correctString3">c)Radu Manicatide</label>
	        <br>
	        <input class="answer" type="radio" name="q3" value="0">
	        <label>d)Iosif Șilimon</label>
	    	</ul>
		</div>
	  </td>
	  <td>
	  	<div>
	  		<p class="question">4)Câți metri are plafonul?</p>

	    	<ul>
	        <input class="answer" type="radio" name="q4" value="1">
	        <label id="correctString4">a)3.500 m</label>
	        <br>
	        <input class="answer" type="radio" name="q4" value="0">
	        <label>b)4.000 m</label>
	        <br>
	        <input class="answer" type="radio" name="q4" value="0">
	        <label>c)6.200 m</label>
	        <br>
	        <input class="answer" type="radio" name="q4" value="0">
	        <label>d)4.500 m</label>
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
  <a href="iar818h.php" class="button">Continuă</a>
</div><br>



</body>
</html>

