<?php
	include 'dba.inc.php';
?>

<?php
	$quizID = $_GET['id'];
	
	$sql = "SELECT * FROM qdb.data WHERE quizID='$quizID'";
	$result = $conn->query($sql);
	
		while($row = $result->fetch_assoc()) {
			$resultOne = $row['characterOne'];
			$resultTwo = $row['characterTwo'];
			$resultThree = $row['characterThree'];
			$resultFour = $row['characterFour'];
		}


	$answer1 = $_POST['question-1-answers'];
	$answer2 = $_POST['question-2-answers'];
	$answer3 = $_POST['question-3-answers'];
	$answer4 = $_POST['question-4-answers'];
	$answer5 = $_POST['question-5-answers'];
	$answer6 = $_POST['question-6-answers'];
	$answer7 = $_POST['question-7-answers'];
	$answer8 = $_POST['question-8-answers'];
	$answer9 = $_POST['question-9-answers'];
	$answer10 = $_POST['question-10-answers'];

	$totalAChoice = 0;
	$totalBChoice = 0;
	$totalCChoice = 0;
	$totalDChoice = 0;
	
	if ($answer1 == "A") { $totalAChoice++; }
	if ($answer1 == "B") { $totalBChoice++; }
	if ($answer1 == "C") { $totalCChoice++; }
	if ($answer1 == "D") { $totalDChoice++; }

	if ($answer2 == "A") { $totalAChoice++; }
	if ($answer2 == "B") { $totalBChoice++; }
	if ($answer2 == "C") { $totalCChoice++; }
	if ($answer2 == "D") { $totalDChoice++; }

	if ($answer3 == "A") { $totalAChoice++; }
	if ($answer3 == "B") { $totalBChoice++; }
	if ($answer3 == "C") { $totalCChoice++; }
	if ($answer3 == "D") { $totalDChoice++; }

	if ($answer4 == "A") { $totalAChoice++; }
	if ($answer4 == "B") { $totalBChoice++; }
	if ($answer4 == "C") { $totalCChoice++; }
	if ($answer4 == "D") { $totalDChoice++; }

	if ($answer5 == "A") { $totalAChoice++; }
	if ($answer5 == "B") { $totalBChoice++; }
	if ($answer5 == "C") { $totalCChoice++; }
	if ($answer5 == "D") { $totalDChoice++; }

	if ($answer6 == "A") { $totalAChoice++; }
	if ($answer6 == "B") { $totalBChoice++; }
	if ($answer6 == "C") { $totalCChoice++; }
	if ($answer6 == "D") { $totalDChoice++; }

	if ($answer7 == "A") { $totalAChoice++; }
	if ($answer7 == "B") { $totalBChoice++; }
	if ($answer7 == "C") { $totalCChoice++; }
	if ($answer7 == "D") { $totalDChoice++; }

	if ($answer8 == "A") { $totalAChoice++; }
	if ($answer8 == "B") { $totalBChoice++; }
	if ($answer8 == "C") { $totalCChoice++; }
	if ($answer8 == "D") { $totalDChoice++; }

	if ($answer9 == "A") { $totalAChoice++; }
	if ($answer9 == "B") { $totalBChoice++; }
	if ($answer9 == "C") { $totalCChoice++; }
	if ($answer9 == "D") { $totalDChoice++; }

	if ($answer10 == "A") { $totalAChoice++; }
	if ($answer10 == "B") { $totalBChoice++; }
	if ($answer10 == "C") { $totalCChoice++; }
	if ($answer10 == "D") { $totalDChoice++; }
	
	$quizResult = max($totalAChoice, $totalBChoice, $totalCChoice, $totalDChoice);
	
	if ($totalAChoice == $quizResult){
		$finalResult = $resultOne;
	}
	else if ($totalBChoice == $quizResult){
		$finalResult = $resultTwo;
	}
	else if ($totalCChoice == $quizResult){
		$finalResult = $resultThree;
	}
	else{
		$finalResult = $resultFour;
	}
?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="FinalPage.css">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />


<head>
  <meta charset="UTF-8">
  <link href="https://fonts.googleapis.com/css?family=Inter:900&display=swap" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.4.3/p5.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script  src="function.js"></script>
</head>
<div class="outer-box-frame">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>The character you are most similar to is <?php echo $finalResult; ?></title> <!--Browswer's tab displays the title specified in this tag; always inside of <head>-->
    </head>
	
    <body class="container">
			<header>
				<h1>The character you are most similar to is <?php echo $finalResult; ?></h1>
			</header>
			<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>		
    </body>
</div>
</html>