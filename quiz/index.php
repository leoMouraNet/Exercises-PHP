<?php
session_start();

if (!isset($_SESSION['count'])) {
    $_SESSION['count'] = 0;
}


if (!isset($_SESSION['answer'])) {
    $_SESSION['answer'] = array();
} 

$answer = $_SESSION['answer'];
$count = $_SESSION['count'];

if (isset($_GET['game'])) {
	if($_GET['game']=="reset") {
		$_SESSION = array();
		$answer = array();
		$count = 0;
	}

	if ($_GET['game']=="previous") {
		if ($count!=0) {
			$count--;
		}
		$_SESSION['count']=$count;
	}

	header('Location: http://localhost/exercises/quiz/index.php');
}


$quiz = array();

$quiz[] = array(
    "question" => "Some months have 31 days, some others have 30 days. How many months have 28 days?",
    "choice" => array("1","2","6","12"),
    "answer" => 3
);

$quiz[] = array(
    "question" => "You are participating in a race. You overtake the second person. What position are you in?",
    "choice" => array("1st","2nd","3rd","4th"),
    "answer" => 1
);

$quiz[] = array(
    "question" => "How much is 150% of 50?",
    "choice" => array("75","55","500","65"),
    "answer" => 0
);

$quiz[] = array(
    "question" => "10 people shake hand with each other. How many handshakes will there be in total?	",
    "choice" => array("20","45","50","100"),
    "answer" => 3
);

$quiz[] = array(
    "question" => "A boy keep 3 mangos, 6 eggs, 1 flower, 2 apples and 5 oranges in his bag. How many fruits does he have in total?",
    "choice" => array("5","6","10","17"),
    "answer" => 2
);

$_SESSION['quiz'] = $quiz; 

if (isset($_POST['answer'])) {
	if ($count<count($quiz)) {
		$answer[$count] = $_POST['answer'];
		$_SESSION['answer'] = $answer; 
		$count++;
		$_SESSION['count']=$count;
	}
}

?>

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
		<?php if ($count<count($quiz)) { ?>
			<div class="progress">
				<div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: <?=$count*100/5;?>%">
				</div>
			</div>
			<div id="question">
				<h1>Question <?=$count+1;?></h1>
				<p style="margin-bottom:30px;"><?=$quiz[$count]['question'];?></p>
				<form role="form" name="quizform" method='post'>
				<div class='radio'><label><input type='radio' name='answer' id='0' value='0' <?=isset($answer[$count]) && $answer[$count]==0?'checked':'';?> /> <?=$quiz[$count]['choice'][0];?></label></div>
				<div class='radio'><label><input type='radio' name='answer' id='1' value='1' <?=isset($answer[$count]) && $answer[$count]==1?'checked':'';?> /> <?=$quiz[$count]['choice'][1];?></label></div>
				<div class='radio'><label><input type='radio' name='answer' id='2' value='2' <?=isset($answer[$count]) && $answer[$count]==2?'checked':'';?> /> <?=$quiz[$count]['choice'][2];?></label></div>
				<div class='radio'><label><input type='radio' name='answer' id='3' value='3' <?=isset($answer[$count]) && $answer[$count]==3?'checked':'';?> /> <?=$quiz[$count]['choice'][3];?></label></div>
				<br>
				<?php if($count!=0) { ?>
					<button type="button" onclick="location.href='http://localhost/exercises/quiz/index.php?game=previous'" class="btn btn-success">Previous</button>
				<?php } ?>
				<input type="submit" class="btn btn-warning" value="Next">	
				</form>
			</div>
		<?php } else {
			header( 'Location: http://localhost/exercises/quiz/score.php' ) ;
		} ?>
		</div>
	</body>
</html>
