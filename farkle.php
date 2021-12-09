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
	
	
// Page Setup
	
function page($turn, $score) {

    echo <<< HERE
        <p>Turn:  $turn <br> Score:  $score</p>
        <br>
        <input type = "submit" name = "button" value = "Roll All">
        <br>
        <input type = "submit" name = "button" value = "Roll Die One">
        <input type = "submit" name = "button" value = "Roll Die Two">
        <input type = "submit" name = "button" value = "Roll Die Three">
        <input type = "submit" name = "button" value = "Roll Die Four">
        <input type = "submit" name = "button" value = "Roll Die Five">
        <input type = "submit" name = "button" value = "Roll Die Six">
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

function rolldieOne(&$dieOne){
    $dieOne = rand(1,6);
}

function rolldieTwo(&$dieTwo){
    $dieTwo = rand(1,6);
}

function rolldieThree(&$dieThree){
    $dieThree = rand(1,6);
}

function rolldieFour(&$dieFour){
    $dieFour = rand(1,6);
}

function rolldieFive(&$dieFive){
    $dieFive = rand(1,6);
}

function rolldieSix(&$dieSix){
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
function passTurn(&$turn, &$score){

        echo <<< HERE
        <input type = "hidden" name = "turn" value = "$turn">
        <input type = "hidden" name = "score" value = "$score">

HERE;
}

	
// logic to see if turn is over based on roll
function checkDie(&$dieOne, &$dieTwo, &$dieThree, &$dieFour, &$dieFive, &$dieSix){
	$values = array($dieOne, $dieTwo, $dieThree, $dieFour, $dieFive, $dieSix);
	$one = 0;
	$two = 0;
	$three = 0;
	$four = 0;
	$five = 0;
	$six = 0;
	
	for ($i=0; $i < 6; $i++) {
		if ($values[$i] == 1) {
			$one = $one + 1;
			break;
		}
		else if ($values[$i] == 2) {
			$two = $two + 1;
		}
		else if ($values[$i] == 3) {
			$three = $three + 1;
		}
		else if ($values[$i] == 4) {
			$four = $four + 1;
		}
		else if ($values[$i] == 5) {
			$five = $five + 1;
			break;
		}
		else if ($values[$i] == 6) {
			$six = $six + 1;
		}
	}
	
	if ($one > 0) {
		echo "There is at least one 1";
	}
	else if ($two >= 3) {
		echo "There is at least three 2s";
	}
	else if ($three >= 3) {
		echo "There is at least three 3s";
	}
	else if ($four >= 3) {
		echo "There is at least three 4s";
	}
	else if ($five > 0) {
		echo "There is at least one 5";
	}
	else if ($six >= 3) {
		echo "There is at least three 6s";
	}
	else {
		echo "There are no scoring dice. End Turn.";
	}
}

	
?>

<html>
    <header>
        <meta charset ="utf-8">
        <title>Farkle</title>
        <link rel="stylesheet" href = farkleGame.css">
    </header>
    <body>
            
        <form action = "farkle.php" method = "POST">
            <?php
                extract($_REQUEST);
                    
                if ($button == "Roll All")
                {
                    rollAll($dieOne, $dieTwo, $dieThree, $dieFour, $dieFive, $dieSix);
                    passTurn($turn, $score);
                    passData($dieOne, $dieTwo, $dieThree, $dieFour, $dieFive, $dieSix);
                    outputDie($dieOne, $dieTwo, $dieThree, $dieFour, $dieFive, $dieSix);
		    checkDie($dieOne, $dieTwo, $dieThree, $dieFour, $dieFive, $dieSix);
                } else if ($button == "Roll Die One"){
                
                    rolldieOne($dieOne);
                    passTurn($turn, $score);
                    passData($dieOne, $dieTwo, $dieThree, $dieFour, $dieFive, $dieSix);
                    outputDie($dieOne, $dieTwo, $dieThree, $dieFour, $dieFive, $dieSix);
                } else if ($button == "Roll Die Two"){
                
                    rolldieTwo($dieTwo);
                    passTurn($turn, $score);
                    passData($dieOne, $dieTwo, $dieThree, $dieFour, $dieFive, $dieSix);
                    outputDie($dieOne, $dieTwo, $dieThree, $dieFour, $dieFive, $dieSix);
                } else if ($button == "Roll Die Three"){
                
                    rolldieThree($dieThree);
                    passTurn($turn, $score);
                    passData($dieOne, $dieTwo, $dieThree, $dieFour, $dieFive, $dieSix);
                    outputDie($dieOne, $dieTwo, $dieThree, $dieFour, $dieFive, $dieSix);
                } else if ($button == "Roll Die Four"){
                
                    rolldieFour($dieFour);
                    passTurn($turn, $score);
                    passData($dieOne, $dieTwo, $dieThree, $dieFour, $dieFive, $dieSix);
                    outputDie($dieOne, $dieTwo, $dieThree, $dieFour, $dieFive, $dieSix);
                } else if ($button == "Roll Die Five"){
                
                    rolldieFive($dieFive);
                    passTurn($turn, $score);
                    passData($dieOne, $dieTwo, $dieThree, $dieFour, $dieFive, $dieSix);
                    outputDie($dieOne, $dieTwo, $dieThree, $dieFour, $dieFive, $dieSix);
                } else if ($button == "Roll Die Six"){
                
                    rolldieSix($dieSix);
                    passTurn($turn, $score);
                    passData($dieOne, $dieTwo, $dieThree, $dieFour, $dieFive, $dieSix);
                    outputDie($dieOne, $dieTwo, $dieThree, $dieFour, $dieFive, $dieSix);
                } else if ($button == "End Turn"){
                    endTurn($turn, $score);
                    passTurn($turn, $score);
                    
                }
                
                page($turn, $score);
                              
                //echo "<HR>";
                //highlight_file("index.php");
            ?>
        </form>
    
    </body>
</html>
