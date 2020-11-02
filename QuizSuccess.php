<?php
	include 'dba.inc.php';
?>


<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="quizsuccess.css">
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
        <title>Create Your Own Character Quiz</title> <!--Browswer's tab displays the title specified in this tag; always inside of <head>-->
    </head>
	
    <body class="container">
        <header>
            <h1>Quiz List!</h1>
        </header>
			<section class="quizname">
                <ol>
                    <div class="form-group">
                            <?php
								$sql = "SELECT quizID, quizname FROM qdb.data";
								$result = $conn->query($sql);

								if ($result->num_rows > 0) {
										// Output data of each row
										while($row = $result->fetch_assoc()) {
											$msg = $row['quizname'];
											$userID = $row['quizID'];
											echo "<a href=http://localhost/CharacterQuiz/QuizListTest.php?id=$userID> $msg </a>"."</br>";
										
										}
								}
								else
								{
									echo "Quiz Success Page Not Loading";
								}

								$conn->close();
							?>
                    </div>
                </ol>
            </section>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>		
    </body>
</div>
</html>