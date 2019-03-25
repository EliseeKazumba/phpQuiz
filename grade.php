<!DOCTYPE html>
<html>
<head>
	<title>phpQuiz</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>
	<div id="page-wrap">

		<h1>Your Results!</h1>
		
        <?php
            // this section lays out the php function of declaring the questions in the form
        	// later on translating them into the answers.
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
        	$answer11 = $_POST['question-11-answers'];
        	$answer12 = $_POST['question-12-answers'];
        	$answer13 = $_POST['question-13-answers'];
        	$answer14 = $_POST['question-14-answers'];
        	$answer15 = $_POST['question-15-answers'];
        	$answer16 = $_POST['question-16-answers'];
        	$answer17 = $_POST['question-17-answers'];
        	$answer18 = $_POST['question-18-answers'];
        	$answer19 = $_POST['question-19-answers'];
        	$answer20 = $_POST['question-20-answers'];
        	// the total correct answers are stored in this variable
            $totalCorrect = 0;
            
            //if function used to check wether the answr is correct and then increments it
            if ($answer1 == "B") { $totalCorrect++; }
            if ($answer2 == "A") { $totalCorrect++; }
            if ($answer3 == "C") { $totalCorrect++; }
            if ($answer4 == "D") { $totalCorrect++; }
            if ($answer5 == "D") { $totalCorrect++; }
            if ($answer6 == "B") { $totalCorrect++; }
            if ($answer7 == "A") { $totalCorrect++; }
            if ($answer8 == "C") { $totalCorrect++; }
            if ($answer9 == "D") { $totalCorrect++; }
            if ($answer10 == "D") { $totalCorrect++; }
            if ($answer11 == "B") { $totalCorrect++; }
            if ($answer12 == "A") { $totalCorrect++; }
            if ($answer13 == "C") { $totalCorrect++; }
            if ($answer14 == "D") { $totalCorrect++; }
            if ($answer15 == "D") { $totalCorrect++; }
            if ($answer16 == "B") { $totalCorrect++; }
            if ($answer17 == "A") { $totalCorrect++; }
            if ($answer18 == "C") { $totalCorrect++; }
            if ($answer19 == "D") { $totalCorrect++; }
            if ($answer20) { $totalCorrect++; }
            
            echo "<div id='results'>$totalCorrect / 20 correct</div>";
            
        ?>
        	<br>
        	Press the back button to return to your answers and see which you would like to retry and submit
	
	</div>
	
</body>
</html>