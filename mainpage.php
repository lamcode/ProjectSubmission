<?php
	include 'dba.inc.php';
?>

<?php
if (isset($_GET['msg']))
{
	echo urldecode($_GET['msg']);
}
?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="quizstyles.css">
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
            <h1>Create Your Own Character Quiz</h1>
        </header>
        <div id="introduction">
            <h2>Welcome to the Create Your Own Character Quiz Maker!</h2>
            <p>Welcome! This website allows you to create your own character quiz.<br>Pick four characters from your favorite movie, TV show,
                video game, or book. <br>Fill out the form with answers that relate to the chosen characters.<br>Numbers from the form will correspond
                to the characters in the same number. <br>For example, all answers in 1 will correspond to the character that is in the first slot,
                and so forth.</p>
        </div>
        <form id="data-character-quiz" class="text-left" action="QuizForm.php" method="post">
			<section class="quizname">
                <ol>
                    <div class="form-group">
                        <li>
                            <label for="quizname">Quiz Name</label>
                            <input type="text" class="form-control" name="quizname" id="quiznameTitle" autofocus> <!--id tag should be descriptive to make it easier to remember the purpose-->
                        </li>
                    </div>
                </ol>
            </section>
			
            <section class="characters">
                <ol>
                    <div class="form-group">
                        <li>
                            <label for="characterOne">Character One</label>
                            <input type="text" class="form-control" name="firstCharacter" id="characterOne" autofocus> <!--id tag should be descriptive to make it easier to remember the purpose-->
                        </li>
                    </div>
                    <div class="form-group">
                        <li>
                            <label for="characterTwo">Character Two</label>
                            <input type="text" class="form-control" name="secondCharacter" id="characterTwo"> <!--id is especially helpful for organizing content belonging to a div-->
                        </li>
                    </div>
                    <div class="form-group">
                        <li>
                            <label for="characterThree">Character Three</label>
                            <input type="text" class="form-control" name="thirdCharacter" id="characterThree">
                        </li>
                    </div>
                    <div class="form-group">
                        <li>
                            <label for="characterFour">Character Four</label>
                            <input type="text" class="form-control" name="fourthCharacter" id="characterFour">
                        </li>
                    </div>
                </ol>
            </section>

            <section class="questionsAnswers">
                <div>
                    <ol>
                        <li>
                            <label for="questionOne">Question 1</label>
                            <input type="text" class="form-control" name="firstQuestion" id="questionOne">
                            <ol>
                                <li>
                                    <input type="text" class="form-control" name="oneAnswerOne" id="optionOneOne">
                                </li>
                                <li>
                                    <input type="text" class="form-control" name="oneAnswerTwo" id="optionOneTwo">
                                </li>
                                <li>
                                    <input type="text" class="form-control" name="oneAnswerThree" id="optionOneThree">
                                </li>
                                <li>
                                    <input type="text" class="form-control" name="oneAnswerFour" id="optionOneFour">
                                </li>
                            </ol>
                        </li>
                        <li>
                            <label for="questionTwo">Question 2</label>
                            <input type="text" class="form-control" name="secondQuestion" id="questionTwo">
                            <ol>
                                <li>
                                    <input type="text" class="form-control" name="twoAnswerOne" id="optionTwoOne">
                                </li>
                                <li>
                                    <input type="text" class="form-control" name="twoAnswerTwo" id="optionTwoTwo">
                                </li>
                                <li>
                                    <input type="text" class="form-control" name="twoAnswerThree" id="optionTwoThree">
                                </li>
                                <li>
                                    <input type="text" class="form-control" name="twoAnswerFour" id="optionTwoFour">
                                </li>
                            </ol>
                        </li>
                        <li>
                            <label for="questionThree">Question 3</label>
                            <input type="text" class="form-control" name="thirdQuestion" id="questionThree">
                            <ol>
                                <li>
                                    <input type="text" class="form-control" name="threeAnswerOne" id="optionThreeOne">
                                </li>
                                <li>
                                    <input type="text" class="form-control" name="threeAnswerTwo" id="optionThreeTwo">
                                </li>
                                <li>
                                    <input type="text" class="form-control" name="threeAnswerThree" id="optionThreeThree">
                                </li>
                                <li>
                                    <input type="text" class="form-control" name="threeAnswerFour" id="optionThreeFour">
                                </li>
                            </ol>
                        </li>
                        <li>
                            <label for="questionFour">Question 4</label>
                            <input type="text" class="form-control" name="fourthQuestion" id="questionFour">
                            <ol>
                                <li>
                                    <input type="text" class="form-control" name="fourAnswerOne" id="optionFourOne">
                                </li>
                                <li>
                                    <input type="text" class="form-control" name="fourAnswerTwo" id="optionFourTwo">
                                </li>
                                <li>
                                    <input type="text" class="form-control" name="fourAnswerThree" id="optionFourThree">
                                </li>
                                <li>
                                    <input type="text" class="form-control" name="fourAnswerFour" id="optionFourFour">
                                </li>
                            </ol>
                        </li>
                        <li>
                            <label for="questionFive">Question 5</label>
                            <input type="text" class="form-control" name="fifthQuestion" id="questionFive">
                            <ol>
                                <li>
                                    <input type="text" class="form-control" name="fiveAnswerOne" id="optionFiveOne">
                                </li>
                                <li>
                                    <input type="text" class="form-control" name="fiveAnswerTwo" id="optionFiveTwo">
                                </li>
                                <li>
                                    <input type="text" class="form-control" name="fiveAnswerThree" id="optionFiveThree">
                                </li>
                                <li>
                                    <input type="text" class="form-control" name="fiveAnswerFour" id="optionFiveFour">
                                </li>
                            </ol>
                        </li>
                        <li>
                            <label for="questionSix">Question 6</label>
                            <input type="text" class="form-control" name="sixthQuestion" id="questionSix">
                            <ol>
                                <li>
                                    <input type="text" class="form-control" name="sixAnswerOne" id="optionSixOne">
                                </li>
                                <li>
                                    <input type="text" class="form-control" name="sixAnswerTwo" id="optionSixTwo">
                                </li>
                                <li>
                                    <input type="text" class="form-control" name="sixAnswerThree" id="optionSixThree">
                                </li>
                                <li>
                                    <input type="text" class="form-control" name="sixAnswerFour" id="optionSixFour">
                                </li>
                            </ol>
                        </li>
                        <li>
                            <label for="questionSeven">Question 7</label>
                            <input type="text" class="form-control" name="seventhQuestion" id="questionSeven">
                            <ol>
                                <li>
                                    <input type="text" class="form-control" name="sevenAnswerOne" id="optionSevenOne">
                                </li>
                                <li>
                                    <input type="text" class="form-control" name="sevenAnswerTwo" id="optionSevenTwo">
                                </li>
                                <li>
                                    <input type="text" class="form-control" name="sevenAnswerThree" id="optionSevenThree">
                                </li>
                                <li>
                                    <input type="text" class="form-control" name="sevenAnswerFour" id="optionSevenFour">
                                </li>
                            </ol>
                        </li>
                        <li>
                            <label for="questionEight">Question 8</label>
                            <input type="text" class="form-control" name="eigthQuestion" id="questionEight">
                            <ol>
                                <li>
                                    <input type="text" class="form-control" name="eightAnswerOne" id="optionEightOne">
                                </li>
                                <li>
                                    <input type="text" class="form-control" name="eightAnswerTwo" id="optionEightTwo">
                                </li>
                                <li>
                                    <input type="text" class="form-control" name="eightAnswerThree" id="optionEightThree">
                                </li>
                                <li>
                                    <input type="text" class="form-control" name="eightAnswerFour" id="optionEightFour">
                                </li>
                            </ol>
                        </li>
                        <li>
                            <label for="questionNine">Question 9</label>
                            <input type="text" class="form-control" name="ninthQuestion" id="questionNine">
                            <ol>
                                <li>
                                    <input type="text" class="form-control" name="nineAnswerOne" id="optionNineOne">
                                </li>
                                <li>
                                    <input type="text" class="form-control" name="nineAnswerTwo" id="optionNineTwo">
                                </li>
                                <li>
                                    <input type="text" class="form-control" name="nineAnswerThree" id="optionNineThree">
                                </li>
                                <li>
                                    <input type="text" class="form-control" name="nineAnswerFour" id="optionNineFour">
                                </li>
                            </ol>
                        </li>
                        <li>
                            <label for="questionTen">Question 10</label>
                            <input type="text" class="form-control" name="tenthQuestion" id="questionTen">
                            <ol>
                                <li>
                                    <input type="text" class="form-control" name="tenAnswerOne" id="optionTenOne">
                                </li>
                                <li>
                                    <input type="text" class="form-control" name="tenAnswerTwo" id="optionTenTwo">
                                </li>
                                <li>
                                    <input type="text" class="form-control" name="tenAnswerThree" id="optionTenThree">
                                </li>
                                <li>
                                    <input type="text" class="form-control" name="tenAnswerFour" id="optionTenFour">
                                </li>
                            </ol>
                        </li>
                    </ol>
                </div>
            </section>
            <button type="submit" class="btn btn-danger">Submit</button>
            <button type="reset" class="btn btn-info">Reset</button>
        </form>
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>		
    </body>
</div>
</html>