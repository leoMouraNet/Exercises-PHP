<!DOCTYPE html>
<html lang="en">
 	<head>
	    <meta charset="utf-8">
	    <title>Quiz Game</title>
	    <!-- Latest compiled Bootstrap minified CSS -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	
	    <style>
	    #container {
	      width: 800px;
	      height: 600px;
	      position: fixed;	
		  top: 50%;
		  left: 50%;
		  margin-top: -300px;
		  margin-left: -400px;	      
	      background: #770088;
	    }
	    #question {
	      width: 800px;
	      height: 100px;
	      font-size:18pt;
	      text-align: center;
	      position: absolute;
	      top:100px;
	    }
		h1 {
		    color: yellow;
		}
		body {
			color:white;
		}
		button,input {
			color: #222 !important;
		}
	    </style>

	</head>
	<body role="document">
		<div id ="container">
		<?php
			session_start();
			$answer = $_SESSION['answer'];
			$quiz = $_SESSION['quiz'];
			$count = $_SESSION['count'];
			$score = 0; 
			foreach ($answer as $key => $value) {
				if ($quiz[$key]['answer']==$value) {
					$score++;
				}
			}
			?>
			<div class="progress">
				<div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: <?=$count*100/5;?>%">
				</div>
			</div>
			<div id="question">
				<div>Your Scored <?=$score;?> of 5 (<?=$score*100/5;?>%) </div>
				<button type="button" onclick="location.href='http://localhost/exercises/quiz/index.php?game=reset'" class="btn btn-danger">Restart quiz</button>
			</div>
		</div>
	</body>
</html>
