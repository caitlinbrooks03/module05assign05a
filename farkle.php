<?php
	// this is for the functionality of the game	

session_start();

// dice variables
    $_SESSION["dieOne"] = 0;
    $_SESSION["dieTwo"] = 0;
    $_SESSION["dieThree"] = 0;
    $_SESSION["dieFour"] = 0;
    $_SESSION["dieFive"] = 0;
    $_SESSION["dieSix"] = 0;

// turn variables
    $_SESSION["turn"] = 0;
    $_SESSION["score"] = 0;

// AI Variables
    $_SESSION["aiScore"] = 0;
	
	
// Page Setup
	
function page($turn, $score, $aiScore) {

    echo <<< HERE
        <p>Turn:  $turn <br> Your Score:  $score <br> AI Score: $aiScore</p>
        <br>
        <input type = "submit" name = "button" value = "Roll All">
        <br>
        <input type = "submit" name = "button" value = "End Turn">    
HERE;

}
	
// Roll Die Functions
	
function rollAll(&$dieOne, &$dieTwo, &$dieThree, &$dieFour, &$dieFive, &$dieSix) {

    $dieOne = rand(1,6);
    $dieTwo = rand(1,6);
    $dieThree = rand(1,6);
    $dieFour = rand(1,6);
    $dieFive = rand(1,6);
    $dieSix = rand(1,6);
    
}

function outputDie(&$dieOne, &$dieTwo, &$dieThree, &$dieFour, &$dieFive, &$dieSix){

    echo "<br>Die 1: $dieOne <br> Die 2: $dieTwo <br> Die 3: $dieThree <br> Die 4: $dieFour <br> Die 5: $dieFive <br> Die 6: $dieSix";

}


// Turn Functions

function endTurn(&$turn, &$score)
{
    $turn += 1;
    
    
    
}
//Persistence functions

function passData(&$dieOne, &$dieTwo, &$dieThree, &$dieFour, &$dieFive, &$dieSix){

        echo <<< HERE
        <input type = "hidden" name="dieOne" value = "$dieOne">
        <input type = "hidden" name = "dieTwo" value = "$dieTwo">
        <input type = "hidden" name = "dieThree" value = "$dieThree">
        <input type = "hidden" name = "dieFour" value = "$dieFour">
        <input type = "hidden" name = "dieFive" value = "$dieFive">
        <input type = "hidden" name = "dieSix" value = "$dieSix">
        
HERE;

}
function passTurn(&$turn, &$score, &$aiScore){

        echo <<< HERE
        <input type = "hidden" name = "turn" value = "$turn">
        <input type = "hidden" name = "score" value = "$score">
	<input type = "hidden" name = "aiScore" value = "$aiScore">

HERE;
}

	
// logic to see if turn is over based on roll
function checkDie(&$dieOne, &$dieTwo, &$dieThree, &$dieFour, &$dieFive, &$dieSix, &$score, &$turn){
	$values = array($dieOne, $dieTwo, $dieThree, $dieFour, $dieFive, $dieSix);
	$one = 0;
	$five = 0;
	
	for ($i=0; $i < 6; $i++) {
		if ($values[$i] == 1) {
			$one = $one + 1;
		}
		else if ($values[$i] == 5) {
			$five = $five + 1;
		}
	}
	
	if ($one > 0) {
		$one = $one * 100;
		$score = $one + $score;
	}
	if ($five > 0) {
		$five = $five * 50;
		$score = $five + $score;
	}
	if ($five == 0 and $one == 0) {
		echo "<br>There are no scoring dice. End Turn.";
		endTurn($turn, $score);
	}
}

// AI Score Generator
// Max Score = 600
// Min Score = 0

function aiScore(&$aiScore){

    $temp = rand(1,600);
    
    if ($temp < 75){
        $aiScore += 50;
    } else if ($temp < 150 and $temp > 75) {
        $aiScore += 100;
    } else if ($temp > 150 and $temp < 190) {
        $aiScore += 150;
    } else if ($temp > 190 and $temp < 245) {
        $aiScore += 200;
    } else if ($temp > 245 and $temp < 285) {
        $aiScore += 250;
    } else if ($temp > 285 and $temp < 335) {
        $aiScore += 300; 
    } else if ($temp > 335 and $temp < 355){
        $aiScore += 350;
    } else if ($temp > 355 and $temp < 400) {
        $aiScore += 400;
    } else if ($temp > 400 and $temp < 445) {
        $aiScore += 450; 
    } else if ($temp > 445 and $temp < 485) {
        $aiScore += 500;
    } else if ($temp > 485 and $temp < 535) {
        $aiScore += 550; 
    } else if ($temp > 535 and $temp < 600){
        $aiScore += 600;
    }   

}

	
?>

<html>
    <header>
        <meta charset ="utf-8">
        <title>Farkle</title>
        <link rel="stylesheet" href = "farkleGame.css">
    </header>
    <body>
        <div class = "wrapper">
        <form action = "farkle.php" method = "POST">
            <?php
                extract($_REQUEST);
                    
                if ($button == "Roll All")
                {
                    rollAll($dieOne, $dieTwo, $dieThree, $dieFour, $dieFive, $dieSix);
                    passData($dieOne, $dieTwo, $dieThree, $dieFour, $dieFive, $dieSix);
                    outputDie($dieOne, $dieTwo, $dieThree, $dieFour, $dieFive, $dieSix);
		    checkDie($dieOne, $dieTwo, $dieThree, $dieFour, $dieFive, $dieSix, $score, $turn);
		    passTurn($turn, $score, $aiScore);
                } else if ($button == "End Turn"){
                    endTurn($turn, $score);
		    aiScore($aiScore);
                    passTurn($turn, $score, $aiScore);
                    
                }
                
                page($turn, $score);
                              
                //echo "<HR>";
                //highlight_file("index.php");
            ?>
						   
        </form>
	</div>
        <footer class = "footer">
            <form action = "index.php" method =   "POST">
                <input type = "submit" name = "button" value = "Return Home" >
            </form>
        </footer>
    </body>
</html>
