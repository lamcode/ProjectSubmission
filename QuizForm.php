<?php
	include 'dba.inc.php';
?>


<?php 
//QuizName
$quizTitle = $_POST["quizname"];

//Character Quiz Results
$firstchar = $_POST["firstCharacter"];
$secondchar = $_POST["secondCharacter"];
$thirdchar = $_POST["thirdCharacter"];
$fourthchar = $_POST["fourthCharacter"];

//Question Results
//Question 1
$firstQ = $_POST["firstQuestion"];
$firstQOne = $_POST["oneAnswerOne"];
$firstQTwo = $_POST["oneAnswerTwo"];
$firstQThree = $_POST["oneAnswerThree"];
$firstQFour  = $_POST["oneAnswerFour"];

//Question 2
$secondQ = $_POST["secondQuestion"];
$secondQOne = $_POST["twoAnswerOne"];
$secondQTwo = $_POST["twoAnswerTwo"];
$secondQThree = $_POST["twoAnswerThree"];
$secondQFour  = $_POST["twoAnswerFour"];

//Question 3
$thirdQ = $_POST["thirdQuestion"];
$thirdQOne = $_POST["threeAnswerOne"];
$thirdQTwo = $_POST["threeAnswerTwo"];
$thirdQThree = $_POST["threeAnswerThree"];
$thirdQFour  = $_POST["threeAnswerFour"];

//Question 4
$fourthQ = $_POST["fourthQuestion"];
$fourthQOne = $_POST["fourAnswerOne"];
$fourthQTwo = $_POST["fourAnswerTwo"];
$fourthQThree = $_POST["fourAnswerThree"];
$fourthQFour  = $_POST["fourAnswerFour"];

//Question 5
$fifthQ = $_POST["fifthQuestion"];
$fifthQOne = $_POST["fiveAnswerOne"];
$fifthQTwo = $_POST["fiveAnswerTwo"];
$fifthQThree = $_POST["fiveAnswerThree"];
$fifthQFour  = $_POST["fiveAnswerFour"];

//Question 6
$sixthQ = $_POST["sixthQuestion"];
$sixthQOne = $_POST["sixAnswerOne"];
$sixthQTwo = $_POST["sixAnswerTwo"];
$sixthQThree = $_POST["sixAnswerThree"];
$sixthQFour  = $_POST["sixAnswerFour"];

//Question 7
$seventhQ = $_POST["seventhQuestion"];
$seventhQOne = $_POST["sevenAnswerOne"];
$seventhQTwo = $_POST["sevenAnswerTwo"];
$seventhQThree = $_POST["sevenAnswerThree"];
$seventhQFour  = $_POST["sevenAnswerFour"];

//Question 8
$eigthQ = $_POST["eigthQuestion"];
$eigthQOne = $_POST["eightAnswerOne"];
$eigthQTwo = $_POST["eightAnswerTwo"];
$eigthQThree = $_POST["eightAnswerThree"];
$eigthQFour  = $_POST["eightAnswerFour"];

//Question 9
$ninthQ = $_POST["ninthQuestion"];
$ninthQOne = $_POST["nineAnswerOne"];
$ninthQTwo = $_POST["nineAnswerTwo"];
$ninthQThree = $_POST["nineAnswerThree"];
$ninthQFour  = $_POST["nineAnswerFour"];

//Question 10
$tenthQ = $_POST["tenthQuestion"];
$tenthQOne = $_POST["tenAnswerOne"];
$tenthQTwo = $_POST["tenAnswerTwo"];
$tenthQThree = $_POST["tenAnswerThree"];
$tenthQFour  = $_POST["tenAnswerFour"];

// $sql = "INSERT INTO `qdb`.`data` (`quizname`, `characterOne`, `characterTwo`, `characterThree`, `characterFour`, `optionOneQuestion`, `optionOneOne`, `optionOneTwo`, `optionOneThree`, `optionOneFour`, `optionTwoQuestion`, `optionTwoOne`, `optionTwoTwo`, `optionTwoThree`, `optionTwoFour`, `optionThreeQuestion`, `optionThreeOne`, `optionThreeTwo`, `optionThreeThree`, `optionThreeFour`, `optionFourQuestion`, `optionFourOne`, `optionFourTwo`, `optionFourThree`, `optionFourFour`, `optionFiveQuestion`, `optionFiveOne`, `optionFiveTwo`, `optionFiveThree`, `optionFiveFour`, `optionSixQuestion`, `optionSixOne`, `optionSixTwo`, `optionSixThree`, `optionSixFour`, `optionSevenQuestion`, `optionSevenOne`, `optionSevenTwo`, `optionSevenThree`, `optionSevenFour`, `optionEightQuestion`, `optionEightOne`, `optionEightTwo`, `optionEightThree`, `optionEightFour`, `optionNineQuestion`, `optionNineOne`, `optionNineTwo`, `optionNineThree`, `optionNineFour`, `optionTenQuestion`, `optionTenOne`, `optionTenTwo`, `optionTenThree`, `optionTenFour`) VALUES ('$quizTitle', '$firstchar', '$secondchar', '$thirdchar', '$fourthchar', '$firstQ', '$firstQOne', '$firstQTwo', '$firstQThree', '$firstQFour', '$secondQ', '$secondQOne', '$secondQTwo', '$secondQThree', '$secondQFour', '$thirdQ', '$thirdQOne', '$thirdQTwo', '$thirdQThree', '$thirdQFour', '$fourthQ', '$fourthQOne', '$fourthQTwo', '$fourthQThree', '$fourthQFour', '$fifthQ', '$fifthQOne', '$fifthQTwo', '$fifthQThree', '$fifthQFour', '$sixthQ', '$sixthQOne', '$sixthQTwo', '$sixthQThree', '$sixthQFour', '$seventhQ', '$seventhQOne', '$seventhQTwo', '$seventhQThree', '$seventhQFour', '$eigthQ', '$eigthQOne', '$eigthQTwo', '$eigthQThree', '$eigthQFour', '$ninthQ', '$ninthQOne', '$ninthQTwo', '$ninthQThree', '$ninthQFour', '$tenthQ', '$tenthQOne', '$tenthQTwo', '$tenthQThree', '$tenthQFour')";
// $conn->query("$sql");

if (empty($firstchar) || empty($secondchar) || empty($thirdchar) || empty($fourthchar) || empty($firstQ) || empty($firstQOne) || empty($firstQTwo) || empty($firstQThree) || empty($firstQFour) || empty($secondQ) || empty($secondQOne) || empty($secondQTwo) || empty($secondQThree) || empty($secondQFour) || empty($thirdQ) || empty($thirdQOne) || empty($thirdQTwo) || empty($thirdQThree) || empty($thirdQFour) || empty($fourthQ) || empty($fourthQOne) || empty($fourthQTwo) || empty($fourthQThree) || empty($fourthQFour) || empty($fifthQ) || empty($fifthQOne) || empty($fifthQTwo) || empty($fifthQThree) || empty($fifthQFour) || empty($sixthQ) || empty($sixthQOne) || empty($sixthQTwo) || empty($sixthQThree) || empty($sixthQFour) || empty($seventhQ) || empty($seventhQOne) || empty($seventhQTwo) || empty($seventhQThree) || empty($seventhQFour) || empty($eigthQ) || empty($eigthQOne) || empty($eigthQTwo) || empty($eigthQThree) || empty($eigthQFour) || empty($ninthQ) || empty($ninthQOne) || empty($ninthQTwo) || empty($ninthQThree) || empty($ninthQFour) || empty($tenthQ) || empty($tenthQOne) || empty($tenthQTwo) || empty($tenthQThree) || empty($tenthQFour)){
	$msg = "You left a field empty! Please try again.";
	header( 'Location: http://localhost/CharacterQuiz/mainpage.php?msg=' . urlencode($msg));
} else {
		$sql = "INSERT INTO `qdb`.`data` (`quizname`, `characterOne`, `characterTwo`, `characterThree`, `characterFour`, `optionOneQuestion`, `optionOneOne`, `optionOneTwo`, `optionOneThree`, `optionOneFour`, `optionTwoQuestion`, `optionTwoOne`, `optionTwoTwo`, `optionTwoThree`, `optionTwoFour`, `optionThreeQuestion`, `optionThreeOne`, `optionThreeTwo`, `optionThreeThree`, `optionThreeFour`, `optionFourQuestion`, `optionFourOne`, `optionFourTwo`, `optionFourThree`, `optionFourFour`, `optionFiveQuestion`, `optionFiveOne`, `optionFiveTwo`, `optionFiveThree`, `optionFiveFour`, `optionSixQuestion`, `optionSixOne`, `optionSixTwo`, `optionSixThree`, `optionSixFour`, `optionSevenQuestion`, `optionSevenOne`, `optionSevenTwo`, `optionSevenThree`, `optionSevenFour`, `optionEightQuestion`, `optionEightOne`, `optionEightTwo`, `optionEightThree`, `optionEightFour`, `optionNineQuestion`, `optionNineOne`, `optionNineTwo`, `optionNineThree`, `optionNineFour`, `optionTenQuestion`, `optionTenOne`, `optionTenTwo`, `optionTenThree`, `optionTenFour`) VALUES ('$quizTitle', '$firstchar', '$secondchar', '$thirdchar', '$fourthchar', '$firstQ', '$firstQOne', '$firstQTwo', '$firstQThree', '$firstQFour', '$secondQ', '$secondQOne', '$secondQTwo', '$secondQThree', '$secondQFour', '$thirdQ', '$thirdQOne', '$thirdQTwo', '$thirdQThree', '$thirdQFour', '$fourthQ', '$fourthQOne', '$fourthQTwo', '$fourthQThree', '$fourthQFour', '$fifthQ', '$fifthQOne', '$fifthQTwo', '$fifthQThree', '$fifthQFour', '$sixthQ', '$sixthQOne', '$sixthQTwo', '$sixthQThree', '$sixthQFour', '$seventhQ', '$seventhQOne', '$seventhQTwo', '$seventhQThree', '$seventhQFour', '$eigthQ', '$eigthQOne', '$eigthQTwo', '$eigthQThree', '$eigthQFour', '$ninthQ', '$ninthQOne', '$ninthQTwo', '$ninthQThree', '$ninthQFour', '$tenthQ', '$tenthQOne', '$tenthQTwo', '$tenthQThree', '$tenthQFour')";

		if ($conn->query($sql) === TRUE) {
			$msg = "Quiz Created!";
			header( 'Location: http://localhost/CharacterQuiz/QuizSuccess.php?msg=' . urlencode($msg));
			} 				
			else {
			$msg = "Something went wrong! Please try again.";
			header( 'Location: http://localhost/CharacterQuiz/mainpage.php?msg=' . urlencode($msg));
			}
}
?>