<?php
	include 'dba.inc.php';
?>

<?php
if (isset($_GET['id']))
{
	echo urldecode($_GET['id'])."<br>";
	$quizID = $_GET['id']; 
}

$sql = "SELECT * FROM qdb.data WHERE quizID='$quizID'";
$result = $conn->query($sql);

	while ($row = $result->fetch_assoc()){
				$quizname = $row['quizname'];
				$characterOne = $row['characterOne'];
				$characterTwo = $row['characterTwo'];
				$characterThree = $row['characterThree'];
				$characterFour = $row['characterFour'];
				$optionOneQuestion = $row['optionOneQuestion'];
				$optionOneOne = $row['optionOneOne'];
				$optionOneTwo = $row['optionOneTwo'];	
				$optionOneThree = $row['optionOneThree'];	
				$optionOneFour = $row['optionOneFour'];	
				$optionTwoQuestion = $row['optionTwoQuestion'];	
				$optionTwoOne = $row['optionTwoOne'];	
				$optionTwoTwo = $row['optionTwoTwo'];	
				$optionTwoThree = $row['optionTwoThree'];
				$optionTwoFour = $row['optionTwoFour'];
				$optionThreeQuestion = $row['optionThreeQuestion'];
				$optionThreeOne = $row['optionThreeOne'];
				$optionThreeTwo = $row['optionThreeTwo'];
				$optionThreeThree = $row['optionThreeThree'];
				$optionThreeFour = $row['optionThreeFour'];
				$optionFourQuestion = $row['optionFourQuestion'];
				$optionFourOne = $row['optionFourOne'];
				$optionFourTwo = $row['optionFourTwo'];
				$optionFourThree = $row['optionFourThree'];
				$optionFourFour = $row['optionFourFour'];
				$optionFiveQuestion = $row['optionFiveQuestion'];
				$optionFiveOne = $row['optionFiveOne'];
				$optionFiveTwo = $row['optionFiveTwo'];
				$optionFiveThree = $row['optionFiveThree'];
				$optionFiveFour = $row['optionFiveFour'];
				$optionSixQuestion = $row['optionSixQuestion'];
				$optionSixOne = $row['optionSixOne'];
				$optionSixTwo = $row['optionSixTwo'];
				$optionSixThree = $row['optionSixThree'];
				$optionSixFour = $row['optionSixFour'];
				$optionSevenQuestion = $row['optionSevenQuestion'];
				$optionSevenOne = $row['optionSevenOne'];
				$optionSevenTwo = $row['optionSevenTwo'];
				$optionSevenThree = $row['optionSevenThree'];
				$optionSevenFour = $row['optionSevenFour'];
				$optionEightQuestion = $row['optionEightQuestion'];
				$optionEightOne = $row['optionEightOne'];
				$optionEightTwo = $row['optionEightTwo'];
				$optionEightThree = $row['optionEightThree'];
				$optionEightFour = $row['optionEightFour'];
				$optionNineQuestion = $row['optionNineQuestion'];
				$optionNineOne = $row['optionNineOne'];
				$optionNineTwo = $row['optionNineTwo'];
				$optionNineThree = $row['optionNineThree'];
				$optionNineFour = $row['optionNineFour'];
				$optionTenQuestion = $row['optionTenQuestion'];
				$optionTenOne = $row['optionTenOne'];
				$optionTenTwo = $row['optionTenTwo'];
				$optionTenThree = $row['optionTenThree'];
				$optionTenFour = $row['optionTenFour'];			
		}
?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="quizlist.css">
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

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo "Test"?></title> <!--Browswer's tab displays the title specified in this tag; always inside of <head>-->
    </head>

<body>
<div class="outer-box-frame">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Create Your Own Character Quiz</title> <!--Browswer's tab displays the title specified in this tag; always inside of <head>-->
    </head>
	
    <body class="container">
        <header>
            <h1>Which Character Quiz!</h1>
        </header>
        <div id="introduction">
            <p>Welcome to the <b><?php echo $quizname?></b> quiz!</p>
        </div>
        <form action="FinalResult.php?id=<?php echo $quizID; ?>" method="post" id="quiz" class="quest">
            <section class="questionsAnswers">
                <div>
                    <ol>
                        <li>
                            <label for="questionOne"><?php echo $optionOneQuestion?></label>
                            <ol>
								<div>
									<input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
									<label for="question-1-answers-A">A) <?php echo $optionOneOne ?></label>
								</div>
								
								<div>
									<input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
									<label for="question-1-answers-B">B) <?php echo $optionOneTwo ?></label>
								</div>
								
								<div>
									<input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
									<label for="question-1-answers-C">C) <?php echo $optionOneThree ?></label>
								</div>
								
								<div>
									<input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
									<label for="question-1-answers-D">D) <?php echo $optionOneFour ?></label>
								</div>
                            </ol>
                        </li>
                        <li>
                            <label for="questionTwo"><?php echo $optionTwoQuestion ?></label>
                            <ol>
								<div>
									<input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
									<label for="question-2-answers-A">A) <?php echo $optionTwoOne ?></label>
								</div>
								
								<div>
									<input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
									<label for="question-2-answers-B">B) <?php echo $optionTwoTwo ?></label>
								</div>
								
								<div>
									<input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
									<label for="question-2-answers-C">C) <?php echo $optionTwoThree ?></label>
								</div>
								
								<div>
									<input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
									<label for="question-2-answers-D">D) <?php echo $optionTwoFour ?></label>
								</div>
                            </ol>
                        </li>
                        <li>
                            <label for="questionThree"><?php echo $optionThreeQuestion ?></label>
                            <ol>
								<div>
									<input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
									<label for="question-3-answers-A">A) <?php echo $optionThreeOne ?></label>
								</div>
								
								<div>
									<input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
									<label for="question-3-answers-B">B) <?php echo $optionThreeTwo ?></label>
								</div>
								
								<div>
									<input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
									<label for="question-3-answers-C">C) <?php echo $optionThreeThree ?></label>
								</div>
								
								<div>
									<input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
									<label for="question-3-answers-D">D) <?php echo $optionThreeFour ?></label>
								</div>
                            </ol>
                        </li>
                        <li>
                            <label for="questionFour"><?php echo $optionFourQuestion?></label>
                            <ol>
								<div>
									<input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
									<label for="question-4-answers-A">A) <?php echo $optionFourOne ?></label>
								</div>
								
								<div>
									<input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
									<label for="question-4-answers-B">B) <?php echo $optionFourTwo ?></label>
								</div>
								
								<div>
									<input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
									<label for="question-4-answers-C">C) <?php echo $optionFourThree ?></label>
								</div>
								
								<div>
									<input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
									<label for="question-4-answers-D">D) <?php echo $optionFourFour ?></label>
								</div>
                            </ol>
                        </li>
                        <li>
                            <label for="questionFive"><?php echo $optionFiveQuestion ?></label>
                            <ol>
								<div>
									<input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
									<label for="question-5-answers-A">A) <?php echo $optionFiveOne ?></label>
								</div>
								
								<div>
									<input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
									<label for="question-5-answers-B">B) <?php echo $optionFiveTwo ?></label>
								</div>
								
								<div>
									<input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
									<label for="question-5-answers-C">C) <?php echo $optionFiveThree ?></label>
								</div>
								
								<div>
									<input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
									<label for="question-5-answers-D">D) <?php echo $optionFiveFour ?></label>
								</div>
                            </ol>
                        </li>
                        <li>
                            <label for="questionSix"><?php echo $optionSixQuestion ?></label>
                            <ol>
								<div>
									<input type="radio" name="question-6-answers" id="question-6-answers-A" value="A" />
									<label for="question-6-answers-A">A) <?php echo $optionSixOne ?></label>
								</div>
								
								<div>
									<input type="radio" name="question-6-answers" id="question-6-answers-B" value="B" />
									<label for="question-6-answers-B">B) <?php echo $optionSixTwo ?></label>
								</div>
								
								<div>
									<input type="radio" name="question-6-answers" id="question-6-answers-C" value="C" />
									<label for="question-6-answers-C">C) <?php echo $optionSixThree ?></label>
								</div>
								
								<div>
									<input type="radio" name="question-6-answers" id="question-6-answers-D" value="D" />
									<label for="question-6-answers-D">D) <?php echo $optionSixFour ?></label>
								</div>
                            </ol>
                        </li>
                        <li>
                            <label for="questionSeven"><?php echo $optionSevenQuestion ?></label>
                            <ol>
								<div>
									<input type="radio" name="question-7-answers" id="question-7-answers-A" value="A" />
									<label for="question-7-answers-A">A) <?php echo $optionSevenOne ?></label>
								</div>
								
								<div>
									<input type="radio" name="question-7-answers" id="question-7-answers-B" value="B" />
									<label for="question-7-answers-B">B) <?php echo $optionSevenTwo ?></label>
								</div>
								
								<div>
									<input type="radio" name="question-7-answers" id="question-7-answers-C" value="C" />
									<label for="question-7-answers-C">C) <?php echo $optionSevenThree ?></label>
								</div>
								
								<div>
									<input type="radio" name="question-7-answers" id="question-7-answers-D" value="D" />
									<label for="question-7-answers-D">D) <?php echo $optionSevenFour ?></label>
								</div>
                            </ol>
                        </li>
                        <li>
                            <label for="questionEight"><?php echo $optionEightQuestion ?></label>
                            <ol>
								<div>
									<input type="radio" name="question-8-answers" id="question-8-answers-A" value="A" />
									<label for="question-8-answers-A">A) <?php echo $optionEightOne ?></label>
								</div>
								
								<div>
									<input type="radio" name="question-8-answers" id="question-8-answers-B" value="B" />
									<label for="question-8-answers-B">B) <?php echo $optionEightTwo ?></label>
								</div>
								
								<div>
									<input type="radio" name="question-8-answers" id="question-8-answers-C" value="C" />
									<label for="question-8-answers-C">C) <?php echo $optionEightThree ?></label>
								</div>
								
								<div>
									<input type="radio" name="question-8-answers" id="question-8-answers-D" value="D" />
									<label for="question-8-answers-D">D) <?php echo $optionEightFour ?></label>
								</div>
                            </ol>
                        </li>
                        <li>
                            <label for="questionNine"><?php echo $optionNineQuestion ?></label>
                            <ol>
								<div>
									<input type="radio" name="question-9-answers" id="question-9-answers-A" value="A" />
									<label for="question-9-answers-A">A) <?php echo $optionNineOne ?></label>
								</div>
								
								<div>
									<input type="radio" name="question-9-answers" id="question-9-answers-B" value="B" />
									<label for="question-9-answers-B">B) <?php echo $optionNineTwo ?></label>
								</div>
								
								<div>
									<input type="radio" name="question-9-answers" id="question-9-answers-C" value="C" />
									<label for="question-9-answers-C">C) <?php echo $optionNineThree ?></label>
								</div>
								
								<div>
									<input type="radio" name="question-9-answers" id="question-9-answers-D" value="D" />
									<label for="question-9-answers-D">D) <?php echo $optionNineFour ?></label>
								</div>
                            </ol>
                        </li>
                        <li>
                            <label for="questionTen"><?php echo $optionTenQuestion ?></label>
                            <ol>
								<div>
									<input type="radio" name="question-10-answers" id="question-10-answers-A" value="A" />
									<label for="question-10-answers-A">A) <?php echo $optionTenOne ?></label>
								</div>
								
								<div>
									<input type="radio" name="question-10-answers" id="question-10-answers-B" value="B" />
									<label for="question-10-answers-B">B) <?php echo $optionTenTwo ?></label>
								</div>
								
								<div>
									<input type="radio" name="question-10-answers" id="question-10-answers-C" value="C" />
									<label for="question-10-answers-C">C) <?php echo $optionTenThree ?></label>
								</div>
								
								<div>
									<input type="radio" name="question-10-answers" id="question-10-answers-D" value="D" />
									<label for="question-10-answers-D">D) <?php echo $optionTenFour ?></label>
								</div>
                            </ol>
                        </li>
                    </ol>
                </div>
            </section>
			<div style="width:194px;" align="right">
            <button type="submit" class="btn btn-danger">Submit</button>
            <button type="reset" class="btn btn-info">Reset</button>
			</div>
        </form>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>		
    </body>
</div>
</html>